@extends('layouts.guest')

@section('content')

    {{-- Cinematic Hero Section --}}
    <section class="relative min-h-[70vh] -mt-20 flex items-center overflow-hidden bg-gray-950">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=2070&auto=format&fit=crop"
                alt="Layanan Kami" class="w-full h-full object-cover opacity-30 transform scale-105" />
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-900/60 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-gray-950 via-gray-900/80 to-transparent"></div>
        </div>

        <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
            <div
                class="absolute top-[10%] right-[20%] w-[30%] h-[30%] bg-indigo-600/30 rounded-full blur-[100px] mix-blend-screen animate-pulse duration-[7000ms]">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full pt-32 pb-20">
            <div class="max-w-3xl">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-500/10 backdrop-blur-md border border-indigo-500/20 mb-8">
                    <i class="ri-car-line text-indigo-400"></i>
                    <span class="text-xs font-bold text-indigo-300 tracking-widest uppercase">Eksplorasi Layanan</span>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-tight text-white mb-6 leading-tight">
                    Pilihan <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 via-purple-400 to-indigo-400">Armada</span>
                    <br />Sesuai Gaya Anda.
                </h1>

                <p class="text-xl text-gray-400 leading-relaxed mb-10 max-w-2xl font-medium">
                    Dari city car yang lincah hingga minibus eksekutif untuk rombongan, kami menyediakan solusi transportasi
                    fleksibel untuk kebutuhan perorangan maupun korporat.
                </p>
            </div>
        </div>
    </section>

    {{-- Premium Fleet Showroom Section --}}
    <section class="py-24 bg-gray-950 relative border-t border-gray-900">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-[500px] bg-indigo-600/10 blur-[120px] rounded-[100%] pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">Katalog Armada <span
                        class="text-indigo-500">Premium</span></h2>
                <p class="text-lg text-gray-500 max-w-2xl mx-auto">Kami merawat setiap kendaraan seperti milik sendiri. AC
                    dingin, interior wangi, dan mesin prima siap menemani Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Fleet Card 1 -->
                <div
                    class="group bg-gray-900 rounded-[2rem] p-3 border border-gray-800 hover:border-indigo-500/50 transition-all duration-500 shadow-2xl hover:shadow-indigo-500/20 overflow-hidden relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-indigo-600/5 to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="relative bg-gray-950 rounded-[1.5rem] h-64 flex items-center justify-center p-6 mb-4 overflow-hidden shadow-inner cursor-pointer">
                        <div
                            class="absolute inset-0 bg-[radial-gradient(circle_at_top,_var(--tw-gradient-stops))] from-indigo-900/20 via-transparent to-transparent">
                        </div>
                        <img src="{{ asset('img/xenia.png') }}" alt="Daihatsu Xenia"
                            class="w-full h-full object-contain filter drop-shadow-[0_20px_20px_rgba(0,0,0,0.8)] group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-bold px-3 py-1 rounded-full backdrop-blur-md">Tersedia</span>
                        </div>
                    </div>

                    <div class="px-5 pb-5 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-2xl font-bold text-white tracking-tight">Daihatsu Xenia</h3>
                                <p class="text-sm text-gray-400">City & Family APV</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="bg-gray-800/50 rounded-xl p-3 border border-gray-700/50">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider font-bold mb-1">Tahun</p>
                                <p class="text-sm text-gray-300 font-semibold flex items-center"><i
                                        class="ri-calendar-2-line text-indigo-400 mr-2"></i>2015</p>
                            </div>
                            <div class="bg-gray-800/50 rounded-xl p-3 border border-gray-700/50">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider font-bold mb-1">Kapasitas</p>
                                <p class="text-sm text-gray-300 font-semibold flex items-center"><i
                                        class="ri-group-line text-indigo-400 mr-2"></i>7 Kursi</p>
                            </div>
                        </div>

                        <a href="{{ route('booking.form') }}"
                            class="block w-full text-center bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-3 rounded-xl transition-colors">
                            Booking Sekarang
                        </a>
                    </div>
                </div>

                <!-- Fleet Card 2 -->
                <div
                    class="group bg-gray-900 rounded-[2rem] p-3 border border-gray-800 hover:border-purple-500/50 transition-all duration-500 shadow-2xl hover:shadow-purple-500/20 overflow-hidden relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-600/5 to-pink-600/5 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="relative bg-gray-950 rounded-[1.5rem] h-64 flex items-center justify-center p-6 mb-4 overflow-hidden shadow-inner cursor-pointer">
                        <div
                            class="absolute inset-0 bg-[radial-gradient(circle_at_top,_var(--tw-gradient-stops))] from-purple-900/20 via-transparent to-transparent">
                        </div>
                        <img src="{{ asset('img/xenia.png') }}" alt="Daihatsu Xenia"
                            class="w-full h-full object-contain filter drop-shadow-[0_20px_20px_rgba(0,0,0,0.8)] group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-xs font-bold px-3 py-1 rounded-full backdrop-blur-md">Hot
                                Promo</span>
                        </div>
                    </div>

                    <div class="px-5 pb-5 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-2xl font-bold text-white tracking-tight">Daihatsu Xenia (Bali)</h3>
                                <p class="text-sm text-gray-400">Edisi Spesial Tour</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="bg-gray-800/50 rounded-xl p-3 border border-gray-700/50">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider font-bold mb-1">Tahun</p>
                                <p class="text-sm text-gray-300 font-semibold flex items-center"><i
                                        class="ri-calendar-2-line text-purple-400 mr-2"></i>2015</p>
                            </div>
                            <div class="bg-gray-800/50 rounded-xl p-3 border border-gray-700/50">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider font-bold mb-1">Kapasitas</p>
                                <p class="text-sm text-gray-300 font-semibold flex items-center"><i
                                        class="ri-group-line text-purple-400 mr-2"></i>7 Kursi</p>
                            </div>
                        </div>

                        <a href="{{ route('booking.form') }}"
                            class="block w-full text-center bg-purple-600 hover:bg-purple-500 text-white font-bold py-3 rounded-xl transition-colors">
                            Booking Sekarang
                        </a>
                    </div>
                </div>

                <!-- Fleet Card 3 -->
                <div
                    class="group bg-gray-900 rounded-[2rem] p-3 border border-gray-800 hover:border-emerald-500/50 transition-all duration-500 shadow-2xl hover:shadow-emerald-500/20 overflow-hidden relative lg:col-start-auto md:col-start-1 md:col-end-3 lg:col-end-auto max-w-md md:max-w-none mx-auto w-full">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-emerald-600/5 to-teal-600/5 opacity-0 group-hover:opacity-100 transition-opacity">
                    </div>
                    <div
                        class="relative bg-gray-950 rounded-[1.5rem] h-64 flex items-center justify-center p-6 mb-4 overflow-hidden shadow-inner cursor-pointer">
                        <div
                            class="absolute inset-0 bg-[radial-gradient(circle_at_top,_var(--tw-gradient-stops))] from-emerald-900/20 via-transparent to-transparent">
                        </div>
                        <img src="{{ asset('img/elf_short.png') }}" alt="Isuzu Elf"
                            class="w-full h-full object-contain filter drop-shadow-[0_20px_20px_rgba(0,0,0,0.8)] group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute top-4 left-4">
                            <span
                                class="bg-orange-500/20 text-orange-300 border border-orange-500/30 text-xs font-bold px-3 py-1 rounded-full backdrop-blur-md">Favorit
                                Rombongan</span>
                        </div>
                    </div>

                    <div class="px-5 pb-5 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h3 class="text-2xl font-bold text-white tracking-tight">Isuzu ELF Short</h3>
                                <p class="text-sm text-gray-400">Minibus Executive</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3 mb-6">
                            <div class="bg-gray-800/50 rounded-xl p-3 border border-gray-700/50">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider font-bold mb-1">Tahun</p>
                                <p class="text-sm text-gray-300 font-semibold flex items-center"><i
                                        class="ri-calendar-2-line text-emerald-400 mr-2"></i>1995</p>
                            </div>
                            <div class="bg-gray-800/50 rounded-xl p-3 border border-gray-700/50">
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider font-bold mb-1">Kapasitas</p>
                                <p class="text-sm text-gray-300 font-semibold flex items-center"><i
                                        class="ri-group-line text-emerald-400 mr-2"></i>16 Kursi</p>
                            </div>
                        </div>

                        <a href="{{ route('booking.form') }}"
                            class="block w-full text-center bg-gray-800 hover:bg-emerald-600 text-white font-bold py-3 rounded-xl transition-colors border border-gray-700 hover:border-emerald-500">
                            Booking Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sleek Minimalist Features Grid --}}
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4">Mendefinisikan Ulang
                    Perjalanan Anda</h2>
                <p class="text-lg text-gray-500 max-w-2xl mx-auto">Standar layanan premium dalam setiap putaran roda.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $features = [
                        ['icon' => 'ri-time-zone-line', 'color' => 'indigo', 'title' => 'Tepat Waktu', 'desc' => 'Driver kami hadir sebelum jadwal penjemputan Anda.'],
                        ['icon' => 'ri-shield-star-line', 'color' => 'purple', 'title' => 'Aman & Nyaman', 'desc' => 'Setiap armada melewati uji standar kelayakan ketat mingguan.'],
                        ['icon' => 'ri-customer-service-2-line', 'color' => 'pink', 'title' => 'CS Responsif', 'desc' => 'Tim kami standby 24/7 untuk memastikan perjalanan Anda lancar.'],
                        ['icon' => 'ri-wallet-3-line', 'color' => 'emerald', 'title' => 'Harga Terbaik', 'desc' => 'Tarif kompetitif, transparan dan tidak ada biaya tersembunyi.'],
                        ['icon' => 'ri-map-pin-user-line', 'color' => 'blue', 'title' => 'Door to Door', 'desc' => 'Penjemputan tepat di depan pintu rumah Anda tanpa harus transit.'],
                        ['icon' => 'ri-shake-hands-line', 'color' => 'orange', 'title' => 'Driver Ramah', 'desc' => 'Pelayanan sepenuh hati layaknya asisten perjalanan pribadi Anda.'],
                        ['icon' => 'ri-smartphone-line', 'color' => 'teal', 'title' => 'Booking Cepat', 'desc' => 'Antarmuka pemesanan online modern yang mudah diakses dari HP.'],
                        ['icon' => 'ri-route-line', 'color' => 'rose', 'title' => 'Rute Fleksibel', 'desc' => 'Sistem carter kami mengizinkan multikota dan multi-pemberhentian.']
                    ];
                @endphp

                @foreach($features as $f)
                    <div
                        class="group bg-white rounded-3xl p-6 border border-gray-100 hover:border-{{$f['color']}}-200 hover:shadow-xl hover:shadow-{{$f['color']}}-500/10 transition-all duration-300">
                        <div
                            class="w-14 h-14 rounded-2xl bg-{{$f['color']}}-50 flex items-center justify-center text-{{$f['color']}}-600 text-2xl mb-6 group-hover:scale-110 group-hover:bg-{{$f['color']}}-500 group-hover:text-white transition-all duration-300">
                            <i class="{{ $f['icon'] }}"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $f['title'] }}</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Edge-to-Edge CTA --}}
    <section class="relative bg-black py-24 overflow-hidden">
        <div class="absolute inset-0">
            <img src="{{ asset('img/foto_lokasi.jpg') }}" alt="Lokasi"
                class="w-full h-full object-cover opacity-30 invert mix-blend-luminosity">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl">
                <div class="inline-block px-4 py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/20 mb-6">
                    <span class="text-sm font-semibold text-white tracking-widest uppercase">Garasi Kami</span>
                </div>

                <h2 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-8">
                    Pintu Kami <span class="text-indigo-400">Selalu Terbuka</span> Untuk Anda.
                </h2>

                <p class="text-xl text-gray-400 mb-10 leading-relaxed">
                    Ingin konsultasi langsung, cek unit sebelum carter, atau nego harga? Silahkan mampir ke garasi atau
                    hubungi nomor di bawah.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('booking.form') }}"
                        class="inline-flex items-center justify-center px-8 py-4 font-bold text-black bg-white rounded-2xl hover:bg-gray-200 transition-colors text-lg">
                        Booking Jadwal
                    </a>
                    <a href="https://wa.me/6282142951682"
                        class="inline-flex items-center justify-center px-8 py-4 font-bold text-white bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl hover:bg-white/20 transition-all duration-300 text-lg">
                        <i class="ri-whatsapp-line mr-2 text-2xl text-green-400"></i> +62 821 4295 1682
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection