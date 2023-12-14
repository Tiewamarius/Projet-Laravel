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
        
	<link rel="stylesheet" href="css/welcome.css" media="screen" >
    </head>
    <body id="bdy">
        <div>
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script>
        function changeBackground(hour) {
  if (hour >= 6 && hour <= 12) {
    document.getElementById("bdy").style.backgroundImage = "url(/images/register.jpg)";
  } else {
    document.getElementById("bdy").style.backgroundImage = "url(/images/afternoon.jpg)";
  }
}

setInterval(changeBackground, 1000);
    </script>
    </body>
</html>
