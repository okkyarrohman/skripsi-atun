<header class="w-full items-center bg-white py-2 px-6 hidden sm:flex ml-64 top-0">
    <div class="flex justify-start">
        <h1 class="font-semibold text-2xl">
            @if (Request::is(Auth::user()->roles->pluck('name')->first().'/dashboard*'))
                Dashboard
            @elseif (Request::is(Auth::user()->roles->pluck('name')->first().'/materi*'))
                Materi
            @elseif (Request::is(Auth::user()->roles->pluck('name')->first().'/tugas*'))
                Tugas
            @elseif (Request::is(Auth::user()->roles->pluck('name')->first().'/kelompok*'))
                Kelompok
            @else
                Halaman Lain
            @endif
        </h1>
    </div>
    <div class="w-1/2"></div>
    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end items-center">
        <div>
            <h1 class="px-2">{{ Auth::user()->name }}</h1>
            <h2 class="px-2 justify-end flex capitalize">{{ Auth::user()->roles->pluck('name')->first() }}</h2>
        </div>
        <img src="" alt="" class="size-12 rounded-full bg-green">
    </div>
</header>
