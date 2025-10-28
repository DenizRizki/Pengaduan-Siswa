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
    class="bg-fixed bg-gradient-to-tr from-sky-100 via-white to-orange-50 text-blue-800 font-[Poppins] w-full min-h-screen flex flex-col items-center gap-5">
    <div class="bg-white w-full max-w-7xl flex flex-col gap-10 min-h-screen border-x border-zinc-300">
        {{-- hero --}}
        <div
            class="w-full min-h-[70vh] px-5 py-5 bg-gradient-to-tl from-blue-100 via-zinc-50 to-100 flex flex-col gap-5 justify-between border border-zinc-300 rounded-b-3xl">
            <h1
                class="bg-gradient-to-tr from-blue-900 via-blue-800 to-blue-600 bg-clip-text text-transparent max-w-4xl text-6xl md:text-7xl xl:text-8xl font-semibold">
                Pengaduan Siswa SMK Informatika Pesat
                IT XPRO</h1>
            <div class="w-full flex flex-col md:flex-row gap-5 justify-between md:items-end">
                <p class="max-w-sm text-lg md:text-2xl font-light leading-tight">Tempat aman bagi siswa untuk
                    menyampaikan keluhan dan masukan.
                </p>

                <div class="flex gap-2 items-center">
                    <a href="#"
                        class="bg-transparent px-8 py-2 text-blue-800 border border-blue-800 rounded-full transition">
                        Adukan masalahmu!
                    </a>

                    <a href="#FAQ" class="bg-blue-800 px-8 py-2 text-white border border-blue-800 rounded-full">
                        FAQ
                    </a>
                </div>
            </div>
        </div>

        {{-- main content --}}
        <main class="space-y-10 px-5 py-5">

            <section class="flex flex-col gap-5 items-center">
                <div class="space-y-2 text-center">
                    <h2 class="text-4xl lg:text-6xl 2xl:text-6xl font-semibold uppercase">Ada masalah di sekolah?</h2>
                    <p class="font-base leading-none">Keluhkan atau adukan masalahmu dengan mengisi form dibawah ini!
                    </p>
                </div>

                <x-form></x-form>
            </section>


        </main>

        <!-- FAQ -->
        <section id="FAQ"
            class="bg-gradient-to-tl from-blue-100 via-zinc-50 to-blue-100 p-5 py-14 flex gap-5 items-start border-t border-zinc-300">
            <div class="w-1/3 pt-8">
                <h2 class="text-5xl font-semibold uppercase">
                    Punya pertanyaan tentang layanan kami?
                </h2>
            </div>

            {{-- accordion FAQ --}}
            <div
                class="w-2/3 h-fit bg-white px-5 flex flex-col divide-y divide-zinc-300 border border-zinc-300 rounded-md">
                <x-accordion content="1" title="1. Apa itu layanan pengaduan siswa?">
                    Layanan pengaduan siswa adalah sarana bagi seluruh siswa untuk menyampaikan keluhan, masukan, atau
                    laporan terkait lingkungan sekolah, baik mengenai fasilitas, perilaku, maupun sistem belajar, agar
                    dapat ditindaklanjuti oleh pihak sekolah
                </x-accordion>

                <x-accordion content="2" title="2. Siapa saja yang boleh menggunakan layanan ini?">
                    Semua siswa aktif SMK Informatika Pesat dapat menggunakan layanan pengaduan ini, tanpa terkecuali.
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

    </div>


</body>

</html>
