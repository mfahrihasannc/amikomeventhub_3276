@extends('layouts.admin')

@section('content')
<div class="p-6 space-y-6">
    
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
        <div>
            <h1 class="text-3xl font-bold text-indigo-950">Kelola Partner</h1>
            <p class="text-gray-500 text-sm mt-1">Atur instansi atau perusahaan partner pendukung aplikasi Anda.</p>
        </div>
        
        <a href="{{ route('admin.partners.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-5 py-3 rounded-xl transition duration-200 shadow-md">
            + Tambah Partner Baru
        </a>
    </div>

    <div class="bg-white p-4 rounded-2xl shadow-sm border border-gray-100">
        <form action="{{ route('admin.partners.index') }}" method="GET" class="flex flex-col sm:flex-row gap-3">
            <div class="relative flex-1">
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama partner di sini..." 
                       class="w-full pl-4 pr-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm transition">
            </div>
            <div class="flex gap-2">
                <button type="submit" class="bg-indigo-800 hover:bg-indigo-900 text-white px-6 py-3 rounded-xl text-sm font-bold transition">
                    Cari Data
                </button>
                @if($search)
                    <a href="{{ route('admin.partners.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-3 rounded-xl text-sm font-bold transition flex items-center justify-center">
                        Clear
                    </a>
                @endif
            </div>
        </form>
    </div>

    @if(session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-xl bg-green-50 border border-green-200" role="alert">
            <span class="font-bold">Berhasil!</span> {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full border-separate border-spacing-y-3">
            <thead>
                <tr class="text-gray-400 text-left text-xs uppercase tracking-wider font-bold">
                    <th class="px-6 py-2 w-20">No</th>
                    <th class="px-6 py-2 w-32">Logo</th>
                    <th class="px-6 py-2">Nama Partner</th>
                    <th class="px-6 py-2 text-center w-36">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($partners as $key => $partner)
                    <tr class="bg-white shadow-sm hover:shadow transition duration-150 rounded-2xl border border-gray-100">
                        <td class="px-6 py-4 text-sm font-bold text-gray-400 bg-white rounded-l-2xl">
                            {{ $partners->firstItem() + $key }}
                        </td>
                        <td class="px-6 py-4 bg-white">
                            @if($partner->logo_url)
                                <img src="{{ Storage::url($partner->logo_url) }}" alt="{{ $partner->name }}" class="h-10 max-w-[100px] object-contain rounded border p-0.5">
                            @else
                                <span class="text-xs text-gray-400">Tidak ada logo</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-bold text-gray-800 bg-white">
                            {{ $partner->name }}
                        </td>
                        <td class="px-6 py-4 text-sm bg-white rounded-r-2xl text-center">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('admin.partners.edit', $partner->id) }}" class="p-2 text-indigo-600 bg-indigo-50 hover:bg-indigo-100 rounded-lg transition" title="Edit Partner">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" /></svg>
                                </a>

                                <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus partner ini?')" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="p-2 text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition" title="Hapus Partner">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-8 bg-white rounded-2xl text-gray-400 text-sm shadow-sm border border-gray-100">
                            Tidak ada data partner yang ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $partners->appends(['search' => $search])->links() }}
    </div>
</div>
@endsection