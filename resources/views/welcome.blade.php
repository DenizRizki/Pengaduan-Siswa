<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-50 text-zinc-900 font-[Geist] w-full min-h-screen flex flex-col items-center gap-5">
    <div class="bg-blue-500 w-full max-w-7xl flex flex-col gap-10 min-h-screen border-x border-zinc-300">

        {{-- hero --}}
        <div
            class="text-white w-full min-h-[60vh] px-5 py-5 bg-gradient-to-tr from-zinc-950 via-zinc-950 to-blue-950 flex flex-col gap-5 justify-between rounded-b-3xl">
            <h1 class="max-w-xl text-6xl md:text-7xl xl:text-8xl font-semibold">Pengaduan Siswa XPRO</h1>
            <div class="w-full flex flex-col md:flex-row gap-5 justify-between md:items-end">
                <p class="max-w-sm text-lg md:text-2xl font-light leading-tight">Tempat aman bagi siswa untuk menyampaikan keluhan dan masukan.
                </p>

                <div class="flex gap-2 items-center">
                    <a href="#" class="bg-transparent px-8 py-2 text-white border border-white rounded-full">
                        Adukan masalahmu!
                    </a>

                    <a href="#" class="bg-white px-8 py-2 text-zinc-900 border border-zinc-300 rounded-full">
                        FAQ
                    </a>
                </div>
            </div>
        </div>

        {{-- main content --}}
        <main class="space-y-10 px-5 py-5">

            <section class="flex flex-col gap-10 items-center">
                <div class="space-y-2 text-center">
                    <h2 class="text-4xl lg:text-6xl 2xl:text-6xl font-semibold uppercase">Ada masalah di sekolah?</h2>
                    <p class="font-base leading-none">Keluhkan atau adukan masalahmu dengan mengisi form dibawah ini!
                    </p>
                </div>
            </section>

        </main>

    </div>
</body>

</html>
