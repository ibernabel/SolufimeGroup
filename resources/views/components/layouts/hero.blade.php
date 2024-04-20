<!-- ====== Hero Section Start -->

@props(['hero'])

<div class="relative bg-white dark:bg-dark pt-[120px] pb-[110px] lg:pt-[150px]">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4 lg:w-5/12">
                <div class="hero-content">
                    <h1
                        class="mb-5 text-4xl font-bold !leading-[1.208] text-dark dark:text-white sm:text-[42px] lg:text-[40px] xl:text-5xl">
                      {{ $hero['title'] }}
                    </h1>
                    <p class="mb-8 max-w-[480px] text-base text-body-color dark:text-dark-6">
                      {{ $hero['description'] }}
                    </p>
                    <ul class="flex flex-wrap items-center">
                        <li>
                            <a href="{{ $hero['url'] }}"
                                class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-center text-white rounded-md bg-primary hover:bg-blue-dark lg:px-7">
                                {{ $hero['cta'] }}
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="hidden px-4 lg:block lg:w-1/12"></div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img src="{{ asset('/images/hero-image-01.png') }}" alt="hero" class="max-w-full lg:ml-auto">
                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3"></circle>
                                <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3"></circle>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Hero Section End -->
