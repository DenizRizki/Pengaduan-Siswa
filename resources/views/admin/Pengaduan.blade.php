<x-guru-layout>
    <x-slot name="header">
        <h1 class="text-xl font-bold text-white">Laporan Pengaduan Siswa</h1>
    </x-slot>

    <div class="bg-gradient-to-br from-sky-500/20 to-sky-700/10 rounded-xl shadow-lg p-6 border border-sky-600/30">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm text-white">
                <thead class="bg-gradient-to-r from-sky-600 to-sky-700 text-gray-100 uppercase text-xs font-semibold rounded-lg">
                    <tr>
                        <th class="px-6 py-3 text-left">No</th>
                        <th class="px-6 py-3 text-left">Nama Siswa</th>
                        <th class="px-6 py-3 text-left">Kejadian</th>
                        <th class="px-6 py-3 text-left">Deskripsi</th>
                        <th class="px-6 py-3 text-left">Tempat</th>
                        <th class="px-6 py-3 text-left">Tanggal</th>
                        <th class="px-6 py-3 text-center">Lampiran</th>
                        <th class="px-6 py-3 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-sky-700/40 bg-gray-900/60">
                    @foreach ($forms as $f)
                        <tr class="hover:bg-sky-800/30 transition duration-200">
                            <td class="px-6 py-3 text-gray-300">{{ $loop->iteration }}</td>
                            <td class="px-6 py-3 font-semibold">{{ $f->nama_siswa }}</td>
                            <td class="px-6 py-3 text-gray-300">{{ $f->kejadian }}</td>
                            <td class="px-6 py-3 text-gray-400">{{ $f->deskripsi }}</td>
                            <td class="px-6 py-3 text-gray-300">{{ $f->tempat }}</td>
                            <td class="px-6 py-3 text-gray-300">{{ $f->created_at->format('d M Y') }}</td>
                            <td class="px-6 py-3 text-center space-x-2">
                                @if ($f->gambar)
                                    <a href="{{ asset('storage/' . $f->gambar) }}" target="_blank" class="text-sky-400 hover:underline">📷</a>
                                @endif
                                @if ($f->video)
                                    <a href="{{ asset('storage/' . $f->video) }}" target="_blank" class="text-sky-400 hover:underline">🎥</a>
                                @endif
                                @if ($f->audio)
                                    <a href="{{ asset('storage/' . $f->audio) }}" target="_blank" class="text-sky-400 hover:underline">🎧</a>
                                @endif
                            </td>
                            <td class="px-6 py-3 text-center flex justify-center gap-2">
                                <a href="/detail" 
                                   class="bg-yellow-500 hover:bg-yellow-600 text-black text-xs font-semibold px-4 py-1.5 rounded-lg shadow transition">
                                   Edit
                                </a>
                                <form action="{{ route('form.destroy', $f->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-xs font-semibold px-4 py-1.5 rounded-lg shadow transition">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-guru-layout>
