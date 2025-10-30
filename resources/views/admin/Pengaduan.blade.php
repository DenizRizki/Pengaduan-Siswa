<x-guru-layout>
    <x-slot name="header">
        <h1 class="text-xl font-bold text-white"> Laporan Pengaduan Siswa</h1>
    </x-slot>

    <div class="bg-gradient-to-br from-sky-500/20 to-sky-700/10 rounded-xl shadow-lg p-6 border border-sky-600/30">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-white">
                <thead class="bg-gradient-to-r from-sky-600 to-sky-700 text-gray-100 uppercase text-xs font-semibold rounded-lg">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">Nama Siswa</th>
                        <th class="px-6 py-3 text-left">Kelas</th>
                        <th class="px-6 py-3 text-left">Jenis Pengaduan</th>
                        <th class="px-6 py-3 text-left">Deskripsi</th>
                        <th class="px-6 py-3 text-left">Tanggal</th>
                        <th class="px-6 py-3 text-center">Status</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-sky-700/40 bg-gray-900/60">
                    @foreach ($pengaduans as $index => $p)
                        <tr class="hover:bg-sky-800/30 transition duration-200">
                            <td class="px-6 py-3 text-gray-300">{{ $index + 1 }}</td>
                            <td class="px-6 py-3 font-semibold">{{ $p->nama }}</td>
                            <td class="px-6 py-3 text-gray-300">{{ $p->kelas }}</td>
                            <td class="px-6 py-3 text-gray-300">{{ $p->kategori }}</td>
                            <td class="px-6 py-3 text-gray-400">{{ $p->deskripsi }}</td>
                            <td class="px-6 py-3 text-gray-300">{{ $p->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-3 text-center">
                                @if ($p->status == 'diproses')
                                    <span class="bg-yellow-400/90 text-black px-3 py-1 rounded-full text-xs font-medium shadow">
                                        Diproses
                                    </span>
                                @elseif ($p->status == 'selesai')
                                    <span class="bg-green-500/90 text-white px-3 py-1 rounded-full text-xs font-medium shadow">
                                        Selesai
                                    </span>
                                @else
                                    <span class="bg-red-500/90 text-white px-3 py-1 rounded-full text-xs font-medium shadow">
                                        Menunggu
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-3 text-center">
                                <a href="{{ route('pengaduan.show', $p->id) }}" 
                                   class="bg-sky-600 hover:bg-sky-700 text-white text-xs font-semibold px-4 py-1.5 rounded-lg shadow transition duration-200">
                                   Detail
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-guru-layout>
