@extends('layouts.main')

@section('title', 'Katalog Event')

@section('content')
<div class="text-center mb-16 mt-8">
    <span class="bg-[#ccff00] text-black text-xs font-bold px-4 py-1.5 rounded-full mb-6 inline-block uppercase tracking-widest">
        Katalog
    </span>
    <h1 class="text-4xl font-bold text-gray-900 mb-4 tracking-tight">Daftar Kegiatan</h1>
    <p class="text-gray-500 text-lg">Jelajahi seminar dan workshop terbaru yang tersedia.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
    <div class="bg-[#1a1a1a] p-4 rounded-[2rem] flex flex-col gap-4">
        <div class="relative w-full aspect-[4/3] rounded-2xl bg-gray-800 overflow-hidden">
            <img src="{{ asset('img/seminar1.jpg') }}" class="w-full h-full object-cover">
            <span class="absolute top-4 left-4 bg-[#ccff00] text-black text-xs font-bold px-3 py-1 rounded-full z-10">Seminar</span>
        </div>
        <div class="px-2 pb-2">
            <h2 class="text-xl font-bold text-white mb-2 leading-snug">Mastering CSS Grid Layouts: A Comprehensive Guide</h2>
            <p class="text-gray-400 text-sm leading-relaxed">Pelajari dasar-dasar hingga teknik lanjutan dalam membangun layout website yang responsif.</p>
        </div>
    </div>

    <div class="bg-gray-200 hover:bg-gray-100 transition-colors duration-300 p-4 rounded-[2rem] flex flex-col gap-4 border border-gray-100">
        <div class="relative w-full aspect-[4/3] rounded-2xl bg-gray-200 overflow-hidden">
            <img src="{{ asset('img/seminar2.jpg') }}" class="w-full h-full object-cover">
            <span class="absolute top-4 left-4 bg-[#ccff00] text-black text-xs font-bold px-3 py-1 rounded-full z-10">Workshop</span>
        </div>
        <div class="px-2 pb-2">
            <h2 class="text-xl font-bold text-gray-900 mb-2 leading-snug">The Art of Website Typography: Best Practices</h2>
            <p class="text-gray-500 text-sm leading-relaxed">Temukan kekuatan tipografi dalam desain web untuk pengalaman pengguna yang menawan.</p>
        </div>
    </div>

    <div class="bg-gray-200 hover:bg-gray-100 transition-colors duration-300 p-4 rounded-[2rem] flex flex-col gap-4 border border-gray-100">
        <div class="relative w-full aspect-[4/3] rounded-2xl bg-gray-200 overflow-hidden">
            <img src="{{ asset('img/seminar3.jpg') }}" class="w-full h-full object-cover">
            <span class="absolute top-4 left-4 bg-[#ccff00] text-black text-xs font-bold px-3 py-1 rounded-full z-10">Webinar</span>
        </div>
        <div class="px-2 pb-2">
            <h2 class="text-xl font-bold text-gray-900 mb-2 leading-snug">Optimizing Website Performance for Speed</h2>
            <p class="text-gray-500 text-sm leading-relaxed">Pahami rahasia mengoptimalkan performa website Anda untuk kecepatan muat yang luar biasa.</p>
        </div>
    </div>

</div>
@endsection