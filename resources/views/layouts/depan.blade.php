<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen">

        @yield('content')


    </div>
    <div class="mt-20 px-20 py-8 border-t border md:block hidden">
        <div class=" md:flex justify-between">
            <div class="">
                <div class="font-bold text-2xl">DAITON <span class="text-blue-600 ">MITRA</span> SARANA</div>
                <div class="text-gray-600">Mitra terbaik di Indonesia berdiri <br>
                    sejak 1994. Lebih dari 200+ mitra</div>
            </div>
            <div class="">
                <div class="font-bold text-lg mb-4 text-blue-600">For Beginners</div>
                <div class="text-gray-600">Our Careers</div>
                <div class="text-gray-600">Privacy</div>
                <div class="text-gray-600">Terms & Conditions</div>
            </div>
            <div class="">
                <div class="font-bold text-lg mb-4 text-blue-600">Connect Us</div>
                <div class="text-gray-600">support@daitonmitrasarana.co.id</div>
                <div class="text-gray-600">021 - 2208 - 1996</div>
            </div>
            <div class="">
                <div class="font-bold text-lg mb-4 text-blue-600">Oprasional</div>
                <div class="text-gray-600">Senin - Sabtu</div>
                <div class="text-gray-600">08.00 - 17.00 wib</div>
                <div class="text-gray-600">daiton mitra sarana, <br> Kemang, Jakarta</div>
            </div>
        </div>
    </div>
    <div class=" border-t text-center py-4 mt-20 md:mt-0">&copy Daiton Mitra Sarana 2021</div>
    @livewireScripts
</body>

</html>
