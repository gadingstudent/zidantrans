<nav
    class="bg-white/80 backdrop-blur-xl fixed w-full z-50 top-0 start-0 border-b border-gray-100/50 shadow-sm transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="/beranda" class="flex items-center gap-3 group">
                <div
                    class="relative overflow-hidden rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 p-2 shadow-lg group-hover:shadow-indigo-500/30 transition-all duration-300">
                    <img src="{{ asset('/img/logo.png') }}"
                        class="h-6 w-auto object-contain drop-shadow-md relative z-10 brightness-0 invert"
                        alt="Zidan Transport">
                </div>
                <span
                    class="self-center text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-900 to-indigo-600 tracking-tight">Zidan
                    Trans</span>
            </a>

            <!-- Mobile Menu Button -->
            <div class="flex items-center md:hidden">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2.5 w-10 h-10 justify-center text-sm text-gray-600 rounded-xl hover:bg-gray-100 hover:text-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-100 transition-colors"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <i class="ri-menu-4-line text-2xl"></i>
                </button>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex flex-1 justify-center" id="navbar-sticky">
                <ul
                    class="flex flex-col md:flex-row md:space-x-2 lg:space-x-4 p-4 md:p-0 mt-4 md:mt-0 bg-white md:bg-transparent rounded-2xl border md:border-0 border-gray-100 shadow-xl md:shadow-none">
                    <li>
                        <a href="/beranda"
                            class="block py-2.5 px-4 rounded-xl font-medium transition-all duration-200
                            {{ request()->is('beranda') || request()->is('/') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
                            <i
                                class="ri-home-smile-line mr-1.5 {{ request()->is('beranda') || request()->is('/') ? 'text-indigo-500' : 'text-gray-400' }}"></i>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="/layanan"
                            class="block py-2.5 px-4 rounded-xl font-medium transition-all duration-200
                            {{ request()->is('layanan') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
                            <i
                                class="ri-car-line mr-1.5 {{ request()->is('layanan') ? 'text-indigo-500' : 'text-gray-400' }}"></i>
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="/pesanan"
                            class="block py-2.5 px-4 rounded-xl font-medium transition-all duration-200
                            {{ request()->is('pesanan') ? 'bg-indigo-50 text-indigo-700' : 'text-gray-600 hover:bg-gray-50 hover:text-indigo-600' }}">
                            <i
                                class="ri-file-list-3-line mr-1.5 {{ request()->is('pesanan') ? 'text-indigo-500' : 'text-gray-400' }}"></i>
                            Pesanan
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact & Auth -->
            <div class="hidden md:flex items-center space-x-6">
                <!-- Phone -->
                <a href="https://wa.me/6282142951682" target="_blank"
                    class="hidden lg:flex items-center gap-2 text-sm font-medium text-gray-500 hover:text-green-600 transition-colors">
                    <div class="w-8 h-8 rounded-full bg-green-50 flex items-center justify-center text-green-500">
                        <i class="ri-whatsapp-line text-lg"></i>
                    </div>
                    +62 821 4295 1682
                </a>

                <div class="h-6 w-px bg-gray-200 hidden lg:block"></div>

                @auth
                    <div class="relative group">
                        <button type="button" class="flex items-center gap-3 focus:outline-none" id="user-menu-button"
                            aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <div class="flex flex-col text-right hidden sm:block">
                                <span class="text-sm font-bold text-gray-900 leading-none">{{ Auth::user()->name }}</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-full bg-gradient-to-tr from-indigo-500 to-purple-500 p-0.5 shadow-md">
                                @if(Auth::user()->profile_photo_path)
                                    <img class="w-full h-full rounded-full border-2 border-white object-cover"
                                        src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="user photo">
                                @else
                                    <div
                                        class="w-full h-full rounded-full border-2 border-white bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold">
                                        {{ substr(Auth::user()->name, 0, 1) }}
                                    </div>
                                @endif
                            </div>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white/90 backdrop-blur-xl divide-y divide-gray-100 rounded-2xl shadow-xl w-56 border border-gray-100"
                            id="user-dropdown">
                            <div class="px-4 py-3 bg-gray-50/50 rounded-t-2xl">
                                <span class="block text-sm font-semibold text-gray-900">{{ Auth::user()->name }}</span>
                                <span class="block text-xs text-gray-500 truncate mt-0.5">{{ Auth::user()->email }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ route('profile') }}"
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">
                                        <i class="ri-user-settings-line mr-3 text-lg text-gray-400"></i> Profil Saya
                                    </a>
                                </li>
                                <li>
                                    <a href="/history"
                                        class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">
                                        <i class="ri-history-line mr-3 text-lg text-gray-400"></i> Riwayat Pesanan
                                    </a>
                                </li>
                                <li>
                                    <hr class="border-gray-100 my-1">
                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit"
                                            class="flex w-full items-center px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                            <i class="ri-logout-circle-r-line mr-3 text-lg text-red-400"></i> Keluar
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-gray-900 border border-transparent rounded-xl shadow-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 transition-all duration-300 hover:shadow-indigo-500/30">
                        Log In
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>