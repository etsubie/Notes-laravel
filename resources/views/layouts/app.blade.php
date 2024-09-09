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
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-blue-300">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="p-2 px-4">
                @if (session('message'))
                <div id="flash-message" class="bg-green-500 text-white p-2">
                    {{ session('message') }}
                </div>
              @endif
              
              <script>
                // Set a timeout to hide the message after 5 seconds (5000 milliseconds)
                setTimeout(function() {
                    var messageElement = document.getElementById('flash-message');
                    if (messageElement) {
                        messageElement.style.display = 'none'; // Hides the message
                    }
                }, 5000); // 5000 milliseconds = 5 seconds
              </script>
              
                  {{ $slot }}
            </main>
        </div>
    </body>
</html>
