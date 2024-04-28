<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/index.js'])
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
</head>

<body class="bg-zinc-200 font-serif">

    <header class='flex shadow-md lg:px-12 p-4 sm:px-10 bg-neutral-900 font-sans min-h-[70px] tracking-wide fixed z-50 '>
        <div class='flex flex-wrap items-center justify-between gap-4 w-full'>
            <a class="flex items-center h-full" href="javascript:void(0)">
                <svg width="200" height="35.1351718079709" viewBox="0 0 350 43.31258670502137" class="looka-1j8o68f">
                    <defs id="SvgjsDefs1950">
                        <linearGradient id="SvgjsLinearGradient1953">
                            <stop id="SvgjsStop1954" stop-color="#905e26" offset="0"></stop>
                            <stop id="SvgjsStop1955" stop-color="#f5ec9b" offset="0.5"></stop>
                            <stop id="SvgjsStop1956" stop-color="#905e26" offset="1"></stop>
                        </linearGradient>
                    </defs>
                    <g id="SvgjsG1951" featurekey="n48U4P-0"
                        transform="matrix(3.301263779432932,0,0,3.301263779432932,-1.4525577276302304,-23.57101822188915)"
                        fill="url(#SvgjsLinearGradient1953)">
                        <path
                            d="M18.1 7.359999999999999 c8.36 0 8.4 12.64 0.02 12.64 l-17.68 0 l0.02 -0.14 c0.96 0 1.36 -0.02 1.36 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.36 -0.94 l-0.02 -0.14 l9.18 0 l0.88 3 l-0.14 0.04 c-0.88 -2.76 -1.04 -2.8 -2.86 -2.8 l-4.84 0 l0 5.62 l2.94 0 c0.92 0 1.2 -0.2 1.34 -0.9 l0.1 0 l0 2.04 l-0.1 0 c-0.14 -0.68 -0.42 -0.9 -1.34 -0.9 l-2.94 0 l0 5.42 c0 0.74 0.24 0.86 0.88 0.9 l14.58 0 c7.16 0 7.16 -12.2 -0.02 -12.2 l-0.02 -0.02 l0 0.02 l-3.78 0 l0 11.62 l-0.82 0 l0 -10.76 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l5.98 0 l0 0.04 z M34.980000000000004 17 l0.16 0.02 l-0.88 3 l-9.86 0 l0 -0.14 c0.98 0 1.38 -0.02 1.38 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l9.18 0 l0.88 3 l-0.16 0.04 c-0.86 -2.76 -1.02 -2.82 -2.84 -2.82 l-4.86 0 l0 5.64 l2.96 0 c0.92 0 1.18 -0.2 1.34 -0.9 l0.1 0 l0 2.04 l-0.1 0 c-0.16 -0.7 -0.42 -0.9 -1.34 -0.9 l-2.96 0 l0 5.42 c0 0.8 0.3 0.88 1.02 0.9 l4.52 0 c2 0 1.98 -0.16 2.84 -2.8 z M47.06 19.1 l0.02 0 l0 1.14 l-0.24 0 l-9.06 -11.88 l0 10.58 c0 0.92 0.72 0.94 1.36 0.94 l0 0.14 l-3 0 l0 -0.14 c0.66 0 1.36 -0.02 1.36 -0.94 l0 -10.48 c0 -0.92 -0.72 -0.94 -1.36 -0.94 l0 -0.14 l2.02 0 l8.64 11.36 l0 -10.28 c0 -0.92 -0.74 -0.94 -1.38 -0.94 l0 -0.14 l3.02 0 l0 0.14 c-0.64 0 -1.38 0.02 -1.38 0.94 l0 10.64 z M56.02 18.94 c0 0.92 0.4 0.94 1.38 0.94 l0 0.14 l-3.58 0 l0 -0.14 c0.98 0 1.38 -0.02 1.38 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.38 0.02 -1.38 0.94 l0 4.78 l8.3 0 l0 -4.78 c0 -0.92 -0.4 -0.94 -1.36 -0.94 l-0.02 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.36 0.02 -1.36 0.94 l0 10.48 c0 0.92 0.38 0.94 1.36 0.94 l0 0.14 l-3.58 0 l0.02 -0.14 c0.96 0 1.36 -0.02 1.36 -0.94 l0 -5.46 l-8.3 0 l0 5.46 z M69.28 18.3 c-0.62 1.46 -0.22 1.58 0.96 1.58 l0 0.14 l-3.32 0 l0 -0.14 c1.06 0 1.34 0 1.86 -1.18 l5.1 -11.56 l0.1 0 l5.12 11.52 c0.52 1.04 0.66 1.22 1.76 1.22 l0 0.14 l-3.26 0 l0 -0.14 c1.16 0 1.16 -0.14 0.42 -1.82 l-1.42 -3.16 l-5.82 0 z M73.67999999999999 8.34 l-2.8 6.3 l5.62 0 z M93.34 15.36 c0.04 3.26 -2.5 4.9 -5.04 4.9 s-5.08 -1.64 -5.06 -4.9 l0 -6.9 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.38 0.02 -1.38 0.94 l0 6.9 c0 3.04 2.2 4.5 4.42 4.5 c2.28 0 4.6 -1.54 4.6 -4.5 l0 -6.88 c0 -0.92 -0.74 -0.94 -1.38 -0.94 l0 -0.14 l3.02 0 l0 0.14 c-0.64 0 -1.36 0.02 -1.36 0.94 l-0.02 -0.04 l0 6.92 z M106.3 17 l0.16 0.02 l-0.88 3 l-9.86 0 l0 -0.14 c0.98 0 1.38 -0.02 1.38 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.38 0.02 -1.38 0.94 l0 10.44 c0 0.8 0.3 0.88 1.02 0.9 l4.52 0 c2 0 1.98 -0.16 2.84 -2.8 z">
                        </path>
                    </g>
                </svg>
            </a>

            <div id="collapseMenu"
                class='max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex gap-x-5 max-lg:space-y-3 lg:me-20 max-lg:fixed max-lg:bg-neutral-600 max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'>
                        <a href="{{ route('home.index') }}"
                            class='hover:text-[#C7AE6A] text-[#C7AE6A] font-bold block text-base'>Home</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href="{{ route('menu.index') }}"
                            class='hover:text-[#C7AE6A] text-gray-300 font-bold block text-base'>Menu</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href="{{ route('reservation.index') }}"
                            class='hover:text-[#C7AE6A] text-gray-300 font-bold block text-base'>Reservation</a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3 h-full'>
                        <a href="{{ route('about.index') }}"
                            class='text-gray-300 font-bold block text-base hover:text-[#C7AE6A]  '>
                            About
                        </a>
                    </li>
                    <li class='max-lg:border-b max-lg:py-3 px-3'><a href="{{ route('contact.index') }}"
                            class='hover:text-[#C7AE6A] text-gray-300 font-bold block text-base'>Contact</a>
                    </li>
                </ul>
            </div>

            <div class='flex items-center max-lg:ml-auto space-x-5 text-white'>
                @auth

                    <a href="{{ route('profile.edit') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"
                            class="cursor-pointer fill-gray-300  hover:fill-[#C7AE6A] inline">
                            <circle cx="10" cy="7" r="6" data-original="#000000" />
                            <path
                                d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z"
                                data-original="#000000" />
                        </svg>
                    </a>

                    <a href="{{ route('cart.index') }}">
                        <span class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px"
                                class="cursor-pointer fill-gray-300 hover:fill-[#C7AE6A] inline" viewBox="0 0 512 512">
                                <path
                                    d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                                    data-original="#000000"></path>
                            </svg>
                            <span
                                class="absolute left-auto -ml-1 top-0 rounded-full bg-purple-800 px-1 py-0 text-xs text-white">0</span>
                        </span>
                    </a>

                    <button id="toggleOpen" class='lg:hidden !ml-7'>
                        <svg class="w-7 h-7 fill-slate-50" fill="#000" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                @endauth
                @guest
                    <a href="{{ route('login') }}">
                        <button
                            class="nav-btn py-2 text-neutral-800 px-4 bg-[#C7AE6A] hover:text-purple-950 rounded-lg hover:bg-[#b89e5e] mr-2"
                            onclick="window.location.href='/login'">
                            Log in
                        </button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button
                            class="nav-btn py-2 text-neutral-800 px-4 bg-[#C7AE6A] hover:text-purple-950 rounded-lg hover:bg-[#b89e5e]"
                            onclick="window.location.href='/signup'">
                            Sign Up
                        </button>
                    </a>
                @endguest
            </div>
        </div>
    </header>


    <div class="min-h-[100vh]">
        @yield('content')
    </div>

    <footer class="bg-neutral-900 py-8 px-10 font-[sans-serif]">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="lg:flex lg:items-center">
                <a href="javascript:void(0)">
                    <svg width="250" height="35.1351718079709" viewBox="0 0 350 43.31258670502137"
                        class="looka-1j8o68f">
                        <defs id="SvgjsDefs1950">
                            <linearGradient id="SvgjsLinearGradient1953">
                                <stop id="SvgjsStop1954" stop-color="#905e26" offset="0"></stop>
                                <stop id="SvgjsStop1955" stop-color="#f5ec9b" offset="0.5"></stop>
                                <stop id="SvgjsStop1956" stop-color="#905e26" offset="1"></stop>
                            </linearGradient>
                        </defs>
                        <g id="SvgjsG1951" featurekey="n48U4P-0"
                            transform="matrix(3.301263779432932,0,0,3.301263779432932,-1.4525577276302304,-23.57101822188915)"
                            fill="url(#SvgjsLinearGradient1953)">
                            <path
                                d="M18.1 7.359999999999999 c8.36 0 8.4 12.64 0.02 12.64 l-17.68 0 l0.02 -0.14 c0.96 0 1.36 -0.02 1.36 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.36 -0.94 l-0.02 -0.14 l9.18 0 l0.88 3 l-0.14 0.04 c-0.88 -2.76 -1.04 -2.8 -2.86 -2.8 l-4.84 0 l0 5.62 l2.94 0 c0.92 0 1.2 -0.2 1.34 -0.9 l0.1 0 l0 2.04 l-0.1 0 c-0.14 -0.68 -0.42 -0.9 -1.34 -0.9 l-2.94 0 l0 5.42 c0 0.74 0.24 0.86 0.88 0.9 l14.58 0 c7.16 0 7.16 -12.2 -0.02 -12.2 l-0.02 -0.02 l0 0.02 l-3.78 0 l0 11.62 l-0.82 0 l0 -10.76 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l5.98 0 l0 0.04 z M34.980000000000004 17 l0.16 0.02 l-0.88 3 l-9.86 0 l0 -0.14 c0.98 0 1.38 -0.02 1.38 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l9.18 0 l0.88 3 l-0.16 0.04 c-0.86 -2.76 -1.02 -2.82 -2.84 -2.82 l-4.86 0 l0 5.64 l2.96 0 c0.92 0 1.18 -0.2 1.34 -0.9 l0.1 0 l0 2.04 l-0.1 0 c-0.16 -0.7 -0.42 -0.9 -1.34 -0.9 l-2.96 0 l0 5.42 c0 0.8 0.3 0.88 1.02 0.9 l4.52 0 c2 0 1.98 -0.16 2.84 -2.8 z M47.06 19.1 l0.02 0 l0 1.14 l-0.24 0 l-9.06 -11.88 l0 10.58 c0 0.92 0.72 0.94 1.36 0.94 l0 0.14 l-3 0 l0 -0.14 c0.66 0 1.36 -0.02 1.36 -0.94 l0 -10.48 c0 -0.92 -0.72 -0.94 -1.36 -0.94 l0 -0.14 l2.02 0 l8.64 11.36 l0 -10.28 c0 -0.92 -0.74 -0.94 -1.38 -0.94 l0 -0.14 l3.02 0 l0 0.14 c-0.64 0 -1.38 0.02 -1.38 0.94 l0 10.64 z M56.02 18.94 c0 0.92 0.4 0.94 1.38 0.94 l0 0.14 l-3.58 0 l0 -0.14 c0.98 0 1.38 -0.02 1.38 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.38 0.02 -1.38 0.94 l0 4.78 l8.3 0 l0 -4.78 c0 -0.92 -0.4 -0.94 -1.36 -0.94 l-0.02 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.36 0.02 -1.36 0.94 l0 10.48 c0 0.92 0.38 0.94 1.36 0.94 l0 0.14 l-3.58 0 l0.02 -0.14 c0.96 0 1.36 -0.02 1.36 -0.94 l0 -5.46 l-8.3 0 l0 5.46 z M69.28 18.3 c-0.62 1.46 -0.22 1.58 0.96 1.58 l0 0.14 l-3.32 0 l0 -0.14 c1.06 0 1.34 0 1.86 -1.18 l5.1 -11.56 l0.1 0 l5.12 11.52 c0.52 1.04 0.66 1.22 1.76 1.22 l0 0.14 l-3.26 0 l0 -0.14 c1.16 0 1.16 -0.14 0.42 -1.82 l-1.42 -3.16 l-5.82 0 z M73.67999999999999 8.34 l-2.8 6.3 l5.62 0 z M93.34 15.36 c0.04 3.26 -2.5 4.9 -5.04 4.9 s-5.08 -1.64 -5.06 -4.9 l0 -6.9 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.38 0.02 -1.38 0.94 l0 6.9 c0 3.04 2.2 4.5 4.42 4.5 c2.28 0 4.6 -1.54 4.6 -4.5 l0 -6.88 c0 -0.92 -0.74 -0.94 -1.38 -0.94 l0 -0.14 l3.02 0 l0 0.14 c-0.64 0 -1.36 0.02 -1.36 0.94 l-0.02 -0.04 l0 6.92 z M106.3 17 l0.16 0.02 l-0.88 3 l-9.86 0 l0 -0.14 c0.98 0 1.38 -0.02 1.38 -0.94 l0 -10.48 c0 -0.92 -0.4 -0.94 -1.38 -0.94 l0 -0.14 l3.58 0 l0 0.14 c-0.98 0 -1.38 0.02 -1.38 0.94 l0 10.44 c0 0.8 0.3 0.88 1.02 0.9 l4.52 0 c2 0 1.98 -0.16 2.84 -2.8 z">
                            </path>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="lg:flex lg:items-center">
                <ul class="flex space-x-6">
                    <li>
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-300 hover:fill-white w-7 h-7"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7v-7h-2v-3h2V8.5A3.5 3.5 0 0 1 15.5 5H18v3h-2a1 1 0 0 0-1 1v2h3v3h-3v7h4a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-300 hover:fill-white w-7 h-7"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M21 5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5zm-2.5 8.2v5.3h-2.79v-4.93a1.4 1.4 0 0 0-1.4-1.4c-.77 0-1.39.63-1.39 1.4v4.93h-2.79v-8.37h2.79v1.11c.48-.78 1.47-1.3 2.32-1.3 1.8 0 3.26 1.46 3.26 3.26zM6.88 8.56a1.686 1.686 0 0 0 0-3.37 1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68zm1.39 1.57v8.37H5.5v-8.37h2.77z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                class="fill-gray-300 hover:fill-white w-7 h-7" viewBox="0 0 24 24">
                                <path
                                    d="M22.92 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.83 4.5 17.72 4 16.46 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98-3.56-.18-6.73-1.89-8.84-4.48-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.9 20.29 6.16 21 8.58 21c7.88 0 12.21-6.54 12.21-12.21 0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Contact Us</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Email</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Phone</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Address</a>
                    </li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-semibold mb-6 text-white">Information</h4>
                <ul class="space-y-4">
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">About Us</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Terms &amp;
                            Conditions</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" class="text-gray-300 hover:text-white text-sm">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
        <p class='text-gray-300 text-sm mt-8'>© 2023<a href='https://readymadeui.com/' target='_blank'
                class="hover:underline mx-1">ReadymadeUI</a>All Rights Reserved.
        </p>
    </footer>
</body>

</html>
