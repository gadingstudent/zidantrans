<footer class="bg-white border-t border-gray-100 mt-20 md:mb-0 mb-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            <!-- Brand Info -->
            <div class="col-span-1 md:col-span-2 lg:col-span-1 space-y-6">
                <a href="/beranda" class="flex items-center gap-3">
                    <div
                        class="relative overflow-hidden rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 p-2 shadow-lg">
                        <img src="{{ asset('/img/logo.png') }}"
                            class="h-6 w-auto object-contain drop-shadow-md brightness-0 invert" alt="Zidan Transport">
                    </div>
                    <span
                        class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-indigo-900 to-indigo-600 tracking-tight">Zidan
                        Trans</span>
                </a>
                <p class="text-gray-500 text-sm leading-relaxed">
                    Solusi Transportasi Terpercaya untuk Setiap Perjalanan Anda. Melayani carteran umum, wisata pelajar,
                    peziarah, elf, dan travel executive.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-indigo-50 hover:text-indigo-600 transition-colors">
                        <i class="ri-facebook-fill text-lg"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-pink-50 hover:text-pink-600 transition-colors">
                        <i class="ri-instagram-fill text-lg"></i>
                    </a>
                    <a href="https://wa.me/6282142951682"
                        class="w-10 h-10 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 hover:bg-green-50 hover:text-green-600 transition-colors">
                        <i class="ri-whatsapp-fill text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-xs font-bold text-gray-900 uppercase tracking-wider mb-6">Navigasi</h3>
                <ul class="space-y-4">
                    <li><a href="/beranda"
                            class="text-gray-500 hover:text-indigo-600 transition-colors text-sm font-medium flex items-center"><i
                                class="ri-arrow-right-s-line text-indigo-400 mr-2"></i> Beranda</a></li>
                    <li><a href="/layanan"
                            class="text-gray-500 hover:text-indigo-600 transition-colors text-sm font-medium flex items-center"><i
                                class="ri-arrow-right-s-line text-indigo-400 mr-2"></i> Layanan</a></li>
                    <li><a href="/pesanan"
                            class="text-gray-500 hover:text-indigo-600 transition-colors text-sm font-medium flex items-center"><i
                                class="ri-arrow-right-s-line text-indigo-400 mr-2"></i> Pesanan</a></li>
                    <li><a href="/profile"
                            class="text-gray-500 hover:text-indigo-600 transition-colors text-sm font-medium flex items-center"><i
                                class="ri-arrow-right-s-line text-indigo-400 mr-2"></i> Profil</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-span-1 md:col-span-2">
                <h3 class="text-xs font-bold text-gray-900 uppercase tracking-wider mb-6">Hubungi Kami</h3>
                <ul class="space-y-5">
                    <li class="flex items-start">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600 mt-1">
                            <i class="ri-map-pin-line text-lg"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-semibold text-gray-900 mb-1">Alamat Utama</p>
                            <p class="text-sm text-gray-500 leading-relaxed">Jl. Bokbrobos Rt.04/Rw.04 Ds.Ngadiluwih
                                Kec.Ngadiluwih Kab. Kediri Kode Pos 64171 Jawa Timur</p>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600 mt-1">
                            <i class="ri-phone-line text-lg"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-semibold text-gray-900 mb-1">Telepon / WhatsApp</p>
                            <a href="https://wa.me/6282142951682"
                                class="text-sm text-gray-500 hover:text-indigo-600 transition-colors">+62 821 4295
                                1682</a>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <div
                            class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-50 flex items-center justify-center text-indigo-600 mt-1">
                            <i class="ri-mail-send-line text-lg"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-semibold text-gray-900 mb-1">Email</p>
                            <a href="mailto:zidantrans@gmail.com"
                                class="text-sm text-gray-500 hover:text-indigo-600 transition-colors">zidantrans@gmail.com</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-gray-500 text-center md:text-left">
                © {{ date('Y') }} <span class="font-semibold text-gray-900">Zidan Transport</span>. All rights reserved.
            </p>
            <div class="flex space-x-6 text-sm text-gray-500">
                <a href="#" class="hover:text-indigo-600 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-indigo-600 transition-colors">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>