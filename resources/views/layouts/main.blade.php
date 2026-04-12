<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-white text-gray-900 antialiased selection:bg-[#ccff00] selection:text-black">

    <nav class="max-w-7xl mx-auto px-4 py-8 flex justify-between items-center">
        <a href="/" class="font-bold text-xl tracking-tighter flex items-center gap-2">
            AmikomEventHub<span class="text-[#ccff00] text-3xl leading-none">.</span>
        </a>

        <div class="hidden md:flex gap-1 bg-gray-50 rounded-full px-2 py-2 border border-gray-100">
            <a href="/"
                class="px-5 py-2 rounded-full text-sm font-medium transition-colors {{ request()->is('/') ? 'bg-gray-900 text-white shadow-md' : 'text-gray-700 hover:bg-gray-200' }}">
                Home
            </a>
            <a href="/profil"
                class="px-5 py-2 rounded-full text-sm font-medium transition-colors {{ request()->is('profil') ? 'bg-gray-900 text-white shadow-md' : 'text-gray-700 hover:bg-gray-200' }}">
                Profil
            </a>
            <a href="/katalog"
                class="px-5 py-2 rounded-full text-sm font-medium transition-colors {{ request()->is('katalog') ? 'bg-gray-900 text-white shadow-md' : 'text-gray-700 hover:bg-gray-200' }}">
                Katalog
            </a>
            <a href="/bantuan"
                class="px-5 py-2 rounded-full text-sm font-medium transition-colors {{ request()->is('bantuan') ? 'bg-gray-900 text-white shadow-md' : 'text-gray-700 hover:bg-gray-200' }}">
                Bantuan
            </a>
            <a href="/kontak"
                class="px-5 py-2 rounded-full text-sm font-medium transition-colors {{ request()->is('kontak') ? 'bg-gray-900 text-white shadow-md' : 'text-gray-700 hover:bg-gray-200' }}">
                Kontak
            </a>
        </div>

        <a href="/katalog"
            class="bg-[#ccff00] text-black font-semibold text-sm px-6 py-3 rounded-full hover:bg-[#b3e600] transition-colors">
            Jelajahi
        </a>
    </nav>

    <main class="max-w-7xl mx-auto px-4 py-8">
        @yield('content')
    </main>

</body>

</html>