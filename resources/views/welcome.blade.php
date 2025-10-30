<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="bg-fixed bg-gradient-to-tr from-sky-100 via-white to-sky-50 text-blue-800 font-[Poppins] w-full min-h-screen flex flex-col items-center gap-5">
    <div class="bg-white w-full max-w-7xl flex flex-col gap-10 min-h-screen border-x border-zinc-300">
        {{-- hero --}}
        <div
            class="w-full min-h-[80vh] px-5 py-5 bg-gradient-to-tl from-blue-100 via-zinc-50 to-sky-50 flex flex-col gap-5 justify-between border border-zinc-300 rounded-b-[34px]">
            <h1
                class="bg-gradient-to-tr from-blue-900 via-blue-800 to-blue-600 bg-clip-text text-transparent max-w-4xl text-6xl md:text-7xl xl:text-8xl font-semibold">
                Pengaduan Siswa SMK Informatika Pesat
                IT XPRO</h1>
            <div class="w-full flex flex-col md:flex-row gap-5 justify-between md:items-end">
                <p class="max-w-sm text-lg md:text-2xl font-light leading-tight">Tempat aman bagi siswa untuk
                    menyampaikan keluhan dan masukan.
                </p>

                <div class="flex gap-2 items-center">
                    <a href="#form"
                        class="bg-transparent hover:bg-blue-800 px-8 py-2 text-blue-800 hover:text-white border border-blue-800 rounded-full transition duration-300">
                        Adukan masalahmu!
                    </a>

                    <a href="#FAQ"
                        class="bg-blue-800 hover:bg-blue-600 px-8 py-2 text-white border border-blue-800 hover:border-blue-600 rounded-full transition duration-300">
                        FAQ
                    </a>
                </div>
            </div>
        </div>

        {{-- main content --}}
        <main class="space-y-14 px-10 py-5">

            <section class="flex flex-col gap-2 items-center">
                <div class="space-y-2 text-center">
                    <h2 class="text-4xl lg:text-5xl 2xl:text-6xl font-semibold uppercase">Ada masalah di sekolah?</h2>
                    <p class="font-base leading-none">Keluhkan atau adukan masalahmu dengan mengisi form dibawah ini!
                    </p>
                </div>

                <div class="flex flex-col-reverse md:flex-row gap-5 items-center">
                    <div class="space-y-14 w-full md:w-1/3">
                        <div class="space-y-5">
                            <h2 class="max-w-xl text-6xl font-semibold uppercase">Suaramu Penting!</h2>
                            <p class="text-sm text-blue-900 leading-relaxed">
                                Kami percaya setiap siswa berhak merasa aman dan nyaman di lingkungan sekolah.
                                Melalui formulir ini, kamu bisa melaporkan kejadian yang tidak menyenangkan, memberi
                                masukan, atau menyampaikan saran untuk membuat sekolah kita jadi tempat yang lebih baik.

                                Jangan takut untuk berbicara. Laporanmu akan kami jaga kerahasiaannya.
                            </p>
                        </div>

                        <div class="flex">
                            <img src="https://images.unsplash.com/photo-1664786496152-c09bb24791b5?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
                                alt="gambar"
                                class="relative bg-zinc-100 w-1/3 aspect-square object-cover border-4 border-white rounded-xl rotate-3">

                            <img src="https://plus.unsplash.com/premium_photo-1661380704283-38adf12c3f5e?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
                                alt="gambar"
                                class="relative bg-zinc-100 w-1/3 aspect-square object-cover border-4 border-white rounded-xl -left-2 -rotate-1">

                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1532"
                                alt="gambar"
                                class="relative bg-zinc-100 w-1/3 aspect-square object-cover border-4 border-white rounded-xl -left-4 rotate-3">
                        </div>
                    </div>

                    <div class="w-full md:w-2/3 scroll-mt-5" id="form">
                        <x-form />
                    </div>
                </div>
            </section>

            {{-- tentang kami --}}
            <section class="flex flex-col md:flex-row gap-5 items-center justify-between">
                <div class="space-y-5 max-w-2xl">
                    <h2 class="text-6xl font-semibold uppercase">Tentang layanan pengaduan
                        siswa
                    </h2>
                    <p class="text-sm text-blue-900 leading-relaxed">
                        Layanan ini disediakan oleh SMK Informatika Pesat IT XPRO sebagai wadah bagi siswa untuk
                        menyampaikan laporan terkait kejadian, pelanggaran, maupun masalah yang terjadi di lingkungan
                        sekolah.

                        Setiap laporan akan diverifikasi dan ditindaklanjuti secara profesional oleh pihak sekolah. Kami
                        menjamin kerahasiaan data pelapor sesuai dengan kebijakan sekolah.
                    </p>
                </div>
                <img src="https://images.unsplash.com/photo-1570616969692-54d6ba3d0397?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1122"
                    alt="gambar"
                    class="bg-zinc-100 w-full md:w-1/3 aspect-square object-cover border border-zinc-300 rounded-xl md:rotate-3">

            </section>


        </main>

        <div class="flex flex-col">
            <!-- FAQ -->
            <section id="FAQ"
                class="bg-gradient-to-tl from-blue-100 via-zinc-50 to-blue-100 p-10 py-14 flex flex-col md:flex-row gap-5 items-start border-t border-zinc-300">
                <div class="w-full md:w-1/3 pt-8">
                    <h2 class="text-5xl font-semibold uppercase">
                        Punya pertanyaan tentang layanan kami?
                    </h2>
                </div>

                {{-- accordion FAQ --}}
                <div
                    class="w-full md:w-2/3 h-fit bg-white px-5 flex flex-col divide-y divide-zinc-300 border border-zinc-300 rounded-md">
                    <x-accordion content="1" title="1. Apa itu layanan pengaduan siswa?">
                        Layanan pengaduan siswa adalah sarana bagi seluruh siswa untuk menyampaikan keluhan, masukan,
                        atau
                        laporan terkait lingkungan sekolah, baik mengenai fasilitas, perilaku, maupun sistem belajar,
                        agar
                        dapat ditindaklanjuti oleh pihak sekolah
                    </x-accordion>

                    <x-accordion content="2" title="2. Siapa saja yang boleh menggunakan layanan ini?">
                        Semua siswa aktif SMK Informatika Pesat dapat menggunakan layanan pengaduan ini, tanpa
                        terkecuali.
                        Setiap laporan akan
                        dijaga kerahasiaannya untuk melindungi identitas pelapor.
                    </x-accordion>

                    <x-accordion content="3" title="3. Apakah pengaduan saya akan ditanggapi oleh pihak sekolah?">
                        Ya, setiap laporan yang masuk akan diverifikasi oleh tim kesiswaan atau guru BK, lalu diteruskan
                        kepada pihak yang berwenang untuk ditindaklanjuti sesuai jenis laporannya.
                    </x-accordion>

                    <x-accordion content="4" title="4. Apa saja jenis pengaduan yang bisa dilaporkan?">
                        Siswa dapat melaporkan berbagai hal seperti:

                        <ul>
                            <li>1. Tindakan bullying atau kekerasan di lingkungan sekolah</li>

                            <li>2. Fasilitas sekolah yang rusak atau kurang layak</li>

                            <li>3. Ketidakadilan dalam perlakuan akademik atau non-akademik</li>

                            <li>4. Keluhan terkait kegiatan sekolah lainnya</li>
                        </ul>
                    </x-accordion>

                </div>
            </section>

            <footer class="border-t border-gray-300 py-10">
                <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row justify-between gap-10">
                    <!-- Kolom 1: Identitas Sekolah -->
                    <div class="space-y-2">
                        <h2 class="text-lg font-semibold">SMK Informatika Pesat IT XPRO</h2>
                        <p class="text-sm leading-relaxed">
                            Jl. Poras No.07, RT.01/RW.04, Loji, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16117 <br>
                            Telepon:  0877-1117-7442
                        </p>
                    </div>

                    <!-- Kolom 2: Navigasi Cepat -->
                    <div>
                        <h2 class="text-lg font-semibold mb-3">Navigasi Cepat</h2>
                        <ul class="space-y-1 text-sm">
                            <li><a href="#" class="hover:underline">Beranda</a></li>
                            <li><a href="#form" class="hover:underline">Form Pengaduan</a></li>
                            <li><a href="#faq" class="hover:underline">FAQ</a></li>
                            <li><a href="#about" class="hover:underline">Tentang Layanan</a></li>
                            <li><a href="#" class="hover:underline">Kebijakan Privasi</a></li>
                        </ul>
                    </div>

                    <!-- Kolom 3: Catatan Kerahasiaan -->
                    <div class="max-w-sm">
                        <h2 class="text-lg font-semibold mb-3">Catatan Kerahasiaan</h2>
                        <p class="text-sm leading-relaxed">
                            Semua laporan yang dikirim akan dijaga kerahasiaannya dan hanya digunakan untuk
                            keperluan penanganan kasus di lingkungan sekolah.
                        </p>
                    </div>
                </div>

                <!-- Garis bawah kecil + copyright -->
                <div
                    class="max-w-6xl mx-auto px-6 mt-8 pt-6 border-t border-gray-200 text-sm flex flex-col md:flex-row justify-between items-center gap-2">
                    <p>© 2025 Sistem Pengaduan Siswa. Dibuat oleh Tim Pengembang RPL.</p>
                    <p class="text-xs">Dibuat dengan Laravel dan ❤️</p>
                </div>
            </footer>
        </div>


    </div>


</body>

</html>
