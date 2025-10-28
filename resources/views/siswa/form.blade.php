<x-app-layout>
    <section class="min-h-screen bg-gradient-to-br from-blue-100 via-blue-200 to-blue-300 flex items-center justify-center py-12 px-6">
        <div class="bg-white shadow-2xl rounded-2xl w-full max-w-3xl p-10 border border-blue-200">
            <h1 class="text-4xl font-bold text-center text-blue-700 mb-3">Form Laporan Kejadian Siswa</h1>
            <p class="text-center text-blue-600 mb-10">
                Silakan isi form di bawah ini dengan lengkap agar laporan dapat segera ditindaklanjuti oleh pihak sekolah.
            </p>

            <form method="POST" action="{{ route('form.store') }}" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <!-- Pesan -->
                @if(session('success'))
                    <div class="p-4 bg-blue-100 text-blue-700 rounded-xl border border-blue-300">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="p-4 bg-red-100 text-red-700 rounded-xl border border-red-300">
                        <ul class="list-disc pl-6">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Nama Siswa -->
                <div>
                    <label class="block text-sm font-semibold text-blue-800 mb-2">Nama Siswa</label>
                    <input type="text" name="nama_siswa" value="{{ old('nama_siswa') }}" placeholder="Masukkan nama lengkap siswa"
                        class="w-full px-4 py-3 border border-blue-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-blue-50">
                </div>

                <!-- Jenis Kejadian -->
                <div>
                    <label class="block text-sm font-semibold text-blue-800 mb-2">Jenis Kejadian</label>
                    <select name="kejadian"
                        class="w-full px-4 py-3 border border-blue-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-blue-50">
                        <option value="">-- Pilih Jenis Kejadian --</option>
                        <option value="Pembulian">Pembulian</option>
                        <option value="Kekerasan Verbal">Kekerasan Verbal</option>
                        <option value="Kekerasan Fisik">Kekerasan Fisik</option>
                        <option value="Pelanggaran Tata Tertib">Pelanggaran Tata Tertib</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>

                <!-- Deskripsi Kejadian -->
                <div>
                    <label class="block text-sm font-semibold text-blue-800 mb-2">Deskripsi Kejadian</label>
                    <textarea name="deskripsi" rows="5" placeholder="Tuliskan kronologi atau detail kejadian secara jelas..."
                        class="w-full px-4 py-3 border border-blue-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-blue-50 resize-none">{{ old('deskripsi') }}</textarea>
                </div>

                <!-- Tempat Kejadian -->
                <div>
                    <label class="block text-sm font-semibold text-blue-800 mb-2">Tempat Kejadian</label>
                    <input type="text" name="tempat" value="{{ old('tempat') }}" placeholder="Contoh: Lapangan sekolah, ruang kelas 9A, dll"
                        class="w-full px-4 py-3 border border-blue-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 bg-blue-50">
                </div>

                <!-- Upload Gambar Bukti -->
                <div>
                    <label class="block text-sm font-semibold text-blue-800 mb-2">Bukti Gambar</label>
                    <input type="file" name="gambar" accept="image/*"
                        class="w-full px-4 py-2 border border-blue-300 rounded-xl bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <p class="text-xs text-blue-600 mt-1">Format: JPG atau PNG (maks. 5MB)</p>
                </div>

                <!-- Tombol -->
                <div class="flex justify-end pt-6">
                    <button type="reset"
                        class="px-6 py-3 bg-blue-100 text-blue-700 rounded-xl font-semibold hover:bg-blue-200 transition">Reset</button>
                    <button type="submit"
                        class="ml-4 px-6 py-3 bg-blue-600 text-white rounded-xl font-semibold hover:bg-blue-700 shadow-md transition">Kirim Laporan</button>
                </div>
            </form>

            <p class="text-center text-blue-500 text-sm mt-10">
                Data laporan akan dijaga kerahasiaannya sesuai kebijakan sekolah.
            </p>
        </div>
    </section>
</x-app-layout>
