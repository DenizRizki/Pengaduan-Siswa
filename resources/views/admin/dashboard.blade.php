<x-guru-layout>
    <style>
        .totalPengadu {
            box-shadow: -5px 0 oklch(68.5% 0.169 237.323);
        }
        .totalKasus {
            box-shadow: -5px 0 oklch(75% 0.183 55.934);
        }
        .kasusDitangani {
            box-shadow: -5px 0 oklch(76.5% 0.177 163.223);
        }
        .kasusBaru {
            box-shadow: -5px 0 oklch(70.4% 0.191 22.216);
        }
        .border-ridge{
            border-style: ridge;
        }
    </style>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl">
                Dashboard
            </h2>
        </div>
    </x-slot>

    <div class="bg-gradient-to-br from-blue-200 via-sky-300 to-sky-500 p-6 rounded-xl shadow-md">
        <div class="mb-5">
            <h3 class="text-2xl font-bold">Pengaduan</h3>
            <p>Seluruh rekap pengaduan akhir-akhir ini</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg totalPengadu">
                <div class="flex justify-between items-start mb-2">
                    <i class="ri-user-follow-line text-3xl text-sky-500"></i>
                    <span class="text-sm">Total Pengadu</span>
                </div>
                <h3 class="mb-2 text-5xl text-sky-500 font-extrabold">{{ $totalPengadu }}</h3>
                <span class="text-sm text-gray-400">Sejak {{ $firstDate }}</span>
            </div>
            <div class="bg-white p-6 rounded-lg totalKasus">
                <div class="flex justify-between items-start mb-2">
                    <i class="ri-file-shield-line text-3xl text-orange-400"></i>
                    <span class="text-sm">Total Kasus</span>
                </div>
                <h3 class="mb-2 text-5xl text-orange-400 font-extrabold">{{ $totalKasus }}</h3>
                <span class="text-sm text-gray-400">Sejak {{ $firstDate }}</span>
            </div>
            <div class="bg-white p-6 rounded-lg kasusDitangani">
                <div class="flex justify-between items-start mb-2">
                    <i class="ri-checkbox-circle-line text-3xl text-green-400"></i>
                    <span class="text-sm">Kasus Ditangani</span>
                </div>
                <h3 class="mb-2 text-5xl text-green-400 font-extrabold">{{ $kasusDitangani }}</h3>
                <div class="w-full mt-4 h-2.5 bg-green-200 rounded-xl">
                    <div class="bg-green-500 h-2.5 rounded-xl cursor-help" style="width: {{ ($kasusDitangani / $totalKasus) * 100 }}%;" title="{{ $kasusDitangani . '/' . $totalKasus }}"></div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg kasusBaru">
                <div class="flex justify-between items-start mb-2">
                    <i class="ri-alarm-line text-3xl text-red-400"></i>
                    <span class="text-sm">Kasus Baru</span>
                </div>
                <h3 class="mb-2 text-5xl text-red-400 font-extrabold">{{ $kasusBaru }}</h3>
                <span class="text-sm text-gray-400">7 Hari Terakhir</span>
            </div>
        </div>
    </div>

    <div class="bg-white mt-8 p-6 rounded-xl shadow-md">
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Statistik Pengaduan</h3>
            <p class="text-sm text-gray-500">Data perkembangan kasus per bulan</p>
        </div>

        <div class="w-full flex justify-center">
            <canvas id="myChart" style="width:100%;max-width:800px"></canvas>
        </div>
    </div>

    <div class="mt-8 bg-gradient-to-br from-blue-200 via-sky-300 to-sky-500 p-6 rounded-xl shadow-md">
        <div class="mb-4">
            <h3 class="text-xl font-semibold text-gray-700 mb-4">Aktivitas Terbaru</h3>
            <hr class="border-gray-400">
        </div>
        <div class="p-6 bg-white rounded-xl">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-white border-2 border-ridge border-gray-600">
                    <thead class="bg-gradient-to-r from-sky-600 to-sky-700 text-gray-100 uppercase text-xs font-semibold rounded-lg">
                        <tr>
                            <th class="px-6 py-3 text-left">No</th>
                            <th class="px-6 py-3 text-left">Nama Siswa</th>
                            <th class="px-6 py-3 text-left">Tempat</th>
                            <th class="px-6 py-3 text-left">Jenis Pengaduan</th>
                            <th class="px-6 py-3 text-center">Status</th>
                            <th class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengaduan as $p)
                            <tr class="hover:bg-sky-800/30 transition duration-200">
                                <td class="px-6 py-3 text-gray-700 capitalize">{{ $loop->iteration }}</td>
                                <td class="px-6 py-3 font-semibold text-gray-700 capitalize">{{ $p->nama_siswa }}</td>
                                <td class="px-6 py-3 text-gray-700 capitalize">{{ $p->tempat }}</td>
                                <td class="px-6 py-3 text-gray-700 capitalize">{{ $p->kejadian }}</td>
                                <td class="px-6 py-3 text-center">
                                    @if ($p->status == 'diproses')
                                        <span class="bg-yellow-400/90 text-black px-3 py-1 rounded-full text-xs font-medium shadow">
                                            Diproses
                                        </span>
                                    @elseif ($p->status == 'selesai')
                                        <span class="bg-green-500/90 text-white px-3 py-1 rounded-full text-xs font-medium shadow">
                                            Selesai
                                        </span>
                                        <!-- Diedit Aksa -->
                                    @elseif ($p->status == 'ditangani')
                                        <span class="bg-red-500/90 text-white px-3 py-1 rounded-full text-xs font-medium shadow">
                                            Ditangani
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-3 text-center">
                                    <a href="/pengaduan" 
                                    class="bg-sky-600 hover:bg-sky-700 text-white text-xs font-semibold px-4 py-1.5 rounded-lg shadow transition duration-200">
                                    Lebih Banyak
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        const labels = ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt","Nov","Des"];
        
        // ambil dari controller
        const dataKasus = @json($dataKasus);
        const dataKasusDitangani = @json($dataKasusDitangani);

        new Chart("myChart", {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    label: "Kasus Ditangani",
                    data: dataKasusDitangani,
                    borderColor: "oklch(59.6% 0.145 163.225)",
                    borderWidth: 3,
                    pointBackgroundColor: "oklch(59.6% 0.145 163.225)",
                    pointRadius: 3,
                    fill: true,
                    backgroundColor: "oklch(95% 0.052 163.051)",
                    tension: 0.3
                }, {
                    label: "Kasus Masuk",
                    data: dataKasus,
                    borderColor: "oklch(70.4% 0.191 22.216)",
                    borderWidth: 3,
                    pointBackgroundColor: "oklch(70.4% 0.191 22.216)",
                    pointRadius: 3,
                    fill: true,
                    backgroundColor: "oklch(93.6% 0.032 17.717)",
                    tension: 0.3
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    labels: { fontColor: "#333", fontSize: 12 }
                },
                scales: {
                    yAxes: [{ ticks: { beginAtZero: true } }]
                }
            }
        });
    </script>

</x-guru-layout>
