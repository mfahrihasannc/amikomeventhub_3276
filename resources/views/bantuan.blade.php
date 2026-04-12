@extends('layouts.main')

@section('title', 'Bantuan')

@section('content')
<div class="max-w-3xl mx-auto mt-12 mb-20">
    <div class="text-center mb-16">
        <span class="bg-[#ccff00] text-black text-xs font-bold px-4 py-1.5 rounded-full mb-6 inline-block uppercase tracking-widest">
            FAQ
        </span>
        <h1 class="text-4xl font-bold text-gray-900 tracking-tight mb-4">Pusat Bantuan</h1>
        <p class="text-gray-500 text-lg">Pertanyaan yang sering diajukan mengenai platform kami.</p>
    </div>

    <div class="space-y-4">
        <div class="bg-gray-200 p-6 md:p-8 rounded-3xl border border-gray-100">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Bagaimana cara mendaftar event?</h3>
            <p class="text-gray-500 leading-relaxed">Akses halaman Katalog, pilih event yang relevan dengan minat Anda, kemudian klik tautan pendaftaran yang tersedia di dalam halaman detail kegiatan.</p>
        </div>
        
        <div class="bg-gray-200 p-6 md:p-8 rounded-3xl border border-gray-100">
            <h3 class="text-lg font-bold text-gray-900 mb-2">Apakah sistem ini diperuntukkan untuk umum?</h3>
            <p class="text-gray-500 leading-relaxed">Saat ini platform diutamakan untuk mahasiswa internal Universitas Amikom Yogyakarta. Pastikan Anda memiliki NIM yang valid.</p>
        </div>
    </div>
</div>
@endsection