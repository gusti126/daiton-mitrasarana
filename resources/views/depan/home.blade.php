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
        {{-- header --}}
        <div class="bg-imgHead bg-cover bg-opacity-30 bg-black bg-blend-darken contrast-125 min-h-highHeader px-20">
            <div class="px-8 bg-white py-2 flex justify-between">
                <div class="">
                    <div>
                        <img src="{{ asset('gambar/logo.svg') }}" alt="" class="w-12">
                    </div>

                </div>
                <div class="flex my-auto">
                    <div>
                        <a href="" class="bg-blue-600 text-white px-4 py-1 rounded my-auto">Home</a>
                    </div>
                    <a href="" class="ml-14 hover:text-blue-600 my-auto">About</a>
                    <a href="" class="ml-14 hover:text-blue-600 my-auto">Artikel</a>
                </div>
            </div>
            <div>
                <div class="text-white font-bold text-5xl text-center mt-12">DAITON <span
                        class="text-blue-500">MITRA</span> SARANA</div>
                <div class="mt-12 text-white text-center font-medium text-3xl">
                    Mitra sarana <span class="text-blue-500 font-semibold">terbaik di Indonesia</span> <br>
                    berdiri sejak 1994. 200+ mitra
                </div>
                <div class="text-center mt-6">
                    <a href="" class="bg-blue-500 text-white mx-auto px-4 py-2 rounded hover:bg-purple-500">Find Now</a>
                </div>
            </div>
        </div>
        {{-- endheader --}}

        {{-- statistik --}}
        <div class="-mt-16 z-10 container absolute">
            <div class=" grid grid-cols-1 gap-2 place-items-center">
                <div>
                    <div class="bg-white p-6 rounded-lg mx-auto shadow flex">
                        <div class="flex">
                            <div class="mx-auto">
                                <div><img src="{{ asset('gambar/handshake 1.svg') }}" alt="" class="h-16 w-auto">
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="font-bold  text-xl">200+ Mitra</div>
                                <div class="text-gray-600 text-xs">
                                    Bermitra lebih dari 200+ <br>
                                    di seluruh Indonesia
                                </div>
                            </div>
                        </div>
                        <div class="flex ml-6">
                            <div class="mx-auto">
                                <div><img src="{{ asset('gambar/box 1.svg') }}" alt="" class="h-16 w-auto">
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="font-bold  text-xl">100+ Layanan</div>
                                <div class="text-gray-600 text-xs">
                                    Melayani dengan sepenuh hati <br>
                                    di seluruh Indonesia
                                </div>
                            </div>
                        </div>
                        <div class="flex ml-6">
                            <div class="mx-auto">
                                <div><img src="{{ asset('gambar/document 1.svg') }}" alt="" class="h-16 w-auto">
                                </div>
                            </div>
                            <div class="ml-4">
                                <div class="font-bold  text-xl">90+ Artikel</div>
                                <div class="text-gray-600 text-xs">
                                    Artikel seputar produk <br>
                                    untuk info para mitra
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- endstatistik --}}
        {{-- artikel --}}
        <div class="px-20 mt-20">
            <div class="grid grid-flow-row grid-cols-12 gap-4">
                <div class="col-span-3">
                    <a href="">
                        <div class="h-full relative">
                            <img src="{{ asset('gambar/teamcoaching.jpg') }}" alt=""
                                class="rounded-lg h-full object-cover">
                            <div
                                class="absolute rounded-lg bottom-0 px-2 pb-4 pt-8 font-semibold bg-gradient-to-t from-black to-transparent bg-bottom bg-opacity-50 text-white">
                                <div>Executive
                                    Coaching:
                                    Transforming
                                    People &
                                    Business</div>
                                <div class="font-medium text-gray-300 text-sm">Read More ...</div>
                            </div>
                            <div
                                class="absolute bg-blue-600 text-white px-2 py-1 top-0 right-0 rounded-tr-lg rounded-bl-lg">
                                artikel populer
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-span-9">
                    <div class="grid grid-flow-row grid-cols-12 gap-4">
                        <div class="col-span-6 ">
                            <a href="">
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/716276/pexels-photo-716276.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                        alt="" class="rounded-lg w-full h-44 object-cover">
                                    <div
                                        class="absolute bottom-0 px-2 pb-4 pt-8 font-semibold bg-gradient-to-t from-black to-transparent bg-bottom bg-opacity-50 text-white w-full rounded-lg">
                                        <div>Executive
                                            Coaching:
                                            Transforming
                                            People &
                                            Business</div>
                                        <div class="font-medium text-gray-300 text-sm">Read More ...</div>
                                    </div>
                                    <div
                                        class="absolute bg-blue-600 text-white px-2 py-1 top-0 right-0 rounded-tr-lg rounded-bl-lg">
                                        artikel populer
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-6 ">
                            <a href="">
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/6325969/pexels-photo-6325969.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                        alt="" class="rounded-lg w-full h-44 object-cover">
                                    <div
                                        class="absolute bottom-0 px-2 pb-4 pt-8 font-semibold bg-gradient-to-t from-black to-transparent bg-bottom bg-opacity-50 text-white w-full rounded-lg">
                                        <div>Executive
                                            Coaching:
                                            Transforming
                                            People &
                                            Business</div>
                                        <div class="font-medium text-gray-300 text-sm">Read More ...</div>
                                    </div>
                                    <div
                                        class="absolute bg-blue-600 text-white px-2 py-1 top-0 right-0 rounded-tr-lg rounded-bl-lg">
                                        artikel populer
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-6 ">
                            <a href="">
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/7889239/pexels-photo-7889239.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                        alt="" class="rounded-lg w-full h-44 object-cover">
                                    <div
                                        class="absolute bottom-0 px-2 pb-4 pt-8 font-semibold bg-gradient-to-t from-black to-transparent bg-bottom bg-opacity-50 text-white w-full rounded-lg">
                                        <div>Executive
                                            Coaching:
                                            Transforming
                                            People &
                                            Business</div>
                                        <div class="font-medium text-gray-300 text-sm">Read More ...</div>
                                    </div>
                                    <div
                                        class="absolute bg-blue-600 text-white px-2 py-1 top-0 right-0 rounded-tr-lg rounded-bl-lg">
                                        artikel populer
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-span-6 ">
                            <a href="">
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/7888803/pexels-photo-7888803.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                        alt="" class="rounded-lg w-full h-44 object-cover">
                                    <div
                                        class="absolute bottom-0 px-2 pb-4 pt-8 font-semibold bg-gradient-to-t from-black to-transparent bg-bottom bg-opacity-50 text-white w-full rounded-lg">
                                        <div>Executive
                                            Coaching:
                                            Transforming
                                            People &
                                            Business</div>
                                        <div class="font-medium text-gray-300 text-sm">Read More ...</div>
                                    </div>
                                    <div
                                        class="absolute bg-blue-600 text-white px-2 py-1 top-0 right-0 rounded-tr-lg rounded-bl-lg">
                                        artikel populer
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="font-bold text-gray-700 mt-10 text-lg">CORPORATE TRAINING PROGRAMS</div>
            <div class="grid grid-flow-row grid-cols-12 gap-8 mt-8">
                <div class="col-span-4">
                    <div>
                        <div class="relative text-center">
                            <img src="https://images.pexels.com/photos/4339867/pexels-photo-4339867.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                                alt="" class="rounded-lg h-96 w-full object-cover">
                            <div
                                class="absolute px-4 text-center items-center font-semibold rounded-lg text-white text-lg bottom-0 pt-10 pb-5 w-full  bg-gradient-to-t from-black to-transparent">
                                <div class="mb-3">
                                    Corporate Coaching Services
                                </div>
                                <div>
                                    <a href="" class="bg-blue-600 px-2 py-2 rounded text-sm font-normal mt-2">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div>
                        <div class="relative text-center">
                            <img src="https://images.pexels.com/photos/3184316/pexels-photo-3184316.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                alt="" class="rounded-lg h-96 w-full object-cover">
                            <div
                                class="absolute px-4 text-center items-center font-semibold rounded-lg text-white text-lg bottom-0 pt-10 pb-5 w-full  bg-gradient-to-t from-black to-transparent">
                                <div class="mb-3">
                                    Corporate Coaching Services
                                </div>
                                <div>
                                    <a href="" class="bg-blue-600 px-2 py-2 rounded text-sm font-normal mt-2">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-4">
                    <div>
                        <div class="relative text-center">
                            <img src="https://images.pexels.com/photos/3182773/pexels-photo-3182773.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                                alt="" class="rounded-lg h-96 w-full object-cover">
                            <div
                                class="absolute px-4 text-center items-center font-semibold rounded-lg text-white text-lg bottom-0 pt-10 pb-5 w-full  bg-gradient-to-t from-black to-transparent">
                                <div class="mb-3">
                                    Corporate Coaching Services
                                </div>
                                <div>
                                    <a href="" class="bg-blue-600 px-2 py-2 rounded text-sm font-normal mt-2">Lihat
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- endartikel --}}
        <div class="mt-20"></div>
    </div>

    @livewireScripts
</body>

</html>
