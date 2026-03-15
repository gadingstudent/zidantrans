@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-gray-50 pt-28 pb-24 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-full h-80 bg-gradient-to-b from-indigo-900 to-gray-50 z-0"></div>
        <div class="absolute top-20 right-10 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl z-0 pointer-events-none">
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center md:text-left mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-extrabold text-white tracking-tight">Detail Reservasi</h1>
                    <p class="text-indigo-100 mt-1">Selesaikan pembayaran untuk mengonfirmasi perjalanan Anda.</p>
                </div>

                <a href="{{ route('history') }}"
                    class="inline-flex items-center justify-center px-5 py-2.5 bg-white/10 hover:bg-white/20 text-white backdrop-blur-md rounded-xl text-sm font-bold transition-all border border-white/20 shadow-sm leading-none h-fit">
                    <i class="ri-history-line mr-2"></i> Riwayat Pemesanan
                </a>
            </div>

            @if (session('error'))
                <div
                    class="mb-6 bg-rose-50 border border-rose-200 text-rose-700 px-6 py-4 rounded-2xl flex items-center gap-4 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-rose-100 flex items-center justify-center shrink-0">
                        <i class="ri-error-warning-fill text-2xl text-rose-500"></i>
                    </div>
                    <div>
                        <p class="font-medium text-sm">{{ session('error') }}</p>
                    </div>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Informasi Booking (Kiri: Lebar 2 Kolom) -->
                <div class="lg:col-span-2 space-y-6">
                    <div
                        class="bg-white rounded-[2rem] shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden relative">
                        <!-- Ticket Notch Decoration -->
                        <div
                            class="absolute top-0 right-0 w-24 h-24 bg-gray-50 rounded-full -translate-y-12 translate-x-12 border border-gray-100 hidden sm:block">
                        </div>

                        <div class="px-8 py-6 border-b border-gray-100 flex items-center gap-3 bg-gray-50/50">
                            <div
                                class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center">
                                <i class="ri-receipt-line text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">Rincian Perjalanan</h3>
                        </div>

                        <div class="p-8">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-8 gap-x-12">
                                <!-- Pemesan -->
                                <div class="space-y-4">
                                    <h4 class="text-sm font-bold tracking-wider text-gray-400 uppercase">Data Pemesan</h4>
                                    <div class="space-y-3">
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Nama Lengkap</p>
                                            <p class="font-bold text-gray-900">{{ $name ?? '-' }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Nomor HP</p>
                                            <p class="font-bold text-gray-900">{{ $phone ?? '-' }}</p>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Alamat Penjemputan</p>
                                            <p class="font-bold text-gray-900 leading-snug">{{ $address ?? '-' }}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Destinasi & Armada -->
                                <div class="space-y-4">
                                    <h4 class="text-sm font-bold tracking-wider text-gray-400 uppercase">Layanan & Armada
                                    </h4>
                                    <div class="space-y-3">
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Kategori Layanan</p>
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-purple-100 text-purple-700">
                                                {{ $booking->service->service_name ?? '-' }}
                                            </span>
                                        </div>
                                        <div>
                                            <p class="text-xs text-gray-500 mb-0.5">Tujuan Rinci</p>
                                            <p class="font-bold text-gray-900 leading-snug">{{ $destinationDetail ?? '-' }}
                                            </p>
                                        </div>
                                        <div
                                            class="flex items-center p-3 bg-indigo-50 rounded-xl mt-2 border border-indigo-100">
                                            <i class="ri-car-line text-2xl text-indigo-500 mr-3 shrink-0"></i>
                                            <div>
                                                <p class="text-xs text-indigo-500/80 mb-0">Armada Pilihan</p>
                                                <p class="font-bold text-indigo-900">{{ $booking->vehicle->name ?? '-' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Jadwal -->
                                <div class="md:col-span-2 pt-6 border-t border-gray-100 space-y-4">
                                    <h4 class="text-sm font-bold tracking-wider text-gray-400 uppercase">Jadwal Sewa</h4>
                                    <div
                                        class="flex flex-col sm:flex-row gap-4 sm:gap-8 bg-gray-50 rounded-2xl p-4 border border-gray-100">
                                        <div class="flex-1">
                                            <p class="text-xs text-gray-500 mb-1 flex items-center"><i
                                                    class="ri-map-pin-time-line mr-1 text-indigo-400"></i> Berangkat</p>
                                            <p class="font-bold text-gray-900">
                                                {{ \Carbon\Carbon::parse($booking->pickup_date)->translatedFormat('d F Y') }}
                                            </p>
                                            <p class="text-sm text-gray-600">Jam: <span
                                                    class="font-bold text-gray-900">{{ $booking->pickup_time }} WIB</span>
                                            </p>
                                        </div>
                                        <div class="hidden sm:flex flex-col items-center justify-center px-4">
                                            <div class="h-full border-l-2 border-dashed border-gray-300 relative">
                                                <div
                                                    class="absolute top-1/2 -translate-y-1/2 -translate-x-1/2 bg-gray-50 py-2">
                                                    <i class="ri-arrow-right-circle-fill text-gray-400 text-xl"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-1 sm:text-right">
                                            <p class="text-xs text-gray-500 mb-1 flex items-center sm:justify-end"><i
                                                    class="ri-flag-line mr-1 text-emerald-400"></i> Selesai Berlangganan</p>
                                            <p class="font-bold text-gray-900">
                                                {{ \Carbon\Carbon::parse($booking->end_date)->translatedFormat('d F Y') }}
                                            </p>
                                            <p class="text-sm text-gray-600">Jam: <span
                                                    class="font-bold text-gray-900">23:59 WIB</span></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Informasi Pembayaran (Kanan: Lebar 1 Kolom) -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-900 rounded-[2rem] shadow-2xl overflow-hidden sticky top-8 border border-gray-800">
                        <div class="px-6 py-6 border-b border-gray-800 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <i class="ri-wallet-3-line text-emerald-400 text-xl"></i>
                                <h3 class="text-lg font-bold text-white">Pembayaran</h3>
                            </div>

                            @php
                                $status = $payment->payment_status;
                                $badgeParams = match ($status) {
                                    'pending' => ['bg' => 'bg-amber-500/20', 'text' => 'text-amber-400', 'border' => 'border-amber-500/30', 'icon' => 'ri-time-line'],
                                    'paid', 'settlement' => ['bg' => 'bg-emerald-500/20', 'text' => 'text-emerald-400', 'border' => 'border-emerald-500/30', 'icon' => 'ri-check-double-line'],
                                    'cancelled', 'expire', 'deny' => ['bg' => 'bg-rose-500/20', 'text' => 'text-rose-400', 'border' => 'border-rose-500/30', 'icon' => 'ri-close-circle-line'],
                                    default => ['bg' => 'bg-gray-500/20', 'text' => 'text-gray-400', 'border' => 'border-gray-500/30', 'icon' => 'ri-information-line']
                                };
                            @endphp
                            <span
                                class="inline-flex items-center px-2.5 py-1 text-xs font-bold uppercase rounded-full border {{ $badgeParams['bg'] }} {{ $badgeParams['text'] }} {{ $badgeParams['border'] }}">
                                <i class="{{ $badgeParams['icon'] }} mr-1"></i> {{ $status }}
                            </span>
                        </div>

                        <div class="p-6 space-y-6">
                            <div>
                                <p class="text-gray-400 text-xs mb-1">Order ID</p>
                                <p
                                    class="text-white font-mono text-sm bg-gray-800/50 p-2 rounded-lg border border-gray-700/50 break-all select-all">
                                    {{ $payment->order_id }}</p>
                            </div>

                            <div>
                                <p class="text-gray-400 text-xs mb-1">Total Tagihan</p>
                                <p class="text-4xl gap-1 items-baseline font-extrabold text-white flex">
                                    <span class="text-lg text-emerald-400">Rp</span>
                                    {{ number_format($payment->amount, 0, ',', '.') }}
                                </p>
                            </div>

                            <div class="border-t border-gray-800 pt-6">
                                @if ($status === 'pending' && $snapToken)
                                    <div
                                        class="bg-gray-800/50 p-4 rounded-xl border border-gray-700 mb-4 text-sm text-gray-300">
                                        Silakan selesaikan pembayaran untuk mengamankan armada pilihan Anda.
                                    </div>
                                    <button id="pay-button"
                                        class="w-full py-4 px-4 bg-emerald-500 hover:bg-emerald-400 text-emerald-950 font-bold rounded-xl shadow-[0_0_20px_rgba(16,185,129,0.2)] hover:shadow-[0_0_30px_rgba(16,185,129,0.4)] transition-all duration-300 hover:-translate-y-0.5 flex items-center justify-center gap-2">
                                        <i class="ri-secure-payment-line text-xl"></i> Pilihan Pembayaran
                                    </button>
                                    <p class="text-center text-xs text-gray-500 mt-4 flex items-center justify-center gap-1">
                                        <i class="ri-lock-fill"></i> Pembayaran Aman oleh Midtrans
                                    </p>
                                @elseif ($status === 'paid' || $status === 'settlement')
                                    <div class="bg-emerald-900/40 border border-emerald-500/30 rounded-xl p-5 text-center">
                                        <div
                                            class="w-12 h-12 bg-emerald-500/20 rounded-full flex items-center justify-center mx-auto mb-3 text-emerald-400 text-2xl">
                                            <i class="ri-check-line"></i>
                                        </div>
                                        <h4 class="text-emerald-400 font-bold mb-1">Pembayaran Lunas!</h4>
                                        <p class="text-emerald-200/60 text-xs">Terima kasih, pembayaran Anda telah kami terima.
                                        </p>
                                    </div>
                                @elseif ($status === 'cancelled' || $status === 'expire')
                                    <div class="bg-rose-900/40 border border-rose-500/30 rounded-xl p-5 text-center">
                                        <div
                                            class="w-12 h-12 bg-rose-500/20 rounded-full flex items-center justify-center mx-auto mb-3 text-rose-400 text-2xl">
                                            <i class="ri-close-line"></i>
                                        </div>
                                        <h4 class="text-rose-400 font-bold mb-1">Pembayaran Gagal/Batal</h4>
                                        <p class="text-rose-200/60 text-xs">Sesi pembayaran telah berakhir atau dibatalkan.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@if ($snapToken)
    @section('scripts')
        {{-- Memanggil script UI/UX Midtrans --}}
        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
        <!-- SweetAlert2 untuk notifikasi yang lebih premium (Opsional/Fallback) -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script type="text/javascript">
            document.getElementById('pay-button').addEventListener('click', function () {
                snap.pay('{{ $snapToken }}', {
                    onSuccess: function (result) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Pembayaran Berhasil!',
                            text: 'Terima kasih, tagihan Anda telah terbayar lunas.',
                            confirmButtonColor: '#10B981',
                            customClass: {
                                popup: 'rounded-3xl'
                            }
                        }).then((result) => {
                            location.reload();
                        });
                    },
                    onPending: function (result) {
                        Swal.fire({
                            icon: 'info',
                            title: 'Menunggu Pembayaran',
                            text: 'Selesaikan instruksi pembayaran yang telah diberikan.',
                            confirmButtonColor: '#3B82F6',
                            customClass: {
                                popup: 'rounded-3xl'
                            }
                        });
                    },
                    onError: function (result) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Pembayaran Gagal',
                            text: 'Terjadi kesalahan atau koneksi terputus saat bertransaksi.',
                            confirmButtonColor: '#EF4444',
                            customClass: {
                                popup: 'rounded-3xl'
                            }
                        });
                    },
                    onClose: function () {
                        // Optional: aksi ketika popup ditutup tanpa menyelesaikan pembayaran
                    }
                });
            });
        </script>
    @endsection
@endif