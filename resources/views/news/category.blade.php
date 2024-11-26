<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Berita</title>

    <!-- Import Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Lazysizes -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    @vite('resources/css/app.css')
    <style>
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

<body class="bg-[#F3F4F8] font-poppins">


    <!-- Fixed Navbar -->

    <x-navbar></x-navbar>

    <div class="lg:py-16 py-12"></div>



    <section class="text-gray-600 body-font lg:flex lg:flex-row lg:mx-32">
        <div class="lg:w-3/4  items-start p-2 lg:pt-8">
            <div class="my-4 lg:pl-4">
                <p class="text-lg text-black lg:text-2xl font-bold">
                    Kategori: {{ $news->isNotEmpty() ? $news->first()->category->name : 'Berita belum tersedia' }}
                </p>
                
                <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
            </div>

            <div class="flex flex-wrap w-full">
                @forelse ($news as $item)
                    <div class="lg:w-1/4 md:w-1/2 w-full p-2 flex-shrink-0">
                        <div class="h-full border-gray-200 border-opacity-60 rounded shadow-md overflow-hidden">
                            <a href="{{ route('news.show', $item->slug) }}">
                                <img class="h-40 w-full object-cover object-center lazyload loading-placeholder transform transition duration-300 hover:scale-105"
                                    data-src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->name }}">
                            </a>
                            <div class="p-3">
                                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">
                                    {{ $item->category->name }}
                                </h2>
                                <a href="{{ route('news.show', $item->slug) }}" class="hover:no-underline">
                                    <h1 class="title-font text-base font-medium text-gray-900 mb-2 hover:text-gray-500">
                                        {{ Str::words($item->name, 15) }}
                                    </h1>
                                </a>
                                <div class="text-gray-400 text-xs mt-2">
                                    Diunggah {{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}
                                </div>
                                <div class="text-gray-400 text-xs mt-2 justify-between flex">
                                    <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm">
                                        <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                        {{ 
                                            $item->views >= 1000000 
                                                ? number_format($item->views / 1000000, 1) . 'M' 
                                                : ($item->views >= 1000 
                                                    ? number_format($item->views / 1000, 1) . 'k' 
                                                    : $item->views) 
                                        }} Views
                                    </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                        <svg class="w-5 h-5 text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-width="2"
                                                d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                        </svg>
                                        {{ $item->user->name }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="w-full text-center p-4">
                        <p class="text-gray-500 text-lg">Belum ada berita tersedia</p>
                    </div>
                @endforelse
            </div>


            <!-- Pagination links -->
            <div class="mt-4 px-4">
                <div class="mt-4 px-4">
                    {{ $news->appends(['search' => request('search')])->links() }}
                </div>
            </div>
            <a href="{{ route('news.index') }}" class="back-button text-orange-500 hover:text-orange-600">&larr;
                Kembali ke Daftar Berita</a>
        </div>


        <div class="flex-shrink max-w-full px-4 lg:pt-12 w-full md:w-1/3">
            <div class="sticky top-4 px-8 lg:px-0 lg:pr-12">
                <div class="flex w-full items-center justify-center">
                    <img src="{{ asset('image/Icon-prspdnf.png') }}" alt="" class="h-12 lg:h-20">
                </div>
                <!-- Menu Kategori -->
                <div class="mb-4 pt-6">

                    <div class="relative flex flex-col w-full mb-2 lg:mb-6 text-neutral-600 justify-between sm:flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" aria-hidden="true"
                            class="absolute left-2.5 top-1/2 size-5 -translate-y-1/2 text-neutral-600/50">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                        <form action="{{ route('news.search') }}" method="GET">
                            <input type="search" name="search"
                                class="w-full rounded-md border hover:border-orange-500 border-neutral-300 bg-neutral-50 py-2.5 pl-10 pr-2 text-sm focus:ring-2 focus:ring-orange-500"
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

                <!-- Berita Terpopuler -->
                <div class="my-4">
                    <p class="text-lg text-black lg:text-2xl font-bold">Berita Terpopuler</p>
                    <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
                </div>
                <div class="space-y">
                    @foreach ($popularNews as $news)
                        <div class="border-b border-gray-300 py-1 flex flex-row">
                            <div class="items-center justify-center flex h-20 w-10 ">
                                <p
                                    class="pt-2 text-5xl font-bold flex items-center justify-center text-gray-400 h-full">
                                    {{ $loop->iteration }}</p>
                            </div>
                            <div class="px-4">
                                <a href="{{ route('news.show', $news->slug) }}" class=" hover:no-underline ">
                                    <p class="text-base font-semibold text-gray-900 hover:text-gray-700">
                                        {{ Str::words($news->name, 10) }}
                                    </p>
                                </a>
                                <div class="flex text-xs items-end gap-2 mt-2 justify-between">
                                    @if ($news->category)
                                        <span
                                            class="bg-orange-500 text-white text-xs px-2 py-1 rounded">{{ $news->category->name }}</span>
                                    @else
                                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">TANPA
                                            KATEGORI</span>
                                    @endif
                                    <span
                                        class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($news->created_at)->format('d F Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="my-4">
                    <p class="text-lg text-black lg:text-2xl font-bold">Berita Terbaru</p>
                    <div class="w-16 lg:w-20 h-1 bg-orange-500"></div>
                </div>
                <div class="space-y">
                    @foreach ($recentNews as $news)
                        <div class="border-b border-gray-300 py-1 flex flex-row">
                            <div class="items-center justify-center flex h-20 w-8 ">
                                <p
                                    class="pt-2 text-5xl font-bold flex items-center justify-center text-gray-400 h-full">
                                    {{ $loop->iteration }}</p>
                            </div>
                            <div class="px-4">
                                <a href="{{ route('news.show', $news->slug) }}" class="">
                                    <p
                                        class="text-gray-900 hover:no-underline hover:text-gray-700 text-base font-semibold">
                                        {{ Str::words($news->name, 10) }}
                                    </p>
                                </a>
                                <div class="flex text-xs items-end gap-2 mt-2 justify-between">
                                    @if ($news->category)
                                        <span
                                            class="bg-orange-500 text-white text-xs px-2 py-1 rounded">{{ $news->category->name }}</span>
                                    @else
                                        <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded">TANPA
                                            KATEGORI</span>
                                    @endif
                                    <span
                                        class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($news->created_at)->format('d F Y') }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
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

                    <div class="h-20"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer start --}}
    <x-footer></x-footer>
    {{-- footer end --}}

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
