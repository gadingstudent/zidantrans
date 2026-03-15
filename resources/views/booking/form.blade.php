@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-gray-50 pt-28 pb-24 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-indigo-900 to-gray-50 z-0"></div>
        <div class="absolute top-20 left-10 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl z-0"></div>
        <div class="absolute top-40 right-10 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl z-0"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-10">
                <h1 class="text-3xl md:text-4xl font-extrabold text-white tracking-tight mb-3">Reservasi Armada</h1>
                <p class="text-lg text-indigo-100 max-w-2xl mx-auto">Lengkapi formulir di bawah ini untuk mengamankan
                    perjalanan Anda bersama Zidan Transport.</p>
            </div>

            {{-- Alerts --}}
            @if (session('success'))
                <div
                    class="mb-6 bg-emerald-50 border border-emerald-200 text-emerald-700 px-6 py-4 rounded-2xl flex items-center gap-4 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center shrink-0">
                        <i class="ri-checkbox-circle-fill text-2xl text-emerald-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold">Berhasil!</h4>
                        <p class="text-sm mt-0.5">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            @if ($errors->any())
                <div
                    class="mb-6 bg-rose-50 border border-rose-200 text-rose-700 px-6 py-4 rounded-2xl flex items-start gap-4 shadow-sm">
                    <div class="w-10 h-10 rounded-full bg-rose-100 flex items-center justify-center shrink-0 mt-1">
                        <i class="ri-error-warning-fill text-2xl text-rose-500"></i>
                    </div>
                    <div>
                        <h4 class="font-bold mb-1">Terjadi Kesalahan!</h4>
                        <ul class="list-disc list-inside text-sm space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="bg-white rounded-[2rem] shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden">
                <div class="h-2 bg-gradient-to-r from-indigo-500 via-purple-500 to-emerald-500"></div>

                <form method="POST" action="{{ route('booking.store') }}" class="p-8 md:p-12 space-y-10">
                    @csrf

                    <!-- Section 1: Data Pemesan -->
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-10 h-10 rounded-xl bg-indigo-100 text-indigo-600 flex items-center justify-center shadow-sm">
                                <i class="ri-user-smile-line text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">1. Informasi Pemesan</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 group">
                                <label for="name" class="block text-sm font-bold text-gray-700 mb-2">Nama Lengkap</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                                    class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder-gray-400 font-medium"
                                    placeholder="Masukkan nama lengkap sesuai identitas">
                            </div>

                            <div class="group">
                                <label for="phone" class="block text-sm font-bold text-gray-700 mb-2">Nomor
                                    WhatsApp/HP</label>
                                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                                    class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder-gray-400 font-medium"
                                    placeholder="Contoh: 081234567890">
                            </div>

                            <div class="md:col-span-2 group">
                                <label for="address" class="block text-sm font-bold text-gray-700 mb-2">Alamat
                                    Penjemputan</label>
                                <textarea name="address" id="address" rows="3" required
                                    class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder-gray-400 font-medium resize-none"
                                    placeholder="Tuliskan alamat penjemputan secara detail beserta patokan">{{ old('address') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-100"></div>

                    <!-- Section 2: Detail Perjalanan -->
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-10 h-10 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center shadow-sm">
                                <i class="ri-map-pin-range-line text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">2. Detail Perjalanan</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="md:col-span-2 group">
                                <label for="service_id" class="block text-sm font-bold text-gray-700 mb-2">Tujuan
                                    Layanan</label>
                                <div class="relative">
                                    <select name="service_id" id="service_id" required
                                        class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all appearance-none cursor-pointer font-medium">
                                        <option value="" disabled selected>-- Pilih Layanan yang Dibutuhkan --</option>
                                        @foreach ($services as $service)
                                            <option value="{{ $service->service_id }}" {{ old('service_id') == $service->service_id ? 'selected' : '' }}>
                                                {{ $service->service_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                                        <i class="ri-arrow-down-s-line text-xl"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="md:col-span-2 group">
                                <label for="destination_detail" class="block text-sm font-bold text-gray-700 mb-2">Detail
                                    Destinasi (Opsional)</label>
                                <textarea name="destination_detail" id="destination_detail" rows="2"
                                    class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder-gray-400 font-medium resize-none"
                                    placeholder="Ketik rute tujuan atau destinasi spesifik (misal: Wisata Bromo, Dropp off Bandara Juanda)">{{ old('destination_detail') }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-gray-100"></div>

                    <!-- Section 3: Waktu & Armada -->
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center shadow-sm">
                                <i class="ri-calendar-check-line text-xl"></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900">3. Jadwal & Pilihan Armada</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label for="pickup_date" class="block text-sm font-bold text-gray-700 mb-2">Tanggal
                                    Berangkat</label>
                                <input type="date" name="pickup_date" id="pickup_date" value="{{ old('pickup_date') }}"
                                    required
                                    class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all font-medium cursor-pointer">
                            </div>

                            <div class="group">
                                <label for="end_date" class="block text-sm font-bold text-gray-700 mb-2">Tanggal
                                    Selesai</label>
                                <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" required
                                    class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all font-medium cursor-pointer">
                            </div>

                            <div class="group">
                                <label for="pickup_time" class="block text-sm font-bold text-gray-700 mb-2">Jam
                                    Penjemputan</label>
                                <input type="time" name="pickup_time" id="pickup_time" value="{{ old('pickup_time') }}"
                                    required
                                    class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl text-gray-900 focus:bg-white focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all font-medium cursor-pointer">
                            </div>

                            <div class="md:col-span-2 group mt-2">
                                <label for="vehicle_id" class="block text-sm font-bold text-gray-700 mb-2">Pilih Armada
                                    (Tersedia berdasarkan tanggal)</label>
                                <div class="relative">
                                    <select name="vehicle_id" id="vehicle_id" required
                                        class="w-full px-4 py-4 bg-gray-50 border-2 border-indigo-100 rounded-xl text-indigo-950 focus:bg-white focus:outline-none focus:ring-4 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all appearance-none cursor-pointer font-bold text-lg">
                                        <option value="" disabled selected>-- Pilih Tanggal Terlebih Dahulu --</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-indigo-500">
                                        <i class="ri-car-line text-2xl"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Notice -->
                    <div class="bg-amber-50 rounded-2xl p-5 border border-amber-200 flex items-start gap-3 mt-4">
                        <i class="ri-information-fill text-amber-500 text-xl mt-0.5"></i>
                        <p class="text-amber-800 text-sm leading-relaxed">
                            Dengan menekan tombol di bawah, Anda akan diarahkan ke halaman detail dan pembayaran otomatis.
                            Pastikan semua data sudah terisi dengan benar.
                        </p>
                    </div>

                    <div class="pt-6 border-t border-gray-100">
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 py-5 px-6 border border-transparent rounded-[1.25rem] shadow-[0_0_30px_rgba(99,102,241,0.3)] hover:shadow-[0_0_40px_rgba(99,102,241,0.5)] text-lg font-bold text-white bg-gradient-to-r from-indigo-600 to-purple-600 hover:-translate-y-1 hover:scale-[1.01] transition-all duration-300">
                            Buat Pesanan & Lanjutkan
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Required Scripts for Ajax Vehicle Availability -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            function fetchAvailableVehicles() {
                const pickup_date = $('#pickup_date').val();
                const end_date = $('#end_date').val();
                const $vehicleSelect = $('#vehicle_id');

                if (pickup_date && end_date) {
                    $vehicleSelect.html('<option value="">⏳ Mencari armada yang tersedia...</option>');

                    $.ajax({
                        url: "{{ route('vehicles.availability') }}",
                        type: 'GET',
                        data: { pickup_date, end_date },
                        success: function (data) {
                            $vehicleSelect.empty().append('<option value="" disabled selected>-- Pilih Armada yang Tersedia --</option>');

                            let availableCount = 0;
                            $.each(data, function (_, vehicle) {
                                const option = $('<option></option>').val(vehicle.id);
                                // Format currency if base_price exists
                                let priceInfo = vehicle.base_price ? ' - Rp ' + new Intl.NumberFormat('id-ID').format(vehicle.base_price) : '';

                                if (!vehicle.is_available) {
                                    option.attr('disabled', true).text('❌ ' + vehicle.name + ' (Disewa)');
                                } else {
                                    option.text('✅ ' + vehicle.name + priceInfo);
                                    availableCount++;
                                }

                                if (vehicle.id == "{{ old('vehicle_id') }}") option.prop('selected', true);
                                $vehicleSelect.append(option);
                            });

                            if (availableCount === 0) {
                                $vehicleSelect.html('<option value="">⚠️ Maaf, tidak ada armada tersedia pada tanggal tersebut</option>');
                            }
                        },
                        error: function (xhr) {
                            $vehicleSelect.html('<option value="">❌ Gagal mengambil data armada</option>');
                            console.error('API Error:', xhr);
                        }
                    });
                } else {
                    $vehicleSelect.html('<option value="" disabled selected>-- Pilih Tanggal Terlebih Dahulu --</option>');
                }
            }

            $('#pickup_date, #end_date').on('change', fetchAvailableVehicles);

            // Initial load if dates are present (e.g. on validation back)
            if ($('#pickup_date').val() && $('#end_date').val()) {
                fetchAvailableVehicles();
            }
        });
    </script>
@endsection