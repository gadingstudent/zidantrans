@extends('layouts.guest')
@section('content')
    <section class="min-h-screen bg-gray-50 pt-28 pb-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-8">
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight">Akun Anda</h1>
                <p class="text-gray-500 mt-1">Kelola preferensi dan aktivitas perjalanan Anda.</p>
            </div>

            <div class="bg-white rounded-[2rem] shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <!-- Profile Banner -->
                <div class="h-48 bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-800 relative overflow-hidden">
                    <div class="absolute inset-0 opacity-20"
                        style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 32px 32px;">
                    </div>
                    <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-white opacity-10 rounded-full blur-3xl"></div>
                </div>

                <div class="px-8 pb-8">
                    <!-- Avatar & Basic Info -->
                    <div
                        class="flex flex-col sm:flex-row items-center sm:items-end gap-6 -mt-16 sm:-mt-20 mb-10 relative z-10">
                        <div
                            class="w-32 h-32 sm:w-40 sm:h-40 rounded-full border-4 border-white bg-indigo-100 shadow-lg overflow-hidden shrink-0 flex items-center justify-center relative">
                            @if(Auth::check() && Auth::user()->profile_photo_path)
                                <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="Foto Profil"
                                    class="w-full h-full object-cover">
                            @else
                                <i class="ri-user-smile-line text-6xl text-indigo-400"></i>
                            @endif

                            <!-- Premium Badge -->
                            <div class="absolute bottom-2 right-2 w-8 h-8 bg-emerald-500 rounded-full border-2 border-white flex items-center justify-center shadow-sm"
                                title="Verified Member">
                                <i class="ri-verified-badge-fill text-white text-sm"></i>
                            </div>
                        </div>

                        <div class="text-center sm:text-left flex-1 pb-2">
                            <h2 class="text-3xl font-bold text-gray-900 mb-1">{{ Auth::user()->name ?? 'Member Zidan' }}
                            </h2>
                            <p class="text-gray-500 flex items-center justify-center sm:justify-start gap-2">
                                <i class="ri-mail-line"></i> {{ Auth::user()->email ?? '-' }}
                            </p>
                        </div>

                        <div class="pb-2 hidden sm:block">
                            <span
                                class="inline-flex items-center px-4 py-2 rounded-full bg-indigo-50 text-indigo-700 text-sm font-bold border border-indigo-100">
                                Member Aktif
                            </span>
                        </div>
                    </div>

                    <!-- Profile Menu -->
                    <div class="space-y-4">
                        <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 ml-2 mt-8">Dashboard Menu
                        </h3>

                        <div class="bg-gray-50 rounded-2xl p-2 border border-gray-100">
                            <a href="/history"
                                class="group flex items-center p-4 rounded-xl hover:bg-white hover:shadow-md transition-all duration-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-blue-100 text-blue-600 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="ri-history-line"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-lg font-bold text-gray-900">Riwayat Pesanan</h4>
                                    <p class="text-sm text-gray-500">Lihat semua transaksi perjalanan Anda</p>
                                </div>
                                <i
                                    class="ri-arrow-right-s-line text-gray-400 text-2xl group-hover:-translate-x-1 group-hover:text-indigo-600 transition-all"></i>
                            </a>

                            <a href="#"
                                class="group flex items-center p-4 rounded-xl hover:bg-white hover:shadow-md transition-all duration-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="ri-customer-service-2-line"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-lg font-bold text-gray-900">Pusat Bantuan</h4>
                                    <p class="text-sm text-gray-500">Hubungi tim support 24/7 kami</p>
                                </div>
                                <i
                                    class="ri-arrow-right-s-line text-gray-400 text-2xl group-hover:-translate-x-1 group-hover:text-indigo-600 transition-all"></i>
                            </a>

                            <a href="#"
                                class="group flex items-center p-4 rounded-xl hover:bg-white hover:shadow-md transition-all duration-300">
                                <div
                                    class="w-12 h-12 rounded-xl bg-gray-200 text-gray-600 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="ri-settings-4-line"></i>
                                </div>
                                <div class="ml-4 flex-1">
                                    <h4 class="text-lg font-bold text-gray-900">Pengaturan Akun</h4>
                                    <p class="text-sm text-gray-500">Ubah password dan preferensi</p>
                                </div>
                                <i
                                    class="ri-arrow-right-s-line text-gray-400 text-2xl group-hover:-translate-x-1 group-hover:text-indigo-600 transition-all"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Danger Zone -->
                    <div class="mt-8">
                        <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-4 ml-2">Area Berbahaya</h3>
                        <div class="bg-rose-50/50 rounded-2xl p-2 border border-rose-100">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="w-full group flex items-center p-4 rounded-xl hover:bg-rose-100 transition-all duration-300 cursor-pointer text-left">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-rose-100 text-rose-600 flex items-center justify-center text-xl shrink-0 group-hover:bg-rose-600 group-hover:text-white transition-all">
                                        <i class="ri-logout-box-r-line"></i>
                                    </div>
                                    <div class="ml-4 flex-1">
                                        <h4 class="text-lg font-bold text-rose-700">Logout</h4>
                                        <p class="text-sm text-rose-500/80">Keluar dari sesi saat ini</p>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection