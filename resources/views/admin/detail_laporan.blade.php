<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Laporan Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>

    <div class="min-h-screen bg-gradient-to-br from-sky-50 to-blue-100 py-10 px-6">
        <div class="max-w-4xl mx-auto bg-white/90 backdrop-blur-sm border border-blue-200 rounded-2xl shadow-xl p-8">

            @if (session('success'))
                <div class="bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-lg relative mb-6">
                    <span class="font-semibold">Berhasil!</span> {{ session('success') }}
                </div>
            @endif

            <div class="flex items-center justify-between border-b border-blue-100 pb-4 mb-6">
                <h1 class="text-2xl font-bold text-sky-700 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-sky-600" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6l4 2m6 8H2a1 1 0 01-1-1V5a1 1 0 011-1h9l2 2h9a1 1 0 011 1v14a1 1 0 01-1 1z" />
                    </svg>
                    Detail Laporan Pengaduan
                </h1>
                <a href="{{ route('admin.pengaduan') }}"
                    class="text-sm text-blue-600 hover:text-blue-800 font-medium transition">
                    ← Kembali
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <div class="bg-sky-50 p-3 rounded-lg border border-sky-100">
                    <p class="text-sky-600 text-sm">Nama Pelapor</p>
                    <p class="font-semibold text-gray-800">{{ $form->nama_siswa }}</p>
                </div>
                <div class="bg-sky-50 p-3 rounded-lg border border-sky-100">
                    <p class="text-sky-600 text-sm">Tanggal Laporan</p>
                    <p class="font-semibold text-gray-800">{{ $form->created_at->format('d M Y') }}</p>
                </div>
                <div class="bg-sky-50 p-3 rounded-lg border border-sky-100">
                    <p class="text-sky-600 text-sm">Jenis / Kategori</p>
                    <p class="font-semibold text-gray-800">{{ $form->kejadian }}</p>
                </div>

                <div class="bg-sky-50 p-3 rounded-lg border border-sky-100 flex items-center justify-between">
                  <form action="{{ route('admin.updateStatus', $form->id) }}" method="POST" class="flex items-center space-x-2">
    @csrf

    <select name="status"
        class="px-3 py-1.5 text-sm font-semibold rounded-full border border-sky-200 bg-sky-50 text-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-300 cursor-pointer">
        <option value="diproses" {{ $form->status == 'diproses' ? 'selected' : '' }}>Diproses</option>
        <option value="selesai" {{ $form->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
        <option value="diterima" {{ $form->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
    </select>

    <button type="submit"
        class="px-5 py-1.5 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-blue-700 hover:shadow-md transition duration-200 ease-in-out">
        Simpan
    </button>
</form>

                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6 items-start">
                <div>
                    <div class="mb-4">
                        <p class="text-sky-600 text-sm mb-1 font-medium">Tempat Kejadian</p>
                        <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 text-gray-700 leading-relaxed">
                            {{ $form->tempat ?? '-' }}
                        </div>
                    </div>

                    <div>
                        <p class="text-sky-600 text-sm mb-1 font-medium">Deskripsi Pengaduan</p>
                        <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 text-gray-700 leading-relaxed">
                            {{ $form->deskripsi }}
                        </div>
                    </div>
                </div>

                <div>
                    <p class="text-sky-600 text-sm mb-2 font-medium">Bukti Gambar</p>
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-4 flex flex-col items-center">
                        @if ($form->gambar)
                            <img src="{{ asset('storage/' . $form->gambar) }}" alt="Bukti Kejadian"
                                class="rounded-xl shadow-md w-full object-cover border border-gray-200">
                            <p class="text-sm text-gray-500 italic mt-2">Bukti kejadian terlampir.</p>
                        @else
                            <img src="https://via.placeholder.com/800x600?text=Belum+Ada+Gambar" alt="Placeholder"
                                class="rounded-xl shadow-md w-full object-cover border border-gray-200">
                            <p class="text-sm text-gray-500 italic mt-2">Belum ada bukti gambar.</p>
                        @endif
                    </div>
                </div>
            </div>

            <div>
                <p class="text-sky-600 text-sm mb-1 font-medium">Tanggapan Admin</p>
                <form action="{{ route('pengaduan.update', $form->id) }}" method="POST">
                    @csrf
                    @method('PUT') 
                    
                    <textarea name="tanggapan" rows="4" 
                              class="w-full bg-gray-100 border border-gray-300 p-4 rounded-lg focus:ring-blue-500 focus:border-blue-500 text-gray-800"
                              placeholder="Ketik tanggapan atau tindak lanjut di sini...">{{ $form->tanggapan ?? '' }}</textarea>
                    
                    <div class="text-right mt-2">
                        <button type="submit"
                            class="px-5 py-2 bg-sky-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-sky-700 transition duration-200">
                            Simpan Tanggapan
                        </button>
                    </div>
                </form>
            </div>
            
        </div>

        <div class="text-center mt-10 text-sm text-sky-700 font-medium opacity-80">
            Pelayanan Pengaduan Sekolah • SMK Informatika Pesat 🌤️
        </div>
    </div>
</body>
</html>