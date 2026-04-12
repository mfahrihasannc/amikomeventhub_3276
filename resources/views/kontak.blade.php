@extends('layouts.main')

@section('title', 'Kontak')

@section('content')
<div class="flex flex-col items-center mt-12 mb-20">
    <span class="bg-[#ccff00] text-black text-xs font-bold px-4 py-1.5 rounded-full mb-6 uppercase tracking-widest">
        Hubungi
    </span>
    
    <h1 class="text-4xl font-bold text-gray-900 mb-12 tracking-tight">Informasi Kontak</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-4xl">
        <div class="bg-gray-200 p-8 rounded-[2rem] border border-gray-100 flex flex-col justify-center">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Surel / Email</h3>
            <p class="text-xl font-medium text-gray-900">mfahrihasannc@students.amikom.ac.id</p>
        </div>
        
        <div class="bg-gray-200 p-8 rounded-[2rem] border border-gray-100 flex flex-col justify-center">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-3">Telepon / WhatsApp</h3>
            <p class="text-xl font-medium text-gray-900">+62 896 3687 3754</p>
        </div>
        
        <div class="bg-[#1a1a1a] p-8 md:p-12 rounded-[2rem] md:col-span-2">
            <h3 class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-4">Lokasi</h3>
            <p class="text-2xl md:text-3xl font-bold text-[#ccff00] mb-3 tracking-tight">Universitas Amikom Yogyakarta</p>
            <p class="text-gray-400 text-lg leading-relaxed max-w-2xl">
                Jl. Ring Road Utara, Ngringin, Condongcatur, Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281
            </p>
        </div>
    </div>
</div>
@endsection