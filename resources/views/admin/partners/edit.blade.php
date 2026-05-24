@extends('layouts.admin')

@section('content')
<div class="p-6 space-y-6">
    <div>
        <h1 class="text-3xl font-bold text-indigo-950">Ubah Partner</h1>
        <p class="text-gray-500 text-sm mt-1">Perbarui informasi partner atau ganti gambar logo instansi pendukung.</p>
    </div>

    <div class="max-w-xl bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Partner</label>
                    <input type="text" name="name" value="{{ old('name', $partner->name) }}" required
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm transition @error('name') border-red-500 @enderror">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Logo Saat Ini</label>
                    @if($partner->logo_url)
                        <img src="{{ Storage::url($partner->logo_url) }}" alt="Logo" class="h-20 mb-3 border rounded p-1 object-contain">
                    @endif
                    
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Ganti Logo Baru (Kosongkan jika tidak ingin diubah)</label>
                    <input type="file" name="logo_url" accept="image/*"
                           class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm transition @error('logo_url') border-red-500 @enderror">
                    @error('logo_url') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-end gap-2 pt-2">
                    <a href="{{ route('admin.partners.index') }}" class="px-4 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold text-sm rounded-xl transition">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-sm rounded-xl transition shadow-sm">
                        Simpan Perubahan
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection