<div class="bg-sky-600 fixed top-0 left-0 h-full w-[260px] shadow-lg flex flex-col">

    <div class="flex items-center gap-3 text-white font-bold text-lg p-5">
        <i class="ri-contacts-line text-3xl"></i>
        Pengaduan Siswa
    </div>

    <nav class="flex-1 mt-4">
        <a href="{{ route('guru.index') }}"
           class="flex items-center gap-3 p-4 mx-3 rounded-lg
           hover:bg-sky-300 hover:text-black transition
           {{ request()->routeIs('guru.index') ? 'bg-sky-500 text-black' : '' }}">
            <i class="ri-bar-chart-fill text-2xl"></i>
            Dashboard
        </a>

        <a href="#"
           class="flex items-center gap-3 p-4 mx-3 mt-2 rounded-lg text-white
           hover:bg-sky-300 hover:text-black transition">
            <i class="ri-file-list-3-line text-2xl"></i>
            Pengaduan
        </a>
    </nav>

    <form method="POST" action="{{ route('logout') }}" class="p-5">
        @csrf
        <button
            class="flex items-center gap-2 w-full text-stone-900 font-semibold bg-white rounded-lg px-4 py-3
            hover:bg-red-500 hover:text-white transition">
            <i class="ri-logout-box-r-line text-2xl"></i> Logout
        </button>
    </form>
</div>
