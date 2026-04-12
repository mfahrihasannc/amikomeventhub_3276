@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<div class="flex flex-col items-center text-center mt-16 mb-24">
    <span class="bg-[#ccff00] text-black text-xs font-bold px-4 py-1.5 rounded-full mb-8 uppercase tracking-widest">
        Platform Event
    </span>
    
    <h1 class="text-5xl md:text-7xl font-bold text-gray-900 mb-6 tracking-tight max-w-4xl leading-tight">
        Temukan Kegiatan Kampus Anda.
    </h1>
    
    <p class="text-lg md:text-xl text-gray-500 max-w-2xl leading-relaxed">
        Platform terintegrasi untuk mahasiswa Amikom. Ikuti seminar, workshop, dan kegiatan terbaru untuk meningkatkan keterampilan dan relasi Anda.
    </p>
</div>
@endsection