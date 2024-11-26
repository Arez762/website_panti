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
    @vite('resources/css/app.css')

    <title>Galeri</title>
    <style>
        .loading-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #f3f3f3 25%, #ecebeb 50%, #f3f3f3 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
            position: absolute;
            top: 0;
            left: 0;
            border-radius: 0.5rem;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .image-wrapper {
            position: relative;
            overflow: hidden;
        }

        .image-loaded {
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .image-not-loaded {
            opacity: 0;
        }
    </style>
</head>

<body class="bg-[#F3F4F8] font-poppins flex flex-col min-h-screen"
    style="background-image: url('{{ asset('Image/Background/bg-page.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">


    <x-navbar></x-navbar>

    <section class="relative bg-cover bg-center lg:h-96 h-48 lg:pt-24 pt-2"
        style="background-image: url('{{ asset('Image/Background/Nav-bg.jpg') }}'); z-index: 1;">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10 text-center justify-center text-white py-20">
            <!-- Top Small Title -->
            <h3 class="text-md lg:text-2xl text-white">Galeri</h3>
            <!-- Orange underline below 'Profil' -->
            <div class="w-12 lg:w-20 h-1 bg-orange-500 mx-auto my-2"></div>
            <!-- Large Bold Title -->
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Galeri Foto</h1>
        </div>
    </section>

    <section class="lg:mt-16 mt-12" data-aos="fade">
        <div class="ml-6 lg:ml-8 mb-4">
            <p class="lg:text-2xl text-lg font-bold">Foto Terbaru</p>
            <div class="w-16 lg:w-20 h-1 bg-orange-500 "></div>
        </div>

        <!-- Galeri Foto -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 p-4" data-aos="fade-up">
            @foreach ($photos as $index => $photo)
                <div class="group cursor-pointer relative" onclick="openModal({{ $index }})">
                    <img src="{{ asset('storage/' . $photo->image_path) }}" alt="{{ $photo->title }}"
                        class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105 opacity-0 transition-opacity duration-500 ease-in-out"
                        loading="lazy" onload="this.classList.remove('opacity-0')" />
                    <div class="mt-2 text-gray-700 text-xs lg:text-sm p-1">
                        <p class="font-semibold text-black">{{ Str::words($photo->title, 15) }}</p>

                        <div class="flex items-center justify-between text-gray-500 mt-1">
                            <span class="flex justify-center items-center">
                                <svg class="w-4 h-4 mr-2 text-gray-500 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                {{ $photo->created_at->format('d F Y') }}
                            </span>
                            <span class="flex items-center text-gray-500">
                                {{ $photo->user->name ?? 'admin' }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="m-4 flex items-center justify-center space-x-2">
            {{-- Previous Page Link --}}
            @if ($photos->onFirstPage())
                <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded cursor-not-allowed">&laquo; Previous</span>
            @else
                <a href="{{ $photos->previousPageUrl() }}"
                    class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600">&laquo; Previous</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($photos->links()->elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="px-3 py-1 text-gray-500">{{ $element }}</span>
                @endif

                {{-- Array of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $photos->currentPage())
                            <span class="px-3 py-1 bg-orange-500 text-white rounded">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                class="px-3 py-1 bg-gray-200 text-gray-700 rounded hover:bg-gray-300">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($photos->hasMorePages())
                <a href="{{ $photos->nextPageUrl() }}"
                    class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600">Next &raquo;</a>
            @else
                <span class="px-3 py-1 bg-gray-200 text-gray-500 rounded cursor-not-allowed">Next &raquo;</span>
            @endif
        </div>


        <!-- Modal untuk melihat gambar lebih detail -->


    </section>

    <div id="imageModal"
    class="fixed inset-0 bg-black bg-opacity-70 backdrop-blur-sm flex items-center justify-center hidden z-40">
    <div class="relative w-full max-w-5xl max-h-[90vh] p-4">
        <!-- Tombol untuk menutup modal -->
        <button class="absolute top-4 right-4 pr-3 text-white text-4xl font-bold"
            onclick="closeModal()">&times;</button>

        <!-- Tombol Previous dan Next -->
        <button class="absolute left-2 pl-3 lg:left-4 top-1/2 transform -translate-y-1/2 text-white text-4xl font-bold"
            onclick="prevImage()">&#10094;</button>
        <button class="absolute right-2 pr-3 lg:right-4 top-1/2 transform -translate-y-1/2 text-white text-4xl font-bold"
            onclick="nextImage()">&#10095;</button>

        <!-- Gambar dalam ukuran lebih besar -->
        <div class="flex items-center justify-center overflow-hidden bg-gray-900 rounded-lg">
            <img id="modalImage" src="" alt=""
                class="object-contain w-full h-full max-w-4xl max-h-[80vh]" />
        </div>

        <!-- Judul gambar -->
        <p id="modalTitle" class="text-white mt-4 text-lg font-semibold text-center"></p>
    </div>
</div>



    <script>
        // Data gambar dan judul
        const photos = [
            @foreach ($photos as $photo)
                {
                    src: "{{ asset('storage/' . $photo->image_path) }}",
                    title: "{{ $photo->title }}"
                },
            @endforeach
        ];

        let currentIndex = 0;

        // Fungsi untuk membuka modal dan menampilkan gambar sesuai indeks
        function openModal(index) {
            currentIndex = index;
            updateModal();
            document.getElementById("imageModal").classList.remove("hidden");
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            document.getElementById("imageModal").classList.add("hidden");
        }

        // Fungsi untuk memperbarui gambar dan judul pada modal
        function updateModal() {
            document.getElementById("modalImage").src = photos[currentIndex].src;
            document.getElementById("modalTitle").textContent = photos[currentIndex].title;
        }

        // Fungsi untuk berpindah ke gambar sebelumnya
        function prevImage() {
            currentIndex = (currentIndex - 1 + photos.length) % photos.length;
            updateModal();
        }

        // Fungsi untuk berpindah ke gambar berikutnya
        function nextImage() {
            currentIndex = (currentIndex + 1) % photos.length;
            updateModal();
        }
    </script>


    {{-- 
    <x-card-all></x-card-all> --}}

    <x-footer></x-footer>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
