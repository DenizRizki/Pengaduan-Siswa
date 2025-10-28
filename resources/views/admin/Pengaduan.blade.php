<x-app-layout>
    <div class="min-h-screen bg--600 text-gray-100 p-6">
<div class="max-w-6xl mx-auto bg-gradient-to-r from-blue-700 via-blue-600 to-white rounded-3xl shadow-xl p-6">
            <h1 class="text-3xl font-bold text-center mb-8 text-white">
                Laporan Pengaduan Siswa
            </h1>

            <div class="overflow-x-auto rounded-lg border border-gray-700 shadow">
                <table class="min-w-full text-sm">
                    <thead class="bg-gray-700 text-gray-300 uppercase text-xs font-semibold">
                        <tr>
                            <th class="px-6 py-3 text-left">#</th>
                            <th class="px-6 py-3 text-left">Nama Siswa</th>
                            <th class="px-6 py-3 text-left">Kelas</th>
                            <th class="px-6 py-3 text-left">Jenis Pengaduan</th>
                            <th class="px-6 py-3 text-left">Deskripsi</th>
                            <th class="px-6 py-3 text-left">Tanggal</th>
                            <th class="px-6 py-3 text-center">Status</th>
                            <th class="px-6 py-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                        @foreach ($pengaduans as $index => $p)
                            <tr class="hover:bg-gray-750 transition">
                                <td class="px-6 py-3">{{ $index + 1 }}</td>
                                <td class="px-6 py-3 font-semibold text-gray-200">{{ $p->nama }}</td>
                                <td class="px-6 py-3">{{ $p->kelas }}</td>
                                <td class="px-6 py-3">{{ $p->kategori }}</td>
                                <td class="px-6 py-3 text-gray-300">{{ $p->deskripsi }}</td>
                                <td class="px-6 py-3">{{ $p->created_at->format('d M Y') }}</td>
                                <td class="px-6 py-3 text-center">
                                    @if ($p->status == 'diproses')
                                        <span class="bg-yellow-500 text-black px-3 py-1 rounded-full text-xs">Diproses</span>
                                    @elseif ($p->status == 'selesai')
                                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-xs">Selesai</span>
                                    @else
                                        <span class="bg-red-600 text-white px-3 py-1 rounded-full text-xs">Menunggu</span>
                                    @endif
                                </td>
                                 <td class="px-6 py-3 text-center">
                                    <a href='/detail'
                                         class="bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold px-4 py-1.5 rounded-lg shadow transition">
                                            Detail
                                    </a>
                                 </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if(count($pengaduans) == 0)
                <p class="text-center text-gray-400 mt-6">Belum ada pengaduan yang masuk 💤</p>
            @endif
        </div>
    </div>
</x-app-layout>
