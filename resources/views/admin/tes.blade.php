<x-app-layout>
<div class="min-h-screen bg-gradient-to-br from-sky-50 to-blue-100 py-10 px-6">
    <div class="max-w-3xl mx-auto bg-white/90 backdrop-blur-sm border border-blue-200 rounded-2xl shadow-xl p-8">
        {{-- Header --}}
        <div class="flex items-center justify-between border-b border-blue-100 pb-4 mb-6">
            <h1 class="text-2xl font-bold text-sky-700 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M12 6v6l4 2m6 8H2a1 1 0 01-1-1V5a1 1 0 011-1h9l2 2h9a1 1 0 011 1v14a1 1 0 01-1 1z" />
                </svg>
                Detail Laporan Pengaduan
            </h1>
            <a href="#" class="text-sm text-blue-600 hover:text-blue-800 font-medium transition">
                ← Kembali
            </a>
        </div>

        {{-- Info Pelapor --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
            <div class="bg-sky-50 p-3 rounded-lg border border-sky-100">
                <p class="text-sky-600 text-sm">Nama Pelapor</p>
                <p class="font-semibold text-gray-800">Fathan Ghani</p>
            </div>
            <div class="bg-sky-50 p-3 rounded-lg border border-sky-100">
                <p class="text-sky-600 text-sm">Tanggal Laporan</p>
                <p class="font-semibold text-gray-800">27 Oktober 2025</p>
            </div>
            <div class="bg-sky-50 p-3 rounded-lg border border-sky-100">
                <p class="text-sky-600 text-sm">Kategori Pengaduan</p>
                <p class="font-semibold text-gray-800">Bullying / Rasis</p>
            </div>
            <div class="bg-sky-50 p-3 rounded-lg border border-sky-100">
                <p class="text-sky-600 text-sm">Status</p>
                <span class="inline-flex px-3 py-1 text-sm rounded-full bg-yellow-100 text-yellow-700 font-medium">
                    Diproses
                </span>
            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="mb-6">
            <p class="text-sky-600 text-sm mb-1 font-medium">Deskripsi Pengaduan</p>
            <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 text-gray-700 leading-relaxed">
                Saya mengalami perlakuan tidak menyenangkan berupa ejekan rasis dari teman sekelas saat kegiatan belajar berlangsung.
            </div>
        </div>

        {{-- Tanggapan --}}
        <div>
            <p class="text-sky-600 text-sm mb-1 font-medium">Tanggapan Admin</p>
            <div class="bg-gray-100 border border-gray-200 p-4 rounded-lg text-gray-500 italic">
                Belum ada tanggapan dari admin.
            </div>
        </div>
    </div>

    {{-- Footer Nuansa Sekolah --}}
    <div class="text-center mt-10 text-sm text-sky-700 font-medium opacity-80">
        Pelayanan Pengaduan Sekolah • SMK Informatika Pesat 🌤️
    </div>
</div>
</x-app-layout>
