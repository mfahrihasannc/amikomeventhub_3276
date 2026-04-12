@extends('layouts.main')

@section('title', 'Profil')

@section('content')
<div class="flex flex-col items-center mt-12 mb-20">
    <span class="bg-[#ccff00] text-black text-xs font-bold px-4 py-1.5 rounded-full mb-8 uppercase tracking-widest">
        Praktikan
    </span>
    
    <h1 class="text-4xl font-bold text-gray-900 mb-12 tracking-tight">Profil Mahasiswa</h1>
    
    <div class="bg-[#1a1a1a] text-white p-10 md:p-14 rounded-[2rem] w-full max-w-2xl shadow-xl">
        <p class="text-gray-400 text-xs font-semibold mb-3 uppercase tracking-widest">Identitas Diri</p>
        
        <h2 class="text-4xl font-bold mb-2 tracking-tight">M Fahri Hasan Nurcahyadi</h2>
        <p class="text-[#ccff00] text-xl font-medium mb-10">24.12.3276</p>
        
    </div>
</div>
@endsection