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
<<<<<<< Updated upstream
=======

        <style>
            /* Custom Tailwind CSS styles */
            .bg-custom-orange {
                background-color: #FB8A3C;
                /* Adjust this to your desired shade of orange */
            }
    
            .text-custom-orange {
                color: #FB8A3C;
                /* Adjust this to your desired shade of orange */
            }
        </style>
>>>>>>> Stashed changes
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

<<<<<<< Updated upstream
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

=======
            <!--sidebar-->
>>>>>>> Stashed changes
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
<<<<<<< Updated upstream
=======

        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

>>>>>>> Stashed changes
    </body>
</html>
