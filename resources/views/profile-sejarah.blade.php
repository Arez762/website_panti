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
    <title>PRSPDNF</title>
</head>

<body class=" font-poppins flex flex-col min-h-screen"
    style="background-image: url('{{ asset('Image/Background/bg-page.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
    <x-navbar></x-navbar>

    <section class="relative bg-cover bg-center lg:h-96 h-48 lg:pt-24 pt-2"
        style="background-image: url('{{ asset('Image/Background/Nav-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10 text-center justify-center text-white py-20 ">
            <!-- Top Small Title -->
            <h3 class="text-md lg:text-2xl text-white">Profil</h3>
            <!-- Orange underline below 'Profil' -->
            <div class="w-12 lg:w-20 h-1 bg-orange-500 mx-auto my-2"></div>
            <!-- Large Bold Title -->
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Sejarah Fajar Harapan</h1>
        </div>
    </section>

    <!-- component -->
    <div class="w-full">
        <div class="h-auto w-full flex flex-col justify-center items-center">
            <div class="bg-white/30 backdrop-blur-lg border-2 border-[#FC6C3F] rounded-lg px-4 py-6 mb-10 lg:w-2/4 mt-12 m-4 justify-start items-center "
                data-aos="fade">
                <h2 class="text-[#FC6C3F] text-center lg:text-2xl text-xl font-bold mb-4">Awal Mula</h2>
                <p class="text-center text-gray-700 lg:text-base text-sm">
                    Fajar Harapan didirikan dengan tujuan mulia untuk mendukung penyandang disabilitas dalam mencapai
                    kemandirian dan kualitas hidup yang lebih baik. Sejak awal berdiri, panti ini telah berkomitmen
                    untuk memberikan layanan rehabilitasi yang komprehensif, pendidikan inklusif, dan program
                    pemberdayaan yang membantu penerima manfaat berkembang dan berkontribusi positif di masyarakat.
                </p>
            </div>

            <div class="border-2 border-[#FC6C3F] py-3 px-8 rounded-lg shadow-lg justify-start items-center bg-white/30 backdrop-blur-lg"
                data-aos="fade-up">
                <p class=" text-lg lg:text-2xl font-bold text-[#FC6C3F]">1962</p>
            </div>
        </div>

        <div class="flex flex-col md:grid grid-cols-9 mx-auto lg:mx-32 p-2 text-blue-50">
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
                <div class="bg-white col-start-1 col-end-5 p-8 rounded-xl my-4 ml-auto border-2 border-[#FC6C3F] shadow-lg bg-white/30 backdrop-blur-lg"
                    data-aos="fade-up">
                    <h3 class="font-semibold text-lg lg:text-2xl text-[#FC6C3F] text-center mb-4">3 Januari</h3>
                    <p class="text-center text-sm lg:text-base  text-gray-700">
                        Didirikan oleh Kantor Perwakilan Sosial Provinsi Kalimantan Selatan
                    </p>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#FC6C3F] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#FC6C3F] shadow"></div>
                </div>
            </div>

            <!-- right -->
            <div class="flex md:contents">
                <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#FC6C3F] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#FC6C3F] shadow"></div>
                </div>
                <div class="bg-white col-start-6 col-end-10 p-8 rounded-xl my-4 mr-auto border-2 border-[#FC6C3F] shadow-lg bg-white/30 backdrop-blur-lg"
                    data-aos="fade-up">
                    <h3 class="font-semibold text-lg lg:text-2xl text-[#FC6C3F] text-center mb-4">3 Juli</h3>
                    <p class="text-center text-sm lg:text-base  text-gray-700">
                        Mulai Operasional di Jl. A. Yani
                        Km. 37,5 Martapura dengan klasifikasi
                        Tipe B Eleson IV/a
                    </p>
                </div>
            </div>

            <!-- left -->

        </div>


        <div class="h-auto w-full flex flex-col justify-start items-center " data-aos="fade-up">
            <div class="border-2 border-[#FC6C3F] py-3 px-8 rounded-lg shadow-lg justify-start items-center bg-white/30 backdrop-blur-lg"
                data-aos="fade">
                <p class="text-lg lg:text-2xl font-bold text-[#FC6C3F]">2000</p>
            </div>
        </div>

        <div class="flex flex-col md:grid grid-cols-9 mx-auto lg:mx-32 p-2 text-blue-50">
            <div class="flex flex-row-reverse md:contents">
                <div class="bg-white col-start-1 col-end-5 p-8 rounded-xl my-4 ml-auto border-2 border-[#FC6C3F] shadow-lg bg-white/30 backdrop-blur-lg"
                    data-aos="fade-up">
                    <h3 class="font-semibold text-lg lg:text-2xl text-[#FC6C3F] text-center mb-4">04 Mei</h3>
                    <p class="text-center text-sm lg:text-base  text-gray-700">
                        Dilikuiditasinya Depertemen
                        Sosial PSBN Fajar Harapandibawah Badan Kesejahteraan
                        Sosial Nasional (BKSN) Berdasarkan SK No. 01/HUK/BKSN/2000
                        Tentang Organisasi dan Tata Kerja BKSN
                    </p>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#FC6C3F] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#FC6C3F] shadow"></div>
                </div>
            </div>
            <!-- right -->
            <div class="flex md:contents">
                <div class="col-start-5 col-end-6 mr-10 md:mx-auto relative">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div class="h-full w-1 bg-[#FC6C3F] pointer-events-none"></div>
                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#FC6C3F] shadow"></div>
                </div>
                <div class="bg-white col-start-6 col-end-10 p-8 rounded-xl my-4 mr-auto border-2 border-[#FC6C3F] shadow-lg bg-white/30 backdrop-blur-lg"
                    data-aos="fade-up">
                    <h3 class="font-semibold text-lg lg:text-2xl text-[#FC6C3F] text-center mb-4">September</h3>
                    <p class="text-center text-sm lg:text-base  text-gray-700">
                        Kedudukan dan status PSBN Fajar Harapan
                        dialihkan ke Pemerintah Daerah
                        Provinsi Kalimantan Selatan
                    </p>
                </div>
            </div>
        </div>
        <div class="h-auto w-full flex flex-col justify-start items-center " data-aos="fade-up">
            <div class="border-2 border-[#FC6C3F] py-3 px-8 rounded-lg shadow-lg justify-start items-center bg-white/30 backdrop-blur-lg"
                data-aos="fade">
                <p class="text-lg lg:text-2xl font-bold text-[#FC6C3F]">2020</p>
            </div>
        </div>

        <div class="flex flex-col md:grid grid-cols-9 mx-auto lg:mx-32 p-2 text-blue-50">
            <div class="flex flex-row-reverse md:contents">
                <div class="bg-white col-start-1 col-end-5 p-8 rounded-xl my-4 ml-auto border-2 border-[#FC6C3F] shadow-lg bg-white/30 backdrop-blur-lg"
                    data-aos="fade-up">
                    <h3 class="font-semibold text-lg lg:text-2xl text-[#FC6C3F] text-center mb-4">15 Februari</h3>
                    <p class="text-center text-sm lg:text-base text-gray-700">
                        PSBN Fajar Harapan berubah menjadi Panti Rehabilitasi Sosial Penyandang Disabilitas Netra dan
                        Fisik sesuai dengan Peraturan Gubernur
                        Kalimantan Selatan Nomor 05 Tahun 2022 tentang Pembentukan, Organisasi, dan Tata Kerja Unit
                        Pelaksana Teknis Daerah
                        pada Dinas Sosial
                    </p>
                </div>
                <div class="col-start-5 col-end-6 md:mx-auto relative mr-10">
                    <div class="h-full w-6 flex items-center justify-center">
                        <div
                            class="h-full w-1 bg-gradient-to-b from-[#FC6C3F] to-[#FC6C3F]/0 pointer-events-none shadow-[0_10px_10px_-5px_rgba(252,108,63,0.5)]">
                        </div>

                    </div>
                    <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-[#FC6C3F] shadow"></div>
                </div>
            </div>
        </div>

        <div class="h-auto w-full flex flex-col justify-start items-center">
            <div class="bg-white border-2 border-[#FC6C3F] rounded-lg px-4 py-6 mb-10 lg:w-2/4 mt-10 m-4 justify-start items-center bg-white/30 backdrop-blur-lg"
                data-aos="fade">
                <h2 class="text-[#FC6C3F] text-center lg:text-2xl text-xl font-bold mb-4">Terus Berkembang Hingga Saat
                    Ini</h2>
                <p class="text-center text-gray-700 lg:text-base text-sm">
                    Fajar Harapan didirikan dengan tujuan mulia untuk mendukung penyandang disabilitas dalam mencapai
                    kemandirian dan kualitas hidup yang lebih baik. Sejak awal berdiri, panti ini telah berkomitmen
                    untuk memberikan layanan rehabilitasi yang komprehensif, pendidikan inklusif, dan program
                    pemberdayaan yang membantu penerima manfaat berkembang dan berkontribusi positif di masyarakat.
                </p>
            </div>
        </div>

    </div>
    {{-- <x-card-all></x-card-all> --}}
    <x-footer></x-footer>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])



</body>

</html>
