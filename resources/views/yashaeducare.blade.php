<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500;400;700;800&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/css/all.min.css', 'resources/js/app.js', 'resources/js/all.min.js'])
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-100">

    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-3">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('images/yashaeducare-logo.png') }}" class="h-16"
                    alt="Logo Yayasan Sharhana Educare" />
            </a>
            <div class="flex md:order-2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center
                "><i class="fa-solid fa-right-to-bracket mr-1"></i> Masuk</button>
                <button onclick="menuToggle()" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                  <span class="sr-only">Open main menu</span>
                  <i class="fa-solid fa-bars text-[20px]"></i>
              </button>
            </div>
            <div class="hidden w-full md:block md:w-auto" id="menu">
                <ul
                    class="flex flex-col text-sm p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 font-medium text-white bg-blue-700 rounded md:bg-transparent md:text-primary-500 md:p-0">Beranda</a>
                    </li>
                    <li class="relative">
                        <button onclick="dropdownUsaha()"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-500 md:p-0 md:w-auto">Unit
                            Usaha
                            <i class="ml-2 fa-solid fa-chevron-down text-[12px]"></i>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-usaha"
                            class="hidden z-10 absolute top-8 transition  font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
                                </li>
                            </ul>
                            <div class="py-1">
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Sign out
                                </a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-500 md:p-0">Majelis Ta'lim</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-500 md:p-0">Berita</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-500 md:p-0">Agenda</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-500 md:p-0">Tentang
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="bg-center bg-cover bg-no-repeat bg-gray-700 bg-blend-multiply" style="background-image: url('{{ asset('images/cover.jpeg') }}');">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">We
                invest in the world’s potential</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>

    <script>
        const menuToggle = () => {
            let element = document.getElementById('menu');
            element.classList.toggle('hidden');
        }

        const dropdownUsaha = () => {
            let element = document.getElementById('dropdown-usaha');
            element.classList.toggle('hidden');
        }

        document.addEventListener('click', function(event) {
            const dropdown = document.getElementById('dropdown-usaha');
            const button = document.querySelector('[onclick="dropdownUsaha()"]');

            if (!dropdown.contains(event.target) && event.target !== button) {
                dropdown.classList.add('hidden');
            }
        });
    </script>
</body>

</html>
