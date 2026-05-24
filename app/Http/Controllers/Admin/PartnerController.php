<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Soal 3: Fitur pencarian kata kunci data Partner menggunakan LIKE
        $search = $request->input('search');

        $partners = Partner::when($search, function ($query) use ($search) {
            return $query->where('name', 'LIKE', '%' . $search . '%');
        })->latest()->paginate(10); // Pagination 10 data per halaman

        return view('admin.partners.index', compact('partners', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input nama dan gambar logo
        $request->validate([
            'name' => 'required|string|max:255',
            'logo_url' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048', // Maksimal 2MB
        ]);

        // Proses upload file logo ke folder storage/app/public/partners
        $logoPath = $request->file('logo_url')->store('partners', 'public');

        // Simpan data ke database (Soal 2)
        Partner::create([
            'name' => $request->name,
            'logo_url' => $logoPath,
        ]);

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'logo_url' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);

        $partner = Partner::findOrFail($id);
        $logoPath = $partner->logo_url; // Default gunakan logo lama jika tidak ganti

        // Jika ada file logo baru yang diunggah
        if ($request->hasFile('logo_url')) {
            // Hapus file logo lama dari folder storage agar tidak menumpuk sampah file
            if ($partner->logo_url && Storage::disk('public')->exists($partner->logo_url)) {
                Storage::disk('public')->delete($partner->logo_url);
            }
            // Simpan logo yang baru
            $logoPath = $request->file('logo_url')->store('partners', 'public');
        }

        $partner->update([
            'name' => $request->name,
            'logo_url' => $logoPath,
        ]);

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);

        // Hapus file logo dari folder storage sebelum menghapus datanya dari database
        if ($partner->logo_url && Storage::disk('public')->exists($partner->logo_url)) {
            Storage::disk('public')->delete($partner->logo_url);
        }

        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil dihapus!');
    }
}