@extends('layouts.guest')

@section('content')
  <section class="min-h-screen bg-gray-50 relative pt-32 pb-24 overflow-hidden">
    <!-- Decorative Background Elements -->
    <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-indigo-900 to-gray-50 z-0"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl z-0"></div>
    <div class="absolute top-20 right-10 w-72 h-72 bg-blue-500/20 rounded-full blur-3xl z-0"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight mb-4">Panduan Pemesanan</h1>
        <p class="text-lg text-indigo-100 max-w-2xl mx-auto">Ikuti langkah-langkah mudah di bawah ini untuk memulai
          perjalanan tak terlupakan bersama Zidan Transport.</p>
      </div>

      <div
        class="bg-white rounded-[2rem] shadow-2xl shadow-indigo-500/10 border border-gray-100 p-8 md:p-12 relative overflow-hidden">
        <!-- Pattern Overlay -->
        <div class="absolute inset-0 opacity-5 pointer-events-none"
          style="background-image: radial-gradient(circle at 2px 2px, black 1px, transparent 0); background-size: 24px 24px;">
        </div>

        <div class="relative">
          <!-- Vertical Line -->
          <div
            class="absolute left-8 top-8 bottom-8 w-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-emerald-500 rounded-full hidden md:block">
          </div>

          <div class="space-y-12">
            @php
              $steps = [
                ['icon' => 'ri-user-smile-line', 'color' => 'indigo', 'title' => 'Isi Data Lengkap Pemesan', 'desc' => 'Masukkan nama lengkap, alamat penjemputan, dan nomor HP/WhatsApp yang aktif.'],
                ['icon' => 'ri-map-pin-route-line', 'color' => 'blue', 'title' => 'Pilih Kategori Layanan', 'desc' => 'Tentukan layanan yang Anda butuhkan: Carter Dalam Kota, Antar Jemput Bandara, atau Wisata.'],
                ['icon' => 'ri-map-pin-add-line', 'color' => 'purple', 'title' => 'Tentukan Detail Tujuan', 'desc' => 'Tuliskan secara spesifik rute Anda. Contoh: Penjemputan Surabaya ke Wisata Bromo.'],
                ['icon' => 'ri-calendar-check-line', 'color' => 'pink', 'title' => 'Atur Tanggal & Jam', 'desc' => 'Pilih tanggal keberangkatan dan kepulangan, serta jam penjemputan yang Anda inginkan.'],
                ['icon' => 'ri-car-line', 'color' => 'orange', 'title' => 'Pilih Armada Favorit', 'desc' => 'Sesuaikan dengan jumlah rombongan. Pilih dari Avanza, Xenia, hingga Isuzu ELF.'],
                ['icon' => 'ri-send-plane-fill', 'color' => 'emerald', 'title' => 'Kirim & Tunggu Konfirmasi', 'desc' => 'Klik \'Pesan Sekarang\', dan Customer Service kami akan segera menghubungi Anda via WA.'],
              ];
            @endphp

            @foreach($steps as $index => $step)
              <div class="relative flex items-start group">
                <!-- Step Number Node -->
                <div
                  class="hidden md:flex absolute -left-[2px] w-10 h-10 rounded-full bg-white border-4 border-{{$step['color']}}-500 items-center justify-center font-bold text-{{$step['color']}}-600 z-10 shadow-lg group-hover:scale-110 group-hover:bg-{{$step['color']}}-50 transition-all duration-300">
                  {{ $index + 1 }}
                </div>

                <div
                  class="md:ml-20 flex-1 bg-gray-50 rounded-2xl p-6 border border-gray-100 group-hover:bg-white group-hover:shadow-xl group-hover:shadow-{{$step['color']}}-500/10 group-hover:border-{{$step['color']}}-200 transition-all duration-300">
                  <div class="flex items-start gap-5">
                    <div
                      class="w-14 h-14 shrink-0 rounded-2xl bg-{{$step['color']}}-100 text-{{$step['color']}}-600 flex items-center justify-center text-2xl group-hover:bg-{{$step['color']}}-500 group-hover:text-white transition-colors duration-300 shadow-sm border border-{{$step['color']}}-200">
                      <i class="{{ $step['icon'] }}"></i>
                    </div>
                    <div>
                      <h3 class="text-xl font-bold text-gray-900 mb-2 flex items-center">
                        <span
                          class="md:hidden w-6 h-6 rounded-full bg-{{$step['color']}}-500 text-white text-xs flex items-center justify-center mr-2 shadow-sm">{{ $index + 1 }}</span>
                        {{ $step['title'] }}
                      </h3>
                      <p class="text-gray-600 leading-relaxed">{{ $step['desc'] }}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <!-- Important Note -->
        <div class="mt-14 bg-amber-50 rounded-2xl p-6 border border-amber-200 flex items-start gap-4">
          <i class="ri-information-fill text-amber-500 text-3xl mt-1"></i>
          <div>
            <h4 class="font-bold text-amber-900 mb-2 text-lg">Catatan Penting</h4>
            <p class="text-amber-800 leading-relaxed">Pastikan semua data yang Anda masukkan benar dan valid untuk
              mempercepat proses konfirmasi. Admin Zidan Transport akan menghubungi Anda melalui WhatsApp atau telepon
              setelah pesanan diterima dalam jam kerja.</p>
          </div>
        </div>

        <div class="mt-12 text-center relative z-20">
          <a href="{{ route('booking.form') }}"
            class="group inline-flex items-center justify-center px-10 py-5 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold rounded-[1.5rem] shadow-[0_0_40px_rgba(99,102,241,0.4)] hover:shadow-[0_0_60px_rgba(99,102,241,0.6)] hover:-translate-y-1 hover:scale-[1.02] transition-all duration-300 text-lg w-full md:w-auto overflow-hidden">
            <span class="relative z-10 flex items-center gap-2">Mulai Pesan Sekarang <i
                class="ri-arrow-right-line group-hover:translate-x-1 transition-transform"></i></span>
            <div
              class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
@endsection