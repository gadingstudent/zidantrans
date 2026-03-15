@extends('layouts.guest')

@section('content')
    <section class="min-h-screen bg-gray-50 pt-28 pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-8">
                <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight flex items-center gap-3">
                    <div
                        class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-2xl flex items-center justify-center shadow-sm">
                        <i class="ri-history-line text-2xl"></i>
                    </div>
                    Riwayat Pemesanan
                </h1>
                <p class="text-gray-500 mt-2">Lacak status dan kelola daftar perjalanan Anda sebelumnya.</p>
            </div>

            @if ($bookings->isEmpty())
                <div
                    class="bg-white rounded-3xl shadow-sm border border-gray-100 p-12 text-center flex flex-col items-center justify-center min-h-[400px]">
                    <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mb-6">
                        <i class="ri-file-list-3-line text-5xl text-gray-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Pemesanan</h3>
                    <p class="text-gray-500 max-w-md mx-auto mb-8">Anda belum pernah melakukan pemesanan kendaraan sebelumnya.
                        Pesan sekarang untuk memulai perjalanan Anda.</p>
                    <a href="{{ route('booking.form') }}"
                        class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30 hover:bg-indigo-700 hover:-translate-y-0.5 transition-all duration-200">
                        <i class="ri-add-line mr-2"></i> Buat Pesanan Baru
                    </a>
                </div>
            @else
                <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-500 uppercase bg-gray-50/80 border-b border-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-5 font-bold tracking-wider rounded-tl-3xl">#</th>
                                    <th scope="col" class="px-6 py-5 font-bold tracking-wider">Detail Perjalanan</th>
                                    <th scope="col" class="px-6 py-5 font-bold tracking-wider">Armada</th>
                                    <th scope="col" class="px-6 py-5 font-bold tracking-wider">Waktu Penjemputan</th>
                                    <th scope="col" class="px-6 py-5 font-bold tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-5 text-right font-bold tracking-wider rounded-tr-3xl">Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100">
                                @foreach ($bookings as $booking)
                                                        <tr class="hover:bg-indigo-50/30 transition-colors duration-200 group">
                                                            <td class="px-6 py-5 font-medium text-gray-900">
                                                                {{ $loop->iteration }}
                                                            </td>
                                                            <td class="px-6 py-5">
                                                                <p class="font-bold text-gray-900 mb-1">{{ $booking->service->service_name }}</p>
                                                                <p class="text-xs text-gray-500 flex items-center">
                                                                    <i class="ri-user-line mr-1"></i> {{ $booking->user->name }}
                                                                </p>
                                                            </td>
                                                            <td class="px-6 py-5">
                                                                <div class="flex items-center">
                                                                    <div
                                                                        class="w-8 h-8 rounded-full bg-indigo-100 text-indigo-600 flex items-center justify-center mr-3 shrink-0">
                                                                        <i class="ri-car-line"></i>
                                                                    </div>
                                                                    <span class="font-medium text-gray-700">{{ $booking->vehicle->name }}</span>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-5">
                                                                <div class="flex items-center text-gray-600">
                                                                    <i class="ri-calendar-event-line mr-2 text-indigo-400"></i>
                                                                    <span
                                                                        class="font-medium">{{ \Carbon\Carbon::parse($booking->pickup_date)->translatedFormat('d F Y, H:i') }}</span>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-5">
                                                                @php
                                                                    $status = strtolower($booking->status);
                                                                    $badgeClass = '';
                                                                    $icon = '';

                                                                    // Asumsi mapping status. Sesuaikan jika perlu
                                                                    if (in_array($status, ['pending', 'menunggu'])) {
                                                                        $badgeClass = 'bg-amber-100 text-amber-700 border-amber-200';
                                                                        $icon = 'ri-time-line';
                                                                    } elseif (in_array($status, ['confirmed', 'dikonfirmasi', 'aktif', 'berjalan'])) {
                                                                        $badgeClass = 'bg-blue-100 text-blue-700 border-blue-200';
                                                                        $icon = 'ri-checkbox-circle-line';
                                                                    } elseif (in_array($status, ['completed', 'selesai'])) {
                                                                        $badgeClass = 'bg-emerald-100 text-emerald-700 border-emerald-200';
                                                                        $icon = 'ri-check-double-line';
                                                                    } elseif (in_array($status, ['cancelled', 'batal'])) {
                                                                        $badgeClass = 'bg-rose-100 text-rose-700 border-rose-200';
                                                                        $icon = 'ri-close-circle-line';
                                                                    } else {
                                                                        $badgeClass = 'bg-gray-100 text-gray-700 border-gray-200';
                                                                        $icon = 'ri-information-line';
                                                                    }
                                                                @endphp
                                     <span
                                                                    class="inline-flex items-center px-3 py-1 text-xs font-bold rounded-full border {{ $badgeClass }}">
                                                                    <i class="{{ $icon }} mr-1.5"></i>
                                                                    {{ getFriendlyStatus($booking->status) }}
                                                                </span>
                                                            </td>
                                                            <td class="px-6 py-5 text-right">
                                                                <a href="{{ route('booking.show', $booking->booking_id) }}"
                                                                    class="inline-flex items-center justify-center w-10 h-10 rounded-xl bg-gray-50 text-indigo-600 hover:bg-indigo-600 hover:text-white border border-gray-200 hover:border-transparent transition-all duration-200 shadow-sm group-hover:shadow-md"
                                                                    title="Lihat Detail">
                                                                    <i class="ri-arrow-right-up-line text-lg"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Optional Pagination Container --}}
                    @if(method_exists($bookings, 'links') && $bookings->hasPages())
                        <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/50">
                            {{ $bookings->links() }}
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
@endsection