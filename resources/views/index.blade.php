<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>

    @vite('resources/css/app.css')
    <title>PRSPDNF FH</title>
</head>

<body class="bg-[#F3F4F8] font-poppins">
    <div id="loading-overlay" class="fixed inset-0 flex justify-center items-center bg-white/30 backdrop-blur-lg z-50">
        <div class="relative inline-flex">
            <div class="w-16 h-16 bg-orange-500 rounded-full"></div>
            <div class="w-16 h-16 bg-orange-400 rounded-full absolute top-0 left-0 animate-ping"></div>
            <div class="w-16 h-16 bg-orange-300 rounded-full absolute top-0 left-0 animate-pulse"></div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                document.getElementById("loading-overlay").style.display = "none";
            }, 2000); // Hide after 1 seconds
        });
    </script>

    <x-navbar></x-navbar>

    <section class="relative z-10 pt-16 lg:pt-32">
        <!-- Circles Decoration (Left) -->
        <div class="absolute top-50 left-0 z-0">
            <div class="w-20 h-20 sm:w-32 sm:h-32 md:w-40 md:h-40 bg-orange-500 rounded-full"></div>
            <div class="w-10 h-10 sm:w-16 sm:h-16 md:w-20 md:h-20 bg-orange-400 rounded-full mt-4 ml-8"></div>
            <div class="w-5 h-5 sm:w-8 sm:h-8 md:w-10 md:h-10 bg-orange-300 rounded-full mt-2 ml-16"></div>
        </div>
        <div class="absolute top-30 right-0 z-0 mt-6 md:mt-0 lg:mt-0">
            <div class="w-5 h-5 sm:w-8 sm:h-8 md:w-10 md:h-10 bg-orange-500 rounded-full ml-4 mt-4"></div>
            <div class="w-10 h-10 sm:w-16 sm:h-16 md:w-20 md:h-20 bg-orange-400 rounded-full mt-4 ml-8"></div>
            <div class="w-20 h-20 sm:w-32 sm:h-32 md:w-40 md:h-40 bg-orange-300 rounded-full mt-4"></div>
        </div>
        <!-- Main Content -->
        <div class="relative z-10 py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-12 lg:px-12">
            <h1
                class="mb-8 pt-6 lg:pt-0 text-2xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-5xl">
                Langkah Kecil Menuju Kemandirian Besar
                <span class="block mt-2 lg:mt-4 text-[#FC6C3F]">Bersama Kami di Fajar Harapan!</span>
            </h1>

            <p
                class="mb-8 text-xs font-normal text-gray-500 md:text-base lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Dengan kasih dan kepedulian, kami membimbing setiap individu untuk bangkit dari keterbatasan, berdaya
                secara sosial dan ekonomi, serta menjalani hidup yang bermartabat.
            </p>

            <div class="flex flex-col lg:mb-4 lg:space-y-4 sm:flex-row sm:justify-center space-y-0 sm:space-x-4">
                <a href="/pelayanan-alur"
                    class="inline-flex justify-center items-center py-3 px-5 text-sm md:text-sm lg:text-base font-medium text-[#FC6C3F] bg-white border border-orange-500 rounded-lg shadow-md hover:bg-gray-100 focus:ring-4 focus:ring-orange-100">
                    Lihat alur Layanan
                </a>
                {{-- <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-white bg-orange-500 rounded-lg shadow-md hover:bg-orange-600 focus:ring-4 focus:ring-orange-300">
                    Daftar Sekarang
                </a> --}}
            </div>
        </div>
        <!-- Gambar dengan margin lebih kecil di mobile -->
        <img src="{{ asset('Image/Background/header-foto.png') }}" alt="Children Image"
            class="w-screen lg:h-auto md:h-auto h-52 object-cover lg:mb-8" loading="lazy">

    </section>

    {{-- about start --}}
    <section class="pt-8 md:pt-10 lg:pt-12 mx-4" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 lg:px-8">
            <div class="text-center">
                <p class="text-xl lg:text-3xl md:text-3xl leading-9 font-extrabold text-[#FC6C3F]">
                    Panti Rehabilitasi Sosial Penyandang Disabilitas Netra dan Fisik <br class="hidden lg:flex"> Fajar
                    Harapan
                </p>
                <p class="mt-4 text-xs md:text-sm lg:text-lg leading-7 text-[#21272A] lg:text-center text-justify">
                    Merupakan Unit Pelaksana Teknis Daerah Dinas Sosial Provinsi Kalimantan Selatan yang bertugas
                    melaksanakan kegiatan operasional Dinas Sosial di bidang pelayanan, bimbingan, dan rehabilitasi
                    sosial yang bersifat kuratif, rehabilitatif, promotif dalam bentuk bimbingan pengetahuan dasar
                    pendidikan, fisik, mental, sosial, pelatihan keterampilan, resosialisasi bimbingan lanjut serta
                    pelayanan rujukan bagi para penyandang disabilitas sensorik netra dan multi layanan disabilitas
                    fisik agar mampu mandiri dan berperan aktif dalam kehidupan bermasyarakat.
                </p>
            </div>

            <div class="container py-12 px-6 flex flex-wrap lg:flex-row gap-2">
                <!-- Card 1 -->
                <a class="" href="/profile-visidanmisi">
                    <div
                        class="lg:w-[30%] md:w-[30%] group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm rounded-lg sm:px-10">
                        <span
                            class="absolute top-10 z-0 h-20 w-20 rounded-full bg-[#FC6C3F] transition-all duration-300 group-hover:scale-[10]"></span>
                        <div class="relative z-10 mx-auto max-w-md">
                            <span
                                class="grid h-20 w-20 place-items-center rounded-full bg-[#FC6C3F] transition-all duration-300 group-hover:bg-orange-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5"
                                    class="h-10 w-10 text-white transition-all">
                                    <!-- Mata -->
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M1.5 12c2.25-4.5 6.375-7.5 10.5-7.5s8.25 3 10.5 7.5c-2.25 4.5-6.375 7.5-10.5 7.5S3.75 16.5 1.5 12z" />
                                    <!-- Pupil -->
                                    <circle cx="12" cy="12" r="3" />
                                    <!-- Sinyal Misi (garis atas dan bawah) -->
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.5M12 18.5v2.5M6.5 6.5l-1.5-1.5M18 6.5l1.5-1.5" />
                                </svg>
                            </span>
                            <div class="pt-5 text-xl font-semibold leading-7">
                                <p>
                                    <a href="#"
                                        class="text-[#FC6C3F] transition-all duration-300 group-hover:text-white">Profile
                                    </a>
                                </p>
                            </div>
                            <div
                                class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                <p>Menjelaskan Visi dan Misi Panti</p>
                            </div>
                            <div
                                class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 2 -->
                <a class="" href="/profile-sejarah">
                    <div
                        class="lg:w-[30%] md:w-[30%] group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm rounded-lg sm:px-10">
                        <span
                            class="absolute top-10 z-0 h-20 w-20 rounded-full bg-[#FC6C3F] transition-all duration-300 group-hover:scale-[10]"></span>
                        <div class="relative z-10 mx-auto max-w-md">
                            <span
                                class="grid h-20 w-20 place-items-center rounded-full bg-[#FC6C3F] transition-all duration-300 group-hover:bg-orange-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5"
                                    class="h-10 w-10 text-white transition-all">
                                    <!-- Gulungan Kertas -->
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 2.5h8a2.5 2.5 0 0 1 2.5 2.5v11.5a2.5 2.5 0 0 1-2.5 2.5h-8a4 4 0 0 1-4-4V5a2.5 2.5 0 0 1 2.5-2.5z" />
                                    <!-- Ujung Kanan Bawah -->
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 18h2a2 2 0 1 1 0 4h-8" />
                                    <!-- Garis di dalam Gulungan -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h8M8 11h6" />
                                </svg>

                            </span>

                            <div class="pt-5 text-xl font-semibold leading-7">
                                <p>
                                    <a href="#"
                                        class="text-[#FC6C3F] transition-all duration-300 group-hover:text-white">Profile
                                    </a>
                                </p>
                            </div>
                            <div
                                class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                <p>Lihat Perjalanan Sejarah Panti</p>
                            </div>
                            <div
                                class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Card 3 -->
                <a class="" href="/pegawais">
                    <div
                        class="lg:w-[30%] md:w-[30%] group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl sm:mx-auto sm:max-w-sm rounded-lg sm:px-10">
                        <span
                            class="absolute top-10 z-0 h-20 w-20 rounded-full bg-[#FC6C3F] transition-all duration-300 group-hover:scale-[10]"></span>
                        <div class="relative z-10 mx-auto max-w-md">
                            <span
                                class="relative flex h-20 w-20 items-center justify-center rounded-full bg-[#FC6C3F] transition-all duration-300 group-hover:bg-orange-400">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.5"
                                    class="absolute h-10 w-10 text-white transition-all">
                                    <!-- Rumah (Panti) -->
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 10.5L12 3l9 7.5v9.75a1.5 1.5 0 0 1-1.5 1.5h-13.5A1.5 1.5 0 0 1 3 20.25V10.5z" />
                                    <!-- Pintu Rumah -->
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 21V14h4v7" />
                                    <!-- Orang (Pegawai) -->
                                    <circle cx="12" cy="10" r="2.5" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M8 15.5c0-2 1.5-3.5 4-3.5s4 1.5 4 3.5v2h-8v-2z" />
                                </svg>
                            </span>

                            <div class="pt-5 text-xl font-semibold leading-7">
                                <p>
                                    <a href="#"
                                        class="text-[#FC6C3F] transition-all duration-300 group-hover:text-white">Profile
                                    </a>
                                </p>
                            </div>
                            <div
                                class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                <p>Informasi Tentang Pegawai Panti</p>
                            </div>
                            <div
                                class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>
    {{-- about end --}}

    <!-- Section why Start -->
    <section id="count-section" class="py-8 md:py-10 lg:py-12 bg-white rounded-2xl shadow-lg mx-6 lg:mx-8"
        data-aos="fade-up">
        <div class="container mx-auto px-4">
            <!-- Section Title -->
            <h2 class="text-center text-xl md:text-2xl lg:text-3xl font-bold text-[#21272A] mb-4">
                Kenapa harus di <span class="text-[#FC6C3F]">Fajar Harapan?</span>
            </h2>
            <!-- Section Description -->
            <p
                class="text-gray-600 max-w-2xl mx-auto mb-10 text-xs md:text-base lg:text-lg md:text-center lg:text-center text-justify leading-relaxed">
                Fajar Harapan berkomitmen membantu penyandang disabilitas mencapai kemandirian melalui layanan
                rehabilitasi lengkap, tenaga ahli berpengalaman, dan fasilitas ramah disabilitas. Kami mendukung
                pemulihan fisik, mental, dan sosial untuk hidup yang berdaya dan bermakna.
            </p>

            <!-- Cards Start -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">

                <!-- Card 1 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('Image/icon_why/costumer.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count1"></h3>
                        <p class="text-gray-600">client </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('Image/icon_why/group.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count2"></h3>
                        <p class="text-gray-600">Pegawai Panti</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('Image/icon_why/facility.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count3"></h3>
                        <p class="text-gray-600">Fasilitas</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex items-start border rounded-lg p-6 shadow-md bg-white">
                    <!-- Icon -->
                    <div class="bg-gray-200 p-3 rounded-md mr-4">
                        <img src="{{ asset('Image/icon_why/program.png') }}" alt="Icon"
                            class="lg:w-8 lg:h-8 md:w-8 md:h-8 w-5 h-5">
                    </div>
                    <div class="text-left">
                        <h3 class="lg:text-xl md:text-xl text-sm font-semibold text-gray-900" id="count4"></h3>
                        <p class="text-gray-600">Program Pemberdayaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end why --}}

    {{-- service start --}}
    <section class="relative z-30 pt-4 md:py-6 lg:py-8">
        <div class="container mx-auto py-8 px-4">
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Left Image Section -->
                <div class="flex items-center justify-center rounded-xl" data-aos="fade-down">
                    <div class="w-full h-full flex items-center justify-center">
                        <!-- Placeholder for Image -->
                        <img src="{{ asset('Image/Background/bg-program-min.JPG') }}" alt=""
                            class="w-full h-full rounded-tl-[80px] rounded-br-[80px] shadow-md transition-opacity duration-500 opacity-0 lazyload"
                            loading="lazy" onload="this.style.opacity=1">

                    </div>
                </div>

                <!-- Right Content Section -->
                <div class="bg-white p-6 shadow-lg rounded-lg text-center relative z-50" data-aos="fade-up">
                    <h2 class="lg:text-2xl md:text-2xl text-xl font-bold mb-4">Program rehabilitasi yang ada di <span
                            class="text-[#FC6C3F]">Fajar Harapan?</span></h2>
                    <p class="text-gray-600 mb-6">
                        Fajar harapan menyediakan beberapa program yang dapat membantu penyandang disabilitas seperti:
                    </p>

                    <!-- Accordion Section -->
                    <div class="space-y-2 relative">
                        <!-- Button 1 -->
                        <button id="dropdownLeftEndButton1" data-dropdown-toggle="dropdownLeftEnd1"
                            class="flex me-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Fisik</p>
                        </button>

                        <div id="dropdownLeftEnd1"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 rounded-b-xl shadow-lg transition-transform duration-300 ease-in-out">
                            <div
                                class="border-2 rounded-b-xl border-[#FC6C3F] bg-gradient-to-b from-white to-gray-50 dark:from-gray-800 dark:to-gray-700">
                                <ul class="py-3 text-sm text-gray-700 dark:text-gray-200 text-start space-y-2"
                                    aria-labelledby="dropdownLeftEndButton1">
                                    <li class="px-4">
                                        <p class="font-semibold text-[#FC6C3F] underline">Olahraga Kesehatan Jasmani
                                        </p>
                                        <p class="pt-1 text-gray-600 dark:text-gray-300">Program ini bertujuan untuk
                                            menjaga kebugaran tubuh dan
                                            kesehatan jasmani melalui aktivitas fisik teratur, seperti senam atau
                                            latihan ringan.</p>
                                    </li>
                                    <li class="px-4">
                                        <p class="font-semibold text-[#FC6C3F] underline">Olahraga Prestasi (Atletik,
                                            Judo, Renang, dan Tenis
                                            Meja Netra)</p>
                                        <div class="pt-1 text-gray-600 dark:text-gray-300 mt-1">
                                            <ul class="list-disc pl-5 space-y-1">
                                                <li><strong class="text-gray-800 dark:text-gray-200">Atletik:</strong>
                                                    Latihan dan pengembangan
                                                    kemampuan dasar atletik seperti lari, lompat, dan lempar.
                                                </li>
                                                <li><strong class="text-gray-800 dark:text-gray-200">Judo:</strong>
                                                    Latihan teknik-teknik bela
                                                    diri judo yang disesuaikan dengan kebutuhan peserta didik.
                                                </li>
                                                <li><strong class="text-gray-800 dark:text-gray-200">Renang:</strong>
                                                    Pembelajaran teknik
                                                    berenang yang bertujuan untuk meningkatkan kepercayaan diri dan
                                                    kemampuan berenang.
                                                </li>
                                                <li><strong class="text-gray-800 dark:text-gray-200">Tenis Meja
                                                        Netra:</strong> Latihan dan
                                                    pengembangan kemampuan bermain tenis meja untuk peserta didik dengan
                                                    gangguan penglihatan,
                                                    menggunakan teknik dan peralatan khusus.
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <button id="dropdownLeftEndButton2" data-dropdown-toggle="dropdownLeftEnd2"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Mental Spiritual</p>
                        </button>

                        <div id="dropdownLeftEnd2"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-transform duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton2">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Baca tulis Al Qur'an</p>
                                        <p class="block px-4 pb-1">Program untuk membantu peserta didik dalam belajar
                                            membaca dan menulis huruf hijaiyah hingga dapat membaca Al-Qur'an dengan
                                            baik.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Pembacaan Maulid</p>
                                        <p class="block px-4 pb-1">Kegiatan pembacaan syair-syair maulid untuk
                                            memperdalam pemahaman sejarah dan nilai-nilai kehidupan Rasulullah.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Ceramah Agama</p>
                                        <p class="block px-4 pb-1">Penyampaian ceramah agama untuk memperkuat keimanan
                                            dan memberikan pemahaman yang baik mengenai ajaran agama.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Tuntunan Ibadah</p>
                                        <p class="block px-4 pb-1">Pembinaan yang berfokus pada pengenalan dan praktik
                                            ibadah sehari-hari seperti sholat, wudhu, dan doa.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button id="dropdownLeftEndButton3" data-dropdown-toggle="dropdownLeftEnd3"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Sosial</p>
                        </button>

                        <div id="dropdownLeftEnd3"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-all duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton3">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Orientasi Mobilitas</p>
                                        <p class="block px-4 pb-1">Pelatihan untuk membantu peserta didik dalam
                                            mengenali lingkungan sekitar serta mengembangkan kemampuan bergerak secara
                                            mandiri.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Activity of Daily Living
                                            (ADL)</p>
                                        <p class="block px-4 pb-1">Pembelajaran dan pelatihan kegiatan sehari-hari
                                            seperti berpakaian, makan, dan menjaga kebersihan diri agar peserta didik
                                            dapat lebih mandiri.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Pembinaan Kepercayaan Diri
                                            dan Motivasi
                                        </p>
                                        <p class="block px-4 pb-1">Program yang berfokus pada pengembangan rasa percaya
                                            diri dan motivasi diri melalui kegiatan yang membangun semangat serta sikap
                                            positif.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button id="dropdownLeftEndButton4" data-dropdown-toggle="dropdownLeftEnd4"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-start items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Bimbingan Keterampilan atau Vokasional</p>
                        </button>

                        <div id="dropdownLeftEnd4"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-all duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton4">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Menjahit</p>
                                        <p class="block px-4 pb-1"> Pembelajaran keterampilan menjahit untuk
                                            menghasilkan berbagai jenis pakaian atau kerajinan tangan.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Komputer</p>
                                        <p class="block px-4 pb-1">Pelatihan dasar penggunaan komputer dan aplikasi
                                            yang berguna untuk menunjang keahlian di bidang teknologi informasi.</p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Tata Boga</p>
                                        <p class="block px-4 pb-1">Pelatihan memasak dan menyiapkan hidangan, yang
                                            meliputi teori dasar hingga praktik memasak berbagai jenis makanan.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Budidaya Ikan</p>
                                        <p class="block px-4 pb-1"> Pengajaran teknik budidaya ikan yang mencakup
                                            pemeliharaan, pemberian pakan, dan pengelolaan kolam.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Sport Massage dan Shiatsu
                                        </p>
                                        <p class="block px-4 pb-1">Pelatihan keterampilan pijat olahraga dan teknik
                                            shiatsu untuk meningkatkan keterampilan dalam bidang kesehatan dan
                                            relaksasi.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">Musik</p>
                                        <p class="block px-4 pb-1">Pembelajaran memainkan alat musik atau bernyanyi,
                                            serta mengembangkan bakat seni musik peserta didik.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <button id="dropdownLeftEndButton5" data-dropdown-toggle="dropdownLeftEnd5"
                            class="flex me-3 mb-3 md:mb-0 font-medium rounded-lg text-sm px-5 py-2.5 text-start items-center w-full text-black bg-white border-2 border-[#FC6C3F] hover:bg-[#FC6C3F] hover:text-white"
                            type="button">
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                            <p class="ml-4">Pendidikan Formal</p>
                        </button>

                        <div id="dropdownLeftEnd5"
                            class="hidden absolute md:left-0 md:top-full md:mt-2 z-50 w-full rounded-b-xl bg-white divide-y divide-gray-100 dark:bg-gray-700 bottom-full left-0 translate-y-[-10px] md:translate-y-0 transition-opacity duration-300 ease-in-out">
                            <div class="border-2 rounded-b-xl border-[#FC6C3F]">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 text-start"
                                    aria-labelledby="dropdownLeftEndButton5">
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">SDLB (Sekolah Dasar Luar
                                            Biasa)</p>
                                        <p class="block px-4 pb-1">Pendidikan dasar bagi anak berkebutuhan khusus,
                                            memberikan pengajaran yang disesuaikan dengan kemampuan dan kebutuhan siswa.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">SMPLB (Sekolah Menegah
                                            Pertama Luar Biasa)
                                        </p>
                                        <p class="block px-4 pb-1">Pendidikan tingkat menengah pertama yang memberikan
                                            materi pelajaran dengan metode khusus agar peserta didik dapat mengembangkan
                                            pengetahuan dan keterampilan dasar.</p>
                                    </li>
                                    <li>
                                        <p class="block px-4 py-1 underline text-[#FC6C3F]">SMALB (Sekolah Menengah
                                            Atas Luar Biasa)
                                        </p>
                                        <p class="block px-4 pb-1">Pendidikan tingkat menengah atas yang fokus pada
                                            persiapan peserta didik untuk memiliki pengetahuan akademis serta
                                            keterampilan yang diperlukan di dunia kerja atau kehidupan sehari-hari.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Repeat buttons for other dropdowns (Button 2, Button 3, etc.) as necessary -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- service end     --}}

    {{-- fasilitas start --}}
    <section class="z-10 " data-aos="fade">
        <div class="container mx-auto p-4">
            <div class="text-center mb-8">
                <h2 class="lg:text-3xl md:text-2xl text-xl font-bold text-[#FC6C3F] py-4">Fasilitas yang disediakan
                    di<span class="text-black"> Fajar Harapan</span></h2>
                <p class="text-gray-700 text-xs md:text-base lg:text-lg">Fajar Harapan menyediakan beberapa layanan
                    yang dapat membantu penyandang
                    disabilitas seperti:</p>
            </div>
            <!-- Section Layout -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center justify-center">
                <!-- Grid of Facility Items -->
                <div class="col-span-4 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-2">
                    <!-- Facility Item -->
                    <!-- Trigger Element -->
                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup1')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/office-building.png') }}"
                                alt="Gedung Perkantoran" class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Gedung Perkantoran</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup1"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup1')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/4d5ac62fb8984793b61ff387633d230e?utm_campaign=embed&utm_source=other&heading=450.06&pitch=-6.77&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup2')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Gedung-Sekolah.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Gedung Sekolah Luar Biasa</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup2"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup2')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/3a314ec4bc504d0c8443609c68af1f1d?utm_campaign=embed&utm_source=other&heading=599.87&pitch=13.59&field-of-view=100&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>

                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup3')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Asrama.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Gedung Asrama Putra</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup3"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup3')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/9d5845b225044b41ad4c22f119090319?utm_campaign=embed&utm_source=other&heading=-546.59&pitch=-12.32&field-of-view=71&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup15')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Asrama.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Gedung Asrama Putri</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup15"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup15')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/10c765cf033340e4aec4f165090d6fda?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup4')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Musholla_.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Musholla</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup4"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup4')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/bd8ab31088d64a71bd83dface76fad21?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup5')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Aula.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Aula</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup5"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup5')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/4b3f7a08463c44acb8f5bc24d36368c6?utm_campaign=embed&utm_source=other&heading=358.43&pitch=-8.45&field-of-view=61.5&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup6')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Ruang-Musik.png') }}" alt="Ruang Musik"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Ruang Musik</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup6"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup6')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/ade33cfb79be44c3aeeaf14dfaf04eaa?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup7')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Ruang-Makan.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Ruang Makan</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup7"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup7')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/8dad485231ef4c6bbed54ce117588e29?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup8')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/lab-comp.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Laboratorium Komputer Braille</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup8"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup8')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/88bb6bbb6b8648248064fe054d29cfb6?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup9')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/fitnes.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Ruang Fitness</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup9"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup9')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/d88cabfcf91749ea82a4512160ac1a13?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup10')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Perpustakaan.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Perpustakaan</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup10"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup10')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/eaf4bd5034a94f60877a39d3057a3876?utm_campaign=embed&utm_source=other&heading=352.45&pitch=-1.29&field-of-view=67&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup11')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Klinik.png') }}" alt="Klinik Kesehatan"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Klinik Kesehatan</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup11"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup11')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/539399f988244542bc6be879f09c5649?utm_campaign=embed&utm_source=other&heading=356.46&pitch=1.4&field-of-view=71&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup122')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Mobil.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Mobil Operasi</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup12"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup12')">[ X
                                ]</button>
                            <div>
                                <iframe src=""
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0">
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup13')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Gedung-Diklat.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Gedung Diklat</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup133"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup13')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/d88cabfcf91749ea82a4512160ac1a13?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0">
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup14')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/Guest-House.png') }}" alt="Gedung Perkantoran"
                                class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Guest House</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup14"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup14')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/3556f292b1d64f2fa563991ee6b436d8?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-4 bg-white rounded-lg text-center transition duration-300 hover:scale-105 hover:bg-gray-400"
                        onclick="togglePopup('popup16')">
                        <div class="flex items-center justify-center w-full h-24 rounded mb-2 relative">
                            <img src="{{ asset('Image/icon_fasilitas/sewing-machine.png') }}"
                                alt="Gedung Perkantoran" class="h-full w-auto">
                        </div>
                        <h3 class="text-gray-700">Ruang Jahit</h3>
                        <div
                            class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white text-lg font-semibold opacity-0 transition-opacity duration-300 hover:opacity-100 rounded-lg">
                            Lihat 360°
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="popup16"
                        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center hidden z-50">
                        <div class="bg-white p-8 rounded-lg shadow-lg relative">
                            <button class="absolute top-2 right-2 text-gray-500" onclick="togglePopup('popup16')">[ X
                                ]</button>
                            <div>
                                <iframe
                                    src="https://momento360.com/e/u/3a4a12037f404ae78e995c14f0b68733?utm_campaign=embed&utm_source=other&heading=0&pitch=0&field-of-view=75&size=medium&autoplay-annotations=true"
                                    class="lg:w-[900px] lg:h-[450px] w-[280px] h-[150px] md:w-[560px] md:h-[380px]"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <script>
                        function togglePopup(popupId) {
                            const popup = document.getElementById(popupId);
                            popup.classList.toggle('hidden');
                        }
                    </script>

                </div>
                <!-- Detail Section -->
                {{-- <div class="col-span-1 p-4 bg-white rounded-lg shadow">
                        <div class="w-full h-80 bg-gray-300 rounded mb-4"></div>
                        <h3 class="text-xl font-semibold mb-2">Fasilitas 1</h3>
                        <p class="text-gray-600 mb-4">
                            Lorem ipsum dolor sit amet consectetur. Nunc mattis vitae ridiculus at lorem tortor
                            vestibulum. Nam elit tincidunt urna non vulputate accumsan.
                        </p>
                        <a href="#" class="text-indigo-600 font-semibold">Lihat dalam 360° &rarr;</a>
                    </div> --}}
            </div>

            <!-- Load More Button -->
            {{-- <div class="flex justify-center mt-6">
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                        Lihat Lebih Banyak
                    </button>
                </div> --}}
        </div>
    </section>
    {{-- fasilitas end --}}

    {{-- gallery start --}}
    <div data-aos="fade">
        <div class="container mx-auto px-4 lg:py-16 py-8 text-center justify-center md:px-12 lg:px-32">
            <h2 class="lg:text-3xl md:text-2xl text-xl font-extrabold text-gray-900 mb-8">
                Jelajahi momen-momen inspiratif di <span class="text-orange-500">Fajar Harapan!</span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Large item -->
                <a href="/gallery"
                    class="md:col-span-2 md:row-span-2 relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-1.JPG') }}"
                        class="w-full h-full object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h3 class="lg:text-2xl md:text-2xl text-xl font-bold text-white">Lihat Lebih Banyak</h3>
                        </div>
                    </div>
                </a>

                <!-- Small items -->
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-2.JPG') }}" alt="Food"
                        class="w-full h-56 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-3.JPG') }}" alt="Technology"
                        class="w-full h-56 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>

                <!-- Medium items -->
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-4.JPG') }}" alt="Travel"
                        class="w-full h-56 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-5.jpg') }}" alt="Art"
                        class="w-full h-56 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>

                <!-- Additional items -->
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-6.JPG') }}" alt="Sport"
                        class="w-full h-48 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-7.JPG') }}" alt="Sport"
                        class="w-full h-48 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/galeri-8.JPG') }}" alt="Sport"
                        class="w-full h-48 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>
                <a href="/gallery" class="relative overflow-hidden rounded-2xl shadow-lg group">
                    <img src="{{ asset('Image/prspdnf/gambar10.JPG') }}" alt="Sport"
                        class="w-full h-48 object-cover lazyload transition-opacity duration-500 opacity-0"
                        loading="lazy" onload="this.style.opacity=1">
                    <div
                        class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-4">
                            <h4 class="text-xl font-bold text-white">Lihat Lebih Banyak</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- gallery end --}}

    {{-- news start --}}
    <style>
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
    <div class="relative flex p-6 flex-col items-center justify-center lg:px-32 rounded-xl" data-aos="fade-down">
        <h2 class="lg:text-3xl md:text-2xl text-xl font-extrabold text-gray-900 mb-8">
            Lihat Berita terbaru di <span class="text-orange-500">Fajar Harapan!</span>
        </h2>
        <div class="">
        </div>
        <div
            class="carousel scrollbar-hide flex w-full snap-x snap-mandatory gap-4 overflow-x-scroll scroll-smooth pb- rounded-xl">
            @foreach ($recentNewsHeader as $newsItem)
                <div
                    class="relative aspect-[1/1] h-96 lg:w-[33%] w-[100%] shrink-0 snap-start snap-always rounded-xl bg-blue-200 overflow-hidden">
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
                            <h1
                                class="title-font text-base lg:text-lg font-medium text-white mb-2 hover:text-gray-300">
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
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"
                                    style="outline: none;">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                {{ $newsItem->views }}
                            </span>
                            <span class="text-gray-300 inline-flex items-center leading-none text-sm">
                                <svg class="w-5 h-5 text-gray-300" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24" style="outline: none;">
                                    <path stroke="currentColor"
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
        <div class="mt-4 hover:text-orange-500 hover:border-orange-500 p-2 rounded-lg border-2 border-gray-700 ">
            <a href="/news">
                <button class="">Berita Lainnya</button>
            </a>
        </div>
    </div>
    <script>
        // JavaScript carousel script
        const container = document.querySelector('.carousel');
        const slides = document.querySelectorAll('.carousel > div');
        const dots = document.querySelectorAll('.pagination > span');
        const prevBtn = document.querySelector('.prev-btn');
        const nextBtn = document.querySelector('.next-btn');

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
            return Math.round((container.scrollLeft + containerWidth / 2) / slideWidth);
        }

        startAutoScroll();
    </script>
    {{-- news end --}}

    {{-- review  start --}}
    <x-review></x-review>

    {{-- review end --}}
    <div class="flex flex-col lg:flex-row items-center bg-[#5959CD] rounded-xl shadow-xl md:mx-4 mx-4 lg:mx-40 my-12">
        <div class="flex lg:w-1/2 w-full lg:h-96 lg:mb-0 justify-center rounded-xl bg-white">
            <img src="{{ asset('Image/Background/image221.png') }}" alt="Image"
                class="justify-center items-center object-cover rounded-t-xl lg:rounded-xl" loading="lazy">
        </div>
        <div class="lg:w-1/2 w-full text-white rounded-lg lg:px-12 p-6 lg:py-0">
            <h2 class="text-sm lg:text-md uppercase font-semibold tracking-wider text-center lg:text-left">
                Kami adalah jawaban terbaik yang pernah Anda temukan
            </h2>
            <h1 class="text-xl md:text-xl lg:text-2xl font-bold text-center lg:text-left my-6">
                Tunggu apalagi? <br> <span class="text-orange-400">Segera bergabung</span> bersama keluarga besar kami
                sekarang dan rasakan perubahan yang terjadi di hidup Anda!
            </h1>
        </div>
    </div>

    {{-- kerjasama --}}
    <style>
        /* Pause animasi saat hover pada elemen parent dengan class "group" */
        .group:hover .animate-loop-scroll {
            animation-play-state: paused;
        }
    </style>
    <section class="py-6 rounded-xl mx-4 md:mx-8 lg:mx-8 my-8 bg-white shadow-xl" data-aos="fade-up">
        <div class="w-full text-center text-xl md:text-2xl lg:text-3xl font-semibold lg:pb-8 md:pb-4 pb-4">Kerjasama
        </div>
        <div class="relative flex overflow-hidden space-x-8 md:space-x-16 group md:pb-4 pb-2">
            <!-- Left Blur -->
            <div
                class=" absolute inset-y-0 left-0 w-24 md:w-48 bg-gradient-to-r from-white to-transparent pointer-events-none blur-[3px] z-10">
            </div>

            <div class="flex space-x-8 md:space-x-16 animate-loop-scroll">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/LOGO KABUPATEN BALANGAN.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image0">
                <img loading="lazy"
                    src="{{ asset('Image/logo-dinas/download-logo-kabupaten-hulu-sungai-utara-enkosa.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image1">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Kab Hulu Sungai Tengah.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image2">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Lambang_Kabupaten_Hulu_Sungai_Selatan.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image3">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/banjarbaru-removebg-preview.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image4">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Banjarmasin.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image5">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/LOGO_KAB_BANJAR.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image6">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Lambang_Kabupaten_Kotabaru.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image7">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/kabupaten barito kuala.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image8">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/sambanglihum.jpg') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image8">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/tanah_bumbu.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image9">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/tanah-laut.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image9">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/tabalong.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image9">
            </div>

            <!-- Hidden Scrolling Images for Loop -->
            <div class="flex space-x-8 md:space-x-16 animate-loop-scroll " aria-hidden="true">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/LOGO KABUPATEN BALANGAN.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image0">
                <img loading="lazy"
                    src="{{ asset('Image/logo-dinas/download-logo-kabupaten-hulu-sungai-utara-enkosa.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image1">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Kab Hulu Sungai Tengah.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image2">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Lambang_Kabupaten_Hulu_Sungai_Selatan.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image3">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/banjarbaru-removebg-preview.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image4">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Banjarmasin.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image5">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/LOGO_KAB_BANJAR.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image6">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/Lambang_Kabupaten_Kotabaru.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image7">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/kabupaten barito kuala.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image8">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/sambanglihum.jpg') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image8">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/tanah_bumbu.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image9">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/tanah-laut.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image9">
                <img loading="lazy" src="{{ asset('Image/logo-dinas/tabalong.png') }}"
                    class="max-w-none h-16 md:h-24 lg:h-32" alt="image9">
            </div>



            <div
                class="absolute inset-y-0 right-0 w-24 md:w-48 bg-gradient-to-l from-white to-transparent pointer-events-none blur-[3px] z-10">
            </div>
        </div>
    </section>
    {{-- kerjasama end --}}

    {{-- footer start --}}
    <footer class="bg-[#697077]">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <!-- Logo Section -->
            <div class="mb-6 md:mb-0">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <!-- Logo with responsive sizing -->
                    <img src="{{ asset('Image/icon/Logo PRSPDNF-FH.png') }}" class="h-8 md:h-10 lg:h-12"
                        alt="PRSPDNF Logo" />

                    <div class="flex flex-col items-center">
                        <!-- Text with responsive font sizes -->
                        <span class="uppercase text-center text-white text-xs md:text-sm lg:text-sm">PRSPDNF</span>
                        <span class="font-semibold text-white text-sm md:text-lg lg:text-base">Fajar Harapan</span>
                    </div>

                </a>
                <!-- Extended Horizontal Line -->
                <hr class="my-6 border-white sm:mx-auto lg:my-8 w-full" />
            </div>

            <div class="flex flex-col md:flex-row md:justify-between">
                <!-- Google Maps Iframe Section -->
                <div class="flex flex-col lg:flex-row gap-6 my-4 ">
                    <!-- Map Section -->
                    <div class="relative w-full h-48 lg:w-64 lg:h-64">
                        <iframe class="absolute top-0 left-0 w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1636.6910057401503!2d114.84816214009834!3d-3.4349755711262553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de68107a087de0f%3A0xc044bbadaaf31076!2sPanti%20Rehabilitasi%20Sosial%20Penyandang%20Disabilitas%20Netra%20dan%20Fisik%20(PRSPDNF)%20Fajar%20Harapan!5e0!3m2!1sid!2sid!4v1727917508162!5m2!1sid!2sid"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0">
                        </iframe>
                    </div>

                    <!-- Address and Contact Information Section -->
                    <div class="flex flex-col lg:text-sm md:text-sm text-xs w-64 text-white">
                        <p class=" font-semibold">Alamat Lengkap:</p>
                        <p>Jl. A. Yani, Sungai Paring, Kec. Martapura, Kabupaten Banjar, Kalimantan Selatan 70714</p>

                        <p class="mt-4  font-semibold">Kontak:</p>
                        <p>Telepon: (0813) 4616-1962</p>

                    </div>
                </div>

                <!-- Menus (Resources, Follow Us, Legal) -->
                <div class="grid grid-cols-2 gap-6 lg:grid-cols-4 md:grid-cols-3 mt-4 md:mt-0 md:ml-8 text-left pt-3">
                    <div>
                        <h2
                            class="mb-6 text-sm lg:text-base md:text-base font-semibold text-white uppercase dark:text-white">
                            Profile</h2>
                        <ul class="text-white dark:text-white font-medium">
                            <li class="mb-4 text-xs lg:text-base md:text-base ">
                                <a href="/profile-visidanmisi" class="hover:underline">Visi & Misi</a>
                            </li>
                            <li class="mb-4 text-xs lg:text-base md:text-base">
                                <a href="/profile-sejarah" class="hover:underline">Sejarah</a>
                            </li>
                            <li class="text-xs lg:text-base md:text-base">
                                <a href="/pegawais" class="hover:underline">Pegawai Panti</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2
                            class="mb-6 text-sm lg:text-base md:text-base font-semibold text-white uppercase dark:text-white">
                            Layanan</h2>
                        <ul class="text-white dark:text-white font-medium">
                            <li class="mb-4 text-xs lg:text-base md:text-base">
                                <a href="/pelayanan-persyaratan" class="hover:underline">Persyaratan</a>
                            </li>
                            <li class="text-xs lg:text-base md:text-base">
                                <a href="/pelayanan-alur" class="hover:underline">Alur Pelayanan</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h2
                            class="mb-6 text-sm lg:text-base md:text-base font-semibold text-white uppercase dark:text-white">
                            Gallery</h2>
                        <ul class="text-white dark:text-white font-medium">
                            <li class="mb-4 text-xs lg:text-base md:text-base">
                                <a href="/gallery" class="hover:underline">Foto</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Horizontal Icons Section for Join Us -->
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-white uppercase dark:text-white">Ikuti Kami</h2>
                        <ul class="flex space-x-5">
                            <a href="https://www.facebook.com/prspdnffajarharapan"
                                class="text-white hover:text-gray-900 dark:hover:text-white bg-gray-600 hover:bg-gray-300 p-1 rounded-full">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Facebook page</span>
                            </a>

                            <a href="https://www.youtube.com/@Fajar_harapan"
                                class="text-white hover:text-gray-900 dark:hover:text-white ms-5 bg-gray-600 hover:bg-gray-300 p-1 rounded-full">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <span class="sr-only">youtube</span>
                            </a>

                            <a href="https://www.instagram.com/prspdnffajarharapan?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                class="text-white hover:text-gray-900 dark:hover:text-white ms-5 bg-gray-600 hover:bg-gray-300 p-1 rounded-full">
                                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="sr-only">Instagram account</span>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <hr class="my-6 border-white sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between flex flex-col-reverse sm:flex-row">
                <span class="lg:text-sm md-text-sm text-xs text-white sm:text-center dark:text-white">
                    © 2024 <a href="#" class="hover:underline">Magang PRSPDNF FH</a> @ All Rights Reserved.
                </span>
                <div class="text-white flex mb-4 sm:justify-center sm:mb-0 space-x-4">
                    <a href="/" class="hover:underline">Home</a>
                    <a href="aboutus" class="hover:underline">About us</a>
                </div>
            </div>
        </div>
    </footer>
    {{-- footer end --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])
</body>

</html>
