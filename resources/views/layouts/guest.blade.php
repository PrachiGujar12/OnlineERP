<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
<link rel="icon" href="{{asset('/asset/images/logo/fav.png')}}" sizes="32x32">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100" style="background-image:url('https://demo.webwideit.solutions/raman-jeweller-erp/public/asset/images/background/back.webp');
																		background-size: cover;								   ">
        
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg" style="background-color:#110404ad">
			<div class="flex flex-col sm:justify-center items-center">
            <a href="/">
                <x-application-logo class="mt-6 w-20 h-20 fill-current text-gray-500 " />
            </a>
        </div>
            {{ $slot }}
        </div>
    </div>
</body>

</html>