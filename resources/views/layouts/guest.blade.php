<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Zidan Transport') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 antialiased selection:bg-indigo-500 selection:text-white pb-10 md:pb-0">
    @include('components.navbar')

    <main class="min-h-screen pt-20">
        @yield('content')
    </main>

    @include('components.footer')

    <!-- Bottom Nav for Mobile -->
    <div
        class="md:hidden fixed bottom-0 left-0 z-50 w-full h-16 bg-white/80 backdrop-blur-lg border-t border-gray-200 shadow-lg">
        <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
            <a href="/beranda"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group {{ request()->is('beranda') ? 'text-indigo-600' : 'text-gray-500' }}">
                <i class="ri-home-smile-line text-xl mb-1 group-hover:text-indigo-600"></i>
                <span class="text-[10px]">Beranda</span>
            </a>
            <a href="/layanan"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group {{ request()->is('layanan') ? 'text-indigo-600' : 'text-gray-500' }}">
                <i class="ri-car-line text-xl mb-1 group-hover:text-indigo-600"></i>
                <span class="text-[10px]">Layanan</span>
            </a>
            <a href="/pesanan"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group {{ request()->is('pesanan') ? 'text-indigo-600' : 'text-gray-500' }}">
                <i class="ri-file-list-3-line text-xl mb-1 group-hover:text-indigo-600"></i>
                <span class="text-[10px]">Pesanan</span>
            </a>
            <a href="{{ route('profile') }}"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group {{ request()->is('profile') ? 'text-indigo-600' : 'text-gray-500' }}">
                <i class="ri-user-smile-line text-xl mb-1 group-hover:text-indigo-600"></i>
                <span class="text-[10px]">Profil</span>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    @yield('scripts')
</body>

</html>