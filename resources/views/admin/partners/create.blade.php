@extends('layouts.admin')

@section('content')
<div class="p-6 space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-indigo-950">Tambah Partner</h1>
        <p class="text-gray-500 text-sm mt-1">Daftarkan instansi atau perusahaan partner baru pendukung acara.</p>
    </div>

    <div class="max-w-xl bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.partners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Partner</label>
                    <input type="text" name="name" placeholder="Contoh: PT. Telekomunikasi Indonesia, Bank Mandiri" required value="{{ old('name') }}"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm transition @error('name') border-red-500 @enderror">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Logo Partner</label>
                    <input type="file" name="logo_url" required accept="image/*"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm transition @error('logo_url') border-red-500 @enderror">
                    <p class="text-gray-400 text-xs mt-1">Format gambar: JPG, PNG, SVG, WEBP (Maksimal ukuran file: 2MB)</p>
                    @error('logo_url') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-end gap-2 pt-2">
                    <a href="{{ route('admin.partners.index') }}" class="px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold text-sm rounded-xl transition">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm rounded-xl transition shadow-sm">
                        Simpan Partner
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection