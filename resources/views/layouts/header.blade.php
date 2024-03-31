<header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
    <div class="flex justify-start"> <h1 class="font-semibold text-2xl">Dashboard</h1> </div>
    <div class="w-1/2"></div>
    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
        <div>
            <h1 class="px-2">Albert Suprapto</h1>
            <h2 class="px-2 justify-end flex">{{ Auth::user()->name }}  </h2>
        </div>
        <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
            <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
        </button>       
    </div>
</header>