@extends('layouts.guest')
@section('content')

    <!-- Hero Section with Premium Edge-to-Edge Design -->
    <section class="relative min-h-[90vh] -mt-20 flex items-center overflow-hidden bg-gray-950">
        <!-- Background Image with Parallax effect -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=2070&auto=format&fit=crop"
                alt="Transport Background"
                class="w-full h-full object-cover opacity-40 scale-105 transform translate-y-0" />
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/80 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-gray-950 via-gray-950/70 to-transparent"></div>
        </div>

        <!-- Animated Glowing Meshes -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div
                class="absolute -top-[20%] -right-[10%] w-[50%] h-[50%] bg-indigo-500/30 rounded-full blur-[120px] mix-blend-screen animate-pulse duration-[8000ms]">
            </div>
            <div class="absolute bottom-[10%] -left-[10%] w-[40%] h-[40%] bg-purple-600/20 rounded-full blur-[100px] mix-blend-screen animate-pulse duration-[10000ms]"
                style="animation-delay: 2s;"></div>
        </div>

        <div
            class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32 pb-20 flex flex-col lg:flex-row items-center gap-16">
            <!-- Hero Content -->
            <div class="w-full lg:w-3/5 text-left">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/10 mb-8 shadow-[0_0_20px_rgba(255,255,255,0.05)]">
                    <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-ping absolute"></span>
                    <span class="h-2 w-2 rounded-full bg-emerald-400 relative"></span>
                    <span class="text-xs font-semibold text-white tracking-widest uppercase">Armada Tersedia Hari Ini</span>
                </div>

                <h1 class="text-5xl md:text-7xl lg:text-8xl font-extrabold text-white tracking-tight mb-6 leading-[1.1]">
                    Perjalanan <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-400">Dimulai</span>
                    Di Sini.
                </h1>

                <p class="text-lg md:text-xl text-gray-400 font-medium mb-10 max-w-2xl leading-relaxed">
                    Nikmati kenyamanan transportasi premium dengan kemudahan di ujung jari Anda. Zidan Transport membawa
                    Anda lebih dekat ke tujuan.
                </p>

                <div class="flex flex-col sm:flex-row gap-5">
                    <a href="{{ route('booking.form') }}"
                        class="group relative inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 bg-white/10 border border-white/20 rounded-2xl hover:bg-white/20 hover:scale-[1.02] hover:shadow-[0_0_30px_rgba(99,102,241,0.3)] overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-r from-indigo-500 to-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                        <span class="relative flex items-center gap-2">
                            Pesan Sekarang <i
                                class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i>
                        </span>
                    </a>

                    <a href="/layanan"
                        class="group inline-flex items-center justify-center px-8 py-4 font-bold text-white transition-all duration-300 bg-transparent rounded-2xl hover:text-indigo-400">
                        <span class="relative flex items-center gap-2">
                            <div
                                class="w-10 h-10 rounded-full border border-gray-600 flex items-center justify-center group-hover:border-indigo-400 transition-colors">
                                <i class="ri-play-fill text-lg"></i>
                            </div>
                            Lihat Armada
                        </span>
                    </a>
                </div>
            </div>

            <!-- Floating Quick Command Center (App-like feel) -->
            <div class="w-full lg:w-2/5 relative hidden md:block">
                <div
                    class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-[2rem] blur opacity-20 animate-pulse">
                </div>
                <div class="relative bg-gray-900/80 backdrop-blur-xl border border-white/10 rounded-[2rem] p-8 shadow-2xl">
                    <h3 class="text-white text-xl font-bold mb-6 flex items-center gap-2">
                        <i class="ri-search-line text-indigo-400"></i> Cari Perjalanan
                    </h3>

                    <form action="{{ route('booking.form') }}" method="GET" class="space-y-5">
                        <div class="group">
                            <label class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 block">Lokasi
                                Penjemputan</label>
                            <div
                                class="flex items-center bg-gray-800/50 rounded-xl border border-gray-700 p-3 group-focus-within:border-indigo-500 transition-colors">
                                <i class="ri-map-pin-2-fill text-gray-500 ml-2 mr-3"></i>
                                <input type="text" placeholder="Kota atau Alamat"
                                    class="bg-transparent border-none text-white w-full focus:ring-0 placeholder-gray-600">
                            </div>
                        </div>

                        <div class="group">
                            <label
                                class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 block">Tujuan</label>
                            <div
                                class="flex items-center bg-gray-800/50 rounded-xl border border-gray-700 p-3 group-focus-within:border-indigo-500 transition-colors">
                                <i class="ri-map-pin-time-fill text-gray-500 ml-2 mr-3"></i>
                                <input type="text" placeholder="Kemana Anda pergi?"
                                    class="bg-transparent border-none text-white w-full focus:ring-0 placeholder-gray-600">
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="group">
                                <label
                                    class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 block">Tanggal</label>
                                <div
                                    class="flex items-center bg-gray-800/50 rounded-xl border border-gray-700 p-3 group-focus-within:border-indigo-500 transition-colors">
                                    <i class="ri-calendar-2-line text-gray-500 ml-2 mr-2"></i>
                                    <input type="text" placeholder="Hari ini"
                                        class="bg-transparent border-none text-white w-full focus:ring-0 placeholder-gray-600 text-sm">
                                </div>
                            </div>
                            <div class="group">
                                <label
                                    class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2 block">Waktu</label>
                                <div
                                    class="flex items-center bg-gray-800/50 rounded-xl border border-gray-700 p-3 group-focus-within:border-indigo-500 transition-colors">
                                    <i class="ri-time-line text-gray-500 ml-2 mr-2"></i>
                                    <input type="text" placeholder="10:00"
                                        class="bg-transparent border-none text-white w-full focus:ring-0 placeholder-gray-600 text-sm">
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full mt-4 bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-4 rounded-xl shadow-lg shadow-indigo-500/30 transition-all duration-300 hover:scale-[1.02]">
                            Cari Kendaraan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Metrics Banner -->
    <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 mb-24">
        <div
            class="bg-white rounded-2xl shadow-xl shadow-gray-200/50 border border-gray-100 p-8 flex flex-col md:flex-row justify-around items-center gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100">
            <div class="text-center w-full md:w-1/3 pt-4 md:pt-0">
                <h4 class="text-4xl font-extrabold text-gray-900 mb-1">5k+</h4>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Perjalanan Sukses</p>
            </div>
            <div class="text-center w-full md:w-1/3 pt-4 md:pt-0">
                <h4 class="text-4xl font-extrabold text-gray-900 mb-1">98%</h4>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Kepuasan Pelanggan</p>
            </div>
            <div class="text-center w-full md:w-1/3 pt-4 md:pt-0">
                <h4 class="text-4xl font-extrabold text-gray-900 mb-1">24/7</h4>
                <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Dukungan Tim</p>
            </div>
        </div>
    </div>

    <!-- Layanan Populer (Pill Nav Design) -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4">Layanan <span
                            class="text-indigo-600">Terbaik</span> Kami</h2>
                    <p class="text-lg text-gray-500 max-w-2xl">Pilih jenis perjalanan sesuai dengan gaya dan kebutuhan
                        liburan Anda.</p>
                </div>
                <a href="/layanan"
                    class="hidden md:flex items-center text-indigo-600 font-bold hover:text-indigo-800 transition-colors">
                    Lihat Semua <i class="ri-arrow-right-line ml-2"></i>
                </a>
            </div>

            <div class="flex gap-4 overflow-x-auto pb-6 scrollbar-hide snap-x">
                <div class="snap-start shrink-0">
                    <a href="#"
                        class="group block relative w-72 h-40 rounded-3xl overflow-hidden shadow-lg border border-gray-200">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?q=80&w=2069&auto=format&fit=crop"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/40 to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-6 relative z-10">
                            <div
                                class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center mb-3 text-white border border-white/30">
                                <i class="ri-building-4-line text-lg"></i>
                            </div>
                            <h3 class="text-white font-bold text-xl">Carter Dalam Kota</h3>
                        </div>
                    </a>
                </div>

                <div class="snap-start shrink-0">
                    <a href="#"
                        class="group block relative w-72 h-40 rounded-3xl overflow-hidden shadow-lg border border-gray-200">
                        <img src="https://images.unsplash.com/photo-1506012787146-f92b2d7d6d96?q=80&w=2069&auto=format&fit=crop"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/90 via-indigo-900/40 to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-6 relative z-10">
                            <div
                                class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center mb-3 text-white border border-white/30">
                                <i class="ri-plane-line text-lg"></i>
                            </div>
                            <h3 class="text-white font-bold text-xl">Antar Jemput Bandara</h3>
                        </div>
                    </a>
                </div>

                <div class="snap-start shrink-0">
                    <a href="#"
                        class="group block relative w-72 h-40 rounded-3xl overflow-hidden shadow-lg border border-gray-200">
                        <img src="https://images.unsplash.com/photo-1518173946687-a4c8892bbd9f?q=80&w=1974&auto=format&fit=crop"
                            class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-emerald-900/90 via-emerald-900/40 to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-6 relative z-10">
                            <div
                                class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center mb-3 text-white border border-white/30">
                                <i class="ri-leaf-line text-lg"></i>
                            </div>
                            <h3 class="text-white font-bold text-xl">Wisata Religi/Alam</h3>
                        </div>
                    </a>
                </div>

                <div class="snap-start shrink-0">
                    <a href="#"
                        class="group block relative w-72 h-40 rounded-3xl overflow-hidden border border-dashed border-gray-300 hover:border-indigo-500 hover:bg-indigo-50 transition-colors flex items-center justify-center">
                        <div class="text-center">
                            <div
                                class="w-12 h-12 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-600 mx-auto mb-3">
                                <i class="ri-function-line text-xl"></i>
                            </div>
                            <h3 class="text-gray-700 font-bold">Lihat Semua Kategori</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bento Grid Layout for "Cara Pemesanan" -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span
                    class="text-indigo-600 font-bold uppercase tracking-widest text-sm bg-indigo-50 px-4 py-2 rounded-full inline-block mb-4">Sistem
                    Kami</span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight">Perjalanan Tanpa Kendala</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Box 1: Large Span -->
                <div
                    class="md:col-span-2 group bg-gray-50 rounded-[2rem] p-10 border border-gray-100 hover:shadow-2xl transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-bl from-indigo-100 to-transparent rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 rounded-2xl bg-white shadow-md flex items-center justify-center text-indigo-600 text-3xl mb-8 border border-gray-100 group-hover:scale-110 transition-transform">
                            <i class="ri-map-pin-user-line"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-4">1. Tentukan Titik</h3>
                        <p class="text-lg text-gray-600 leading-relaxed max-w-md">Tidak perlu repot datang ke garasi. Cukup
                            tentukan lokasi Anda, dan sistem kami akan mengatur titik penjemputan terbaik.</p>
                    </div>
                </div>

                <!-- Box 2 -->
                <div
                    class="group bg-indigo-600 rounded-[2rem] p-10 hover:shadow-2xl transition-all duration-300 relative overflow-hidden text-white">
                    <div
                        class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-white text-3xl mb-8 border border-white/20 group-hover:scale-110 transition-transform">
                            <i class="ri-steering-2-line"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">2. Pilih Armada</h3>
                        <p class="text-indigo-100 leading-relaxed">Dari Avanza hingga Isuzu Elf, pilih yang paling pas untuk
                            rombongan Anda.</p>
                    </div>
                </div>

                <!-- Box 3 -->
                <div
                    class="group bg-gray-900 rounded-[2rem] p-10 hover:shadow-2xl transition-all duration-300 relative overflow-hidden text-white">
                    <div
                        class="absolute -right-10 -bottom-10 w-40 h-40 bg-purple-500 rounded-full blur-3xl opacity-30 group-hover:opacity-60 transition-opacity">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-16 h-16 rounded-2xl bg-white/10 backdrop-blur-md flex items-center justify-center text-purple-400 text-3xl mb-8 border border-white/20 group-hover:scale-110 transition-transform">
                            <i class="ri-calendar-check-line"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">3. Konfirmasi Waktu</h3>
                        <p class="text-gray-400 leading-relaxed">Pilih jam keberangkatan. Driver kami tiba tepat waktu.</p>
                    </div>
                </div>

                <!-- Box 4: Feature List -->
                <div
                    class="md:col-span-2 bg-white rounded-[2rem] p-10 border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-6">Kenapa Zidan Transport?</h3>
                        <ul class="space-y-4">
                            <li class="flex items-center text-gray-700 font-medium">
                                <i class="ri-checkbox-circle-fill text-emerald-500 text-xl mr-3"></i> Armada selalu bersih &
                                tersanitasi
                            </li>
                            <li class="flex items-center text-gray-700 font-medium">
                                <i class="ri-checkbox-circle-fill text-emerald-500 text-xl mr-3"></i> Driver berpengalaman &
                                berlisensi
                            </li>
                            <li class="flex items-center text-gray-700 font-medium">
                                <i class="ri-checkbox-circle-fill text-emerald-500 text-xl mr-3"></i> Harga transparan tanpa
                                biaya tersembunyi
                            </li>
                        </ul>
                    </div>
                    <div
                        class="hidden md:block w-48 h-48 bg-gray-50 rounded-full border-8 border-gray-100 flex items-center justify-center p-4">
                        <img src="{{ asset('/img/logo.png') }}" class="w-full opacity-30 grayscale sepia"
                            alt="Zidan Shield">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sleek Minimalist CTA Edge-to-Edge -->
    <section class="relative bg-indigo-600 py-24 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-indigo-700 to-purple-800"></div>
            <div
                class="absolute top-0 right-0 w-[800px] h-[800px] bg-white opacity-5 rounded-full blur-3xl translate-x-1/3 -translate-y-1/3">
            </div>
            <div
                class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-indigo-400 opacity-20 rounded-full blur-3xl -translate-x-1/3 translate-y-1/3">
            </div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-8 tracking-tight">Kemanapun Tujuannya,<br>Kami
                Pandu Jalannya.</h2>
            <p class="text-xl text-indigo-100 mb-12 max-w-2xl mx-auto leading-relaxed">Bergabung dengan ribuan pelanggan
                kami yang telah merasakan kenyamanan sejati dalam setiap perjalanan.</p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('booking.form') }}"
                    class="inline-flex items-center justify-center px-10 py-5 font-bold text-indigo-600 bg-white rounded-2xl hover:bg-gray-50 hover:scale-[1.02] shadow-[0_0_40px_rgba(255,255,255,0.3)] transition-all duration-300 text-lg">
                    Mulai Pemesanan <i class="ri-arrow-right-line ml-2"></i>
                </a>
                <a href="https://wa.me/6282142951682"
                    class="inline-flex items-center justify-center px-10 py-5 font-bold text-white bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl hover:bg-white/20 transition-all duration-300 text-lg">
                    <i class="ri-whatsapp-line mr-2 text-2xl"></i> +62 821 4295 1682
                </a>
            </div>
        </div>
    </section>

@endsection