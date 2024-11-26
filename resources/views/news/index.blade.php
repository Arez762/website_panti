<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    @vite('resources/css/app.css')

    <title>PRSPDNF</title>
    <style>
        p {
            color: white;
        }

        /* Animasi Slide Down */
        @keyframes slide-down {
            0% {
                transform: translateY(-20px);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Utilitas Tailwind untuk animasi slide down dengan durasi lebih lama */
        .slide-down {
            animation: slide-down 0.3s ease-out forwards;
        }

        /* Optional: Menambahkan sedikit animasi pada dropdown */
        .dropdown-menu {

            transform: translateY(-10px);
        }

        .dropdown-menu.hidden {
            opacity: 0;
            transform: translateY(-10px);
            display: none;
        }

        .dropdown-menu.active {
            opacity: 1;
            transform: translateY(0);
            display: block;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, and Opera */
        }
    </style>
</head>

<body class="bg-[#F3F4F8] font-poppins flex flex-col min-h-screen">
    <!-- Fixed Navbar -->

    <x-navbar></x-navbar>

    <div class="relative flex p-6 flex-col items-center justify-center lg:px-32 rounded-xl" data-aos="fade-down">
        <div class="lg:py-20 py-12">
        </div>
        <div
            class="carousel scrollbar-hide flex w-full snap-x snap-mandatory gap-4 overflow-x-scroll scroll-smooth pb- rounded-xl">
            @foreach ($recentNewsHeader as $newsItem)
                <div
                    class="relative aspect-[1/1] h-96 lg:w-[50%] w-[100%] shrink-0 snap-start snap-always rounded-xl bg-blue-200 overflow-hidden">

                    <a href="{{ route('news.show', $newsItem->slug) }}" class="hover:no-underline">
                        <div class="absolute inset-0">
                            <img src="{{ Storage::url($newsItem->thumbnail) }}" alt="{{ $newsItem->name }}"
                                class="w-full h-full object-cover transition-opacity duration-500 opacity-0  rounded-xl"
                                loading="lazy" onload="this.style.opacity=1">
                        </div>
                    </a>

                    <div class="absolute inset-0 bg-black bg-opacity-30"></div>
                    <div class="absolute inset-0 flex flex-col items-start justify-end p-4 text-justify">
                        <a href="{{ route('news.show', $newsItem->slug) }}" class="hover:no-underline">
                            <h1 class="title-font text-base lg:text-lg font-medium text-white mb-2 hover:text-gray-300">
                                {{ Str::words($newsItem->name, 15) }}
                            </h1>
                            <p class="text-xs text-white lg:text-sm mb-4 hover:text-gray-300">
                                {!! Str::limit(strip_tags($newsItem->content), 100) !!}
                            </p>
                        </a>

                        <div class="flex w-full justify-start gap-3 lg:gap-6 items-center">
                            <div class="text-gray-300 lg:text-sm text-xs items-center">
                                {{ \Carbon\Carbon::parse($newsItem->created_at)->format('d F Y') }}
                            </div>
                            <span class="text-gray-300 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                                    style="outline: none;">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                {{ $newsItem->views }}
                                {{-- {{ $newsItem->views >= 1000 ? number_format($newsItem->views / 1000, 1) . 'k' : $newsItem->views }}
                                Views --}}
                            </span>
                            <span class="text-gray-300 inline-flex items-center leading-none text-sm">
                                <svg class="w-5 h-5 text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24"
                                    style="outline: none;">
                                    <path stroke="currentColor" stroke-width=""
                                        d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                                {{ $newsItem->user->name }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination my-4 flex gap-2">
            @foreach ($recentNewsHeader as $key => $newsItem)
                <span
                    class="h-3 w-3 ease-out duration-300 rounded-full bg-gray-400 {{ $key === 0 ? 'w-8' : '' }}"></span>
            @endforeach
        </div>
        <div class="flex flex-row w-64 items-center justify-center">
            <button class="prev-btn hover:text-orange-500 p-2 flex flex-row mr-4">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                </svg> Prev
            </button>
            <button class="next-btn hover:text-orange-500 p-2 flex flex-row">Next
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    <script>
        const container = document.querySelector('.carousel');
        const slides = document.querySelectorAll('.carousel > div');
        const dots = document.querySelectorAll('.pagination > span');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

        const breakpoint = 768;
        const slidesPerPage = 3;
        const autoScrollInterval = 3000;
        let autoScroll;

        prevBtn.addEventListener('click', () => {
            scrollToPrev();
            resetAutoScroll();
        });

        nextBtn.addEventListener('click', () => {
            scrollToNext();
            resetAutoScroll();
        });

        function startAutoScroll() {
            autoScroll = setInterval(() => {
                scrollToNext();
            }, autoScrollInterval);
        }

        function resetAutoScroll() {
            clearInterval(autoScroll);
            startAutoScroll();
        }

        function scrollToNext() {
            if (getCenterSlideIndex() === slides.length - 1) {
                container.scrollTo({
                    left: 0,
                    behavior: 'smooth'
                });
                updateActiveDot(0);
            } else {
                container.scrollBy({
                    left: slides[0].offsetWidth,
                    behavior: 'smooth'
                });
                updateActiveDot(getCenterSlideIndex() + 1);
            }
        }

        function scrollToPrev() {
            if (getCenterSlideIndex() === 0) {
                container.scrollTo({
                    left: container.scrollWidth,
                    behavior: 'smooth'
                });
                updateActiveDot(slides.length - 1);
            } else {
                container.scrollBy({
                    left: -slides[0].offsetWidth,
                    behavior: 'smooth'
                });
                updateActiveDot(getCenterSlideIndex() - 1);
            }
        }

        function updateActiveDot(centerSlideIndex) {
            dots.forEach((dot) => dot.classList.remove('w-8'));
            dots[centerSlideIndex].classList.add('w-8');
        }

        function getCenterSlideIndex() {
            const slideWidth = slides[0].offsetWidth;
            const containerWidth = container.offsetWidth;
            const centerSlideIndex = Math.round((container.scrollLeft + Math.floor(containerWidth / 2)) / slideWidth);
            return centerSlideIndex;
        }

        startAutoScroll();
    </script>

    <section class="w-full lg:px-32" data-aos="fade">
        <!-- hero big grid -->
        <div class="my-4 lg:pl-4 pl-3">
            <p class="text-2xl text-black lg:mb-2 lg:text-3xl font-bold">Berita Terpopuler</p>
            <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
        </div>
        <div class="rounded-xl lg:mb-10 pb-4">
            <div class="xl:container mx-auto px-3 sm:px-4">
                <!-- big grid 1 -->
                <div class="flex flex-wrap h-auto lg:h-96 ">
                    <!-- Start left cover -->
                    <div class="flex-shrink max-w-full w-full lg:w-1/2 lg:pr-1">
                        <div class="relative hover-img overflow-hidden h-full rounded">
                            @if ($topViewsNews->isNotEmpty())
                                @php
                                    $topNews = $topViewsNews->first();
                                @endphp
                                <a href="{{ route('news.show', $topNews->slug) }}">
                                    <img class="max-w-full w-full h-full object-cover transform transition duration-300 hover:scale-105"
                                        src="{{ Storage::url($topNews->thumbnail) }}" alt="{{ $topNews->name }}">
                                </a>
                                <div class="absolute bottom-0 w-full p-4 bg-gradient-to-t from-black to-transparent">
                                    <a href="{{ route('news.show', $topNews->slug) }}">
                                        <h2 class="text-base lg:text-xl font-bold hover:underline text-white mb-3">
                                            {{ \Illuminate\Support\Str::limit($topNews->name, 100) }}

                                        </h2>
                                    </a>
                                    <div class="">
                                        <div class="text-gray-100">
                                            <div class="inline-block h-3 border-l-2 border-orange-600 mr-2"></div>
                                            {{ $topNews->category->name }}
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p class="text-gray-500">No top view news available.</p>
                            @endif
                        </div>
                    </div>

                    <!-- Start box news -->
                    <div class="flex-shrink max-w-full w-full lg:w-1/2">
                        <div class="box-one flex flex-wrap h-full rounded">
                            @foreach ($topViewsNews->slice(1, 4) as $item)
                                <article class="flex-shrink max-w-full w-full sm:w-1/2 lg:mb-0">
                                    <div
                                        class="relative hover-img overflow-hidden border-white border-2 h-48 lg:h-56 rounded">
                                        <a href="{{ route('news.show', $item->slug) }}">
                                            <img class="max-w-full w-full h-full object-cover transform transition duration-300 hover:scale-105"
                                                src="{{ Storage::url($item->thumbnail) }}"
                                                alt="{{ $item->name }}">
                                        </a>
                                        <div
                                            class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-to-t from-black to-transparent">
                                            <a href="{{ route('news.show', $item->slug) }}">
                                                <h2
                                                    class="text-sm lg:text-lg font-bold hover:underline capitalize leading-tight text-white">
                                                    {{ \Illuminate\Support\Str::limit($item->name, 50) }}
                                                </h2>
                                            </a>
                                            <div class="pt-1">
                                                <div class="text-gray-100">
                                                    <div class="inline-block h-3 border-l-2 border-orange-600 mr-2">
                                                    </div>
                                                    {{ $item->category->name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font lg:flex lg:flex-row lg:mt-20 lg:px-32">
        <div class="flex flex-col lg:w-3/4">
            <div class=" items-start p-2 ">
                @foreach ($categories as $category)
                    <div class="my-4 lg:py-4">
                        <div class="my-4 lg:pl-4 pl-3">
                            <p class="text-lg text-black lg:text-3xl font-bold">{{ $category->name }}</p>
                            <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
                        </div>
                        <div class="flex flex-wrap">
                            @foreach ($newsByCategory[$category->id] as $item)
                                <div class="lg:w-1/4 md:w-1/2 w-full p-2">
                                    <div
                                        class="h-full border-gray-200 border-opacity-60 rounded shadow-md overflow-hidden">
                                        <a href="{{ route('news.show', $item->slug) }}">
                                            <img class="h-40 w-full object-cover object-center lazyload loading-placeholder transform transition duration-300 hover:scale-105"
                                                data-src="{{ Storage::url($item->thumbnail) }}"
                                                alt="{{ $item->name }}">
                                        </a>
                                        <div class="p-3">
                                            <h2
                                                class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                                {{ $item->category->name }}
                                            </h2>
                                            <a href="{{ route('news.show', $item->slug) }}"
                                                class="hover:no-underline">
                                                <h1
                                                    class="title-font text-base font-medium text-gray-900 mb-2 hover:text-gray-500">
                                                    {{ Str::words($item->name, 15) }}
                                                </h1>
                                            </a>
                                            <div class="text-gray-400 text-xs mt-2">
                                                Diunggah
                                                {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}
                                            </div>
                                            <div class="text-gray-400 text-xs mt-2 justify-between flex">
                                                <span
                                                    class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm">
                                                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2"
                                                        fill="none" stroke-linecap="round" stroke-linejoin="round"
                                                        viewBox="0 0 24 24">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                    {{ $item->views >= 1000000
                                                        ? number_format($item->views / 1000000, 1) . 'M'
                                                        : ($item->views >= 1000
                                                            ? number_format($item->views / 1000, 1) . 'k'
                                                            : $item->views) }}
                                                    Views

                                                </span>
                                                <span
                                                    class="text-gray-400 inline-flex items-center leading-none text-sm">
                                                    <svg class="w-5 h-5 text-gray-400" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-width="2"
                                                            d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                    </svg>
                                                    {{ $item->user->name }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="lg:w-1/4 p-4">
            <div class="sticky top-4 order-1">
                <div class="mb-4">
                    <div class="lg:py-14 py-4"></div>

                    <div class="relative flex flex-col w-full mb-2 lg:mb-6 text-neutral-600 justify-between sm:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true"
                            class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <form action="{{ route('news.search') }}" method="GET">
                            <input type="search" name="search"
                                class="w-full rounded-md border border-neutral-300 bg-neutral-50 py-2.5 pl-10 pr-2 text-sm"
                                placeholder="Cari berita..." aria-label="Search" value="{{ request('search') }}">
                        </form>
                    </div>


                    <div class="lg:mb-4 mb-2">
                        <p class="text-lg text-black lg:text-2xl font-bold">Kategori</p>
                        <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
                    </div>
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item p-0 hover:bg-gray-100 border py-2">
                                <a href="{{ route('news.category', $category->slug) }}"
                                    class="flex text-black hover:text-orange-500 w-full justify-between align-items-center text-decoration-none px-3 py-2 w-100 h-100">
                                    {{ $category->name }}
                                    <span class="hover:text-orange-500">({{ $category->news_count }})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="">
                    <div class="my-4">
                        <p class="text-lg text-black lg:text-2xl font-bold">Ikuti Kami</p>
                        <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
                    </div>
                    <div class="flex flex-row gap-2">
                        <div class="flex gap-2">
                            <!-- Facebook Link -->
                            <a href="https://www.facebook.com/prspdnffajarharapan" target="_blank"
                                rel="noopener noreferrer">
                                <svg class="w-8 h-8 text-gray-800 hover:bg-black hover:text-white rounded-md"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <!-- Instagram Link -->
                            <a href="https://www.instagram.com/prspdnffajarharapan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                rel="noopener noreferrer">
                                <svg class="w-8 h-8 text-gray-800 hover:bg-black hover:text-white rounded-md"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>

                            <!-- YouTube Link -->
                            <a href="https://www.youtube.com/@Fajar_harapan" target="_blank" target="_blank"
                                rel="noopener noreferrer">
                                <svg class="w-8 h-8 text-gray-800 hover:bg-black hover:text-white rounded-md"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


                <style>
                    #popupOverlay {
                        display: none;
                        justify-content: center;
                        align-items: center;
                        z-index: 50;
                    }

                    #popupContent {
                        position: relative;
                        width: 90%;
                        /* Ubah ukuran kontainer popup */
                        max-width: 800px;
                        /* Maksimal lebar untuk layar besar */
                        max-height: 90%;
                        /* Maksimal tinggi gambar dalam viewport */
                        background-color: white;
                        overflow: hidden;
                        border-radius: 10px;
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    }

                    #popupImage {
                        width: 100%;
                        /* Gambar memenuhi kontainer */
                        height: auto;
                        /* Pertahankan proporsi */
                        max-height: 100%;
                        /* Gambar tidak melebihi tinggi popup */
                        object-fit: contain;
                        /* Menjaga proporsi gambar */
                    }
                </style>

                <div class="infographics-section relative">
                    <div class="my-4">
                        <p class="text-lg text-black lg:text-2xl font-bold">Infografis</p>
                        <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
                    </div>
                    <div class="flex flex-col gap-4">
                        @foreach ($activeInfographics as $infographic)
                            <div class="w-full h-auto rounded-lg overflow-hidden">
                                <img src="{{ asset('storage/' . $infographic->image) }}" alt="Infographic"
                                    class="w-full max-h-[500px] object-cover rounded-lg aspect-auto cursor-pointer"
                                    onload="detectOrientation(this)" onclick="openPopup(this)">
                            </div>
                        @endforeach
                    </div>
                </div>

                <div id="popupOverlay" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-75 hidden z-50">
                    <div id="popupContent" class="relative max-w-3xl mx-auto mt-10 bg-white rounded-lg p-4">
                        <span id="closePopup"
                            class="absolute top-2 right-4 text-2xl text-gray-500 cursor-pointer">&times;</span>
                        <img id="popupImage" src="" alt="Popup Infographic"
                            class="w-full object-contain rounded-lg">
                    </div>
                </div>

                <script>
                    function detectOrientation(img) {
                        const isLandscape = img.naturalWidth > img.naturalHeight;
                        if (isLandscape) {
                            img.style.height = "auto"; // Biarkan tinggi otomatis
                            img.style.width = "100%"; // Sesuaikan lebar ke kontainer
                        } else {
                            img.style.height = "100%"; // Sesuaikan tinggi ke kontainer
                            img.style.width = "auto"; // Biarkan lebar otomatis
                        }
                    }
                </script>

                <script>
                    function openPopup(image) {
                        const popupOverlay = document.getElementById('popupOverlay');
                        const popupImage = document.getElementById('popupImage');
                        popupImage.src = image.src;
                        popupOverlay.style.display = 'flex';
                    }

                    document.getElementById('closePopup').addEventListener('click', () => {
                        const popupOverlay = document.getElementById('popupOverlay');
                        popupOverlay.style.display = 'none';
                    });

                    document.getElementById('popupOverlay').addEventListener('click', (event) => {
                        if (event.target.id === 'popupOverlay') {
                            event.target.style.display = 'none';
                        }
                    });
                </script>


            </div>
        </div>
    </section>

    {{-- footer start --}}
    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
