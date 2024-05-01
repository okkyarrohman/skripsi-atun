<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
<<<<<<< Updated upstream
        <div class="bg-gray-100 flex justify-center items-center h-screen">
            <!-- Left: Image -->
            <div class="w-1/2 h-screen hidden lg:block">
                <img src="{{ URL('asset/image/login.png')}}" alt="Placeholder Image" class="w-full h-full">
            </div>

            <div class="lg:p-36 md:p-26 sm:20 w-full h-full lg:w-1/2 ">
                <div class="flex-col justify-start items-start gap-2.5 flex">
                    <div class="text-zinc-700 text-[32px] font-bold font-['Poppins'] leading-[38.40px]">Login</div>
                </div>
                <div class="items-center pt-28">
                    {{ $slot }}
                </div>
=======
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Image Section -->
            <div class="md:hidden">
                <!-- Replace the placeholder URL with your actual image URL -->
                <img src="{{ asset('assets/Frame 68.png') }}" alt="Image" class="object-cover w-full h-full" />
            </div>
    
            <!-- Content Section -->
            <div class="col-span-2 md:col-span-1 p-8">
                {{ $slot }}
            </div>
    
            <!-- Image Section (Visible on Desktop) -->
            <div class="hidden md:block col-span-1 bg-gray-200">
                <!-- Replace the placeholder URL with your actual image URL -->
                <img src="{{ asset('assets/Frame 68.png') }}" alt="Image" class="object-cover w-full h-full" />
>>>>>>> Stashed changes
            </div>
        </div>
    </body>
</html>
