@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex bg-white font-sans">

        <!-- Left Side: Brand Imagery (Hidden on small screens) -->
        <div class="hidden lg:flex lg:w-1/2 relative bg-gray-950 overflow-hidden items-end pb-24 pl-24">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?q=80&w=2070&auto=format&fit=crop"
                    alt="Transport Background"
                    class="w-full h-full object-cover opacity-40 mix-blend-luminosity scale-105 transform">
                <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-indigo-950/80 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-gray-950 via-transparent to-transparent"></div>
            </div>

            <!-- Animated Elements -->
            <div
                class="absolute top-[20%] left-[10%] w-[40%] h-[40%] bg-indigo-600/20 rounded-full blur-[100px] mix-blend-screen animate-pulse duration-[8000ms] z-0">
            </div>
            <div class="absolute bottom-[20%] right-[10%] w-[30%] h-[30%] bg-purple-600/20 rounded-full blur-[100px] mix-blend-screen animate-pulse duration-[10000ms] z-0"
                style="animation-delay: 2s;"></div>

            <!-- Content -->
            <div class="relative z-10 max-w-xl">
                <div class="mb-8 hidden xl:block">
                    <img src="{{ asset('img/logo.png') }}" alt="Zidan Transport" class="h-16 brightness-0 invert">
                </div>

                <h2 class="text-5xl xl:text-6xl font-extrabold text-white mb-6 leading-[1.1] tracking-tight">
                    Standar Baru <br />
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">Perjalanan
                        Anda.</span>
                </h2>

                <p class="text-xl text-indigo-100/80 font-medium leading-relaxed max-w-lg mb-12">
                    Bergabung dengan ribuan pelanggan yang mempercayakan mobilitas dan kenyamanan mereka bersama Zidan
                    Transport.
                </p>

                <!-- Trust Badges -->
                <div class="flex gap-6">
                    <div
                        class="flex items-center gap-3 bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                        <div
                            class="w-10 h-10 rounded-full bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
                            <i class="ri-shield-check-fill text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">100% Aman</p>
                            <p class="text-xs text-emerald-200/80">Perjalanan Terjamin</p>
                        </div>
                    </div>

                    <div
                        class="flex items-center gap-3 bg-white/10 backdrop-blur-md rounded-2xl p-4 border border-white/10">
                        <div
                            class="w-10 h-10 rounded-full bg-blue-500/20 border border-blue-500/30 flex items-center justify-center text-blue-400">
                            <i class="ri-customer-service-2-fill text-xl"></i>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-white">24/7 Support</p>
                            <p class="text-xs text-blue-200/80">Bantuan Kapanpun</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 sm:p-12 lg:p-24 bg-white relative">
            <div
                class="absolute top-0 right-0 w-full h-[500px] bg-gradient-to-b from-indigo-50/50 to-transparent pointer-events-none">
            </div>

            <div class="w-full max-w-md relative z-10">
                <!-- Mobile Logo -->
                <div class="flex justify-center mb-10 lg:hidden">
                    <img src="{{ asset('img/logo.png') }}" alt="Zidan Transport" class="h-16">
                </div>

                <div class="text-center lg:text-left mb-10">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 rounded-xl bg-indigo-100 text-indigo-600 mb-6 lg:hidden">
                        <i class="ri-login-circle-line text-2xl"></i>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight mb-3">Selamat Datang Kembali
                    </h1>
                    <p class="text-gray-500 font-medium">Silakan masuk ke akun Anda untuk melanjutkan proses pemesanan.</p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email Input -->
                    <div class="space-y-2 group">
                        <label class="text-sm font-bold text-gray-700">Alamat Email</label>
                        <div class="relative flex items-center">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-indigo-600 transition-colors">
                                <i class="ri-mail-line text-lg"></i>
                            </div>
                            <input type="email" name="email" value="{{ old('email') }}" required autofocus
                                class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 font-medium placeholder-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200"
                                placeholder="nama@email.com">
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div class="space-y-2 group">
                        <div class="flex items-center justify-between">
                            <label class="text-sm font-bold text-gray-700">Password</label>
                            <a href="{{ route('password.request') }}"
                                class="text-sm font-bold text-indigo-600 hover:text-indigo-500 transition-colors">Lupa
                                Password?</a>
                        </div>
                        <div class="relative flex items-center border-gray-200">
                            <div
                                class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-400 group-focus-within:text-indigo-600 transition-colors">
                                <i class="ri-lock-2-line text-lg"></i>
                            </div>
                            <input type="password" name="password" required
                                class="w-full pl-11 pr-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 font-medium placeholder-gray-400 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all duration-200"
                                placeholder="••••••••">
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember"
                            class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:ring-2 bg-gray-50 transition-colors cursor-pointer">
                        <label for="remember" class="ml-2 block text-sm font-medium text-gray-700 cursor-pointer">
                            Ingat Saya
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full flex justify-center py-4 px-4 border border-transparent rounded-xl shadow-lg shadow-indigo-500/30 text-sm font-bold text-white bg-indigo-600 hover:bg-indigo-700 hover:-translate-y-0.5 transition-all duration-200">
                        Masuk ke Akun
                    </button>
                </form>

                <div class="mt-8 relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-200"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-4 bg-white text-gray-400 font-medium">Atau lanjutkan dengan</span>
                    </div>
                </div>

                <!-- Google Login -->
                <div class="mt-8">
                    <a href="#"
                        class="w-full flex items-center justify-center py-3.5 px-4 rounded-xl border border-gray-200 bg-white hover:bg-gray-50 hover:border-gray-300 transition-all text-sm font-bold text-gray-700 shadow-sm">
                        <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" class="w-5 h-5 mr-3">
                        Google
                    </a>
                </div>

                <!-- Register Link -->
                <p class="mt-10 text-center text-sm text-gray-500 font-medium">
                    Belum punya akun Zidan Transport?
                    <a href="{{ route('register') }}"
                        class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors">Daftar Sekarang</a>
                </p>
            </div>
        </div>
    </div>
@endsection