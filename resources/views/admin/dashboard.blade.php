<x-guru-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl">
                Dashboard
            </h2>

            <form action="">
                <div class="relative">
                    <i class="fa fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-600"></i>
                    <input type="text" name="search" placeholder="Search..."
                        class="rounded-lg w-[18vw] bg-white pl-10 py-2 text-gray-600 shadow-sm focus:ring-2 focus:ring-sky-500 outline-none" />
                </div>
            </form>
        </div>
    </x-slot>

    <div class="bg-gradient-to-br from-blue-200 via-sky-300 to-sky-500 p-6 rounded-xl shadow-md">
        <div class="mb-5">
            <h3 class="text-2xl font-bold">Pengaduan</h3>
            <p>Seluruh rekap pengaduan akhir-akhir ini</p>
        </div>
        <div class="justify-center flex gap-7 flex-wrap">
            <div class="bg-white py-3 px-8 rounded-lg">
                <h3 class="text-4xl font-bold">500</h3>
                <span class="text-sm">Total Pengadu</span>
            </div>
            <div class="bg-white py-3 px-8 rounded-lg">
                <h3 class="text-4xl font-bold">560</h3>
                <span class="text-sm">Total Kasus</span>
            </div>
            <div class="bg-white py-3 px-8 rounded-lg">
                <h3 class="text-4xl font-bold">210</h3>
                <span class="text-sm">Kasus Ditangani</span>
            </div>
            <div class="bg-white py-3 px-8 rounded-lg">
                <h3 class="text-4xl font-bold">106</h3>
                <span class="text-sm">Kasus Baru (1 Minggu Terakhir)</span>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        const labels = ["Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agu","Sep","Okt"];
        const dataKasus = [100,120,150,180,210,230,260,280,300,330];

        new Chart("myChart", {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    label: "Kasus Masuk",
                    data: dataKasus,
                    borderColor: "oklch(70.4% 0.191 22.216)",
                    borderWidth: 3,
                    pointBackgroundColor: "oklch(70.4% 0.191 22.216)",
                    pointRadius: 5,
                    fill: false,
                    tension: 0.3 // garis lebih smooth
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    labels: {
                        fontColor: "#333",
                        fontSize: 12
                    }
                },
                scales: {
                    yAxes: [{
                        ticks: { beginAtZero: true }
                    }]
                }
            }
        });
    </script>
</x-guru-layout>