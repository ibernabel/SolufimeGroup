<!-- resources/views/components/navbar.blade.php -->

@props(['links'])

<header x-data="{ navbarOpen: false }" class="absolute top-0 left-0 z-50 w-full">
    <div class="container mx-auto">
        <div class="relative flex items-center justify-between -mx-4">
            <div class="max-w-full px-4 w-60">
                <a href="{{ url('/') }}" class="block w-full py-5">
                    <!-- Aquí la URL del logo -->
                    <img src="{{ asset('/images/logo.svg') }}" alt="logo" class="block w-full dark:hidden">
                    <img src="{{ asset('/images/logo-white.svg') }}" alt="logo" class="hidden w-full dark:block">
                </a>
            </div>
            <div class="flex items-center justify-between w-full px-4">
                <!-- Menú de navegación para pantallas más grandes -->
                <nav class="hidden lg:flex items-center justify-end space-x-8">
                    <ul class="block lg:flex">
                        @foreach ($links as $link)
                            <li>
                                <a href="{{ $link['url'] }}"
                                    class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex {{ $link['selected'] ? 'selected' : '' }}">
                                    {{ $link['text'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- Menú de hamburguesa para pantallas más pequeñas -->
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="{ 'navbarTogglerActive': navbarOpen }"
                        id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
                    </button>
                    <nav x-transition="" x-show.transition="navbarOpen" id="navbarCollapse"
                        class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white dark:bg-dark-2 py-5 px-6 shadow transition-all lg:static lg:bg-transparent lg:dark:bg-transparent lg:block lg:w-full lg:max-w-full lg:shadow-none xl:ml-11">
                        <ul class="block lg:flex">
                            @foreach ($links as $link)
                                <li>
                                    <a href="{{ $link['url'] }}"
                                        class="flex py-2 text-base font-medium text-dark dark:text-white hover:text-primary lg:ml-10 lg:inline-flex {{ $link['selected'] ? 'selected' : '' }}">
                                        {{ $link['text'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                {{--<div class="justify-end hidden pr-16 sm:flex lg:pr-0">
                  <img src="{{ asset('/images/flag.png') }}" alt="flag" />
                </div>--}}
            </div>
        </div>
    </div>
</header>
