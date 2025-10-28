<x-guru-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl">
                Pengaduan
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

    <div class="min-h-screen bg--600 text-gray-100 p-6">
        <div class="max-w-6xl mx-auto bg-gradient-to-r from-blue-700 via-blue-600 to-white rounded-3xl shadow-xl p-6">
            <h1 class="text-3xl font-bold text-center mb-8 text-white">
                Laporan Pengaduan Siswa
            </h1>

            <div class="overflow-x-auto rounded-lg border border-gray-700 shadow">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-700 text-gray-300 uppercase text-xs font-semibold">
                        <tr>
                            <th class="px-6 py-3 text-left">No</th>
                            <th class="px-6 py-3 text-left">Nama Siswa</th>
                            <th class="px-6 py-3 text-left">Kelas</th>
                            <th class="px-6 py-3 text-left">Jenis Pengaduan</th>
                            <th class="px-6 py-3 text-left">Deskripsi</th>
                            <th class="px-6 py-3 text-left">Tanggal</th>
                            <th class="px-6 py-3 text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        <tr class="hover:bg-gray-750 transition">
                            <td class="px-6 py-3">1</td>
                            <td class="px-6 py-3 font-semibold text-gray-200">Bambang</td>
                            <td class="px-6 py-3">Kelas King</td>
                            <td class="px-6 py-3">Non-fiksi</td>
                            <td class="px-6 py-3 text-gray-300">Makan Bang</td>
                            <td class="px-6 py-3">17 Agustus 1945</td>
                            <td class="px-6 py-3 text-center">
                                <span class="bg-yellow-500 text-black px-3 py-1 rounded-full text-xs">Diproses</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </x-gu-layout>