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

<body class="bg-[#F3F4F8] font-poppins flex flex-col min-h-screen"
    style="background-image: url('{{ asset('Image/Background/bg-page.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

    <x-navbar></x-navbar>

    <section class="relative bg-cover bg-center lg:h-96 h-48 lg:pt-24 pt-2"
        style="background-image: url('{{ asset('Image/Background/Nav-bg.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10 text-center justify-center text-white py-20">
            <!-- Top Small Title -->
            <h3 class="text-md lg:text-2xl text-white">Layanan</h3>
            <!-- Orange underline below 'Profil' -->
            <div class="w-20 lg:w-28 h-1 bg-orange-500 mx-auto my-2"></div>
            <!-- Large Bold Title -->
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Alur Pelayanan</h1>
        </div>
    </section>

    <section class=" py-12 sm:py-16 lg:py-20 xl:py-24 px-4">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 border-2 border-[#FC6C3F] rounded-xl bg-white/30 backdrop-blur-lg">
            <div class="text-center">
                <h2 class="my-12  text-xl font-bold tracking-tight text-[#FC6C3F] sm:text-4xl lg:text-3xl">Tahapan pelayan rehabilitasi sosial di panti PRSPDNF Fajar Harapan
                </h2>
            </div>
            <ul class="mx-auto pb-12 grid max-w-md grid-cols-1 gap-10 sm:mt-16 lg:max-w-5xl lg:grid-cols-4">
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="100">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                        class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        1
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                            class="lg:text-xl text-base font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Pendaftaran
                        </h3>
                        <h4 class="mt-2 text-sm text-gray-700">Disampaikan secara langsung oleh masyarakat atau melalui Dinas Sosial Kabupaten/Kota</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="200">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                    class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        2
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                        class="text-xl font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Pendekatan Awal
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700">Proses konsultasi, identifikasi, motivasi dan seleksi (proses 1 hari)</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="300">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                    class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        3
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                        class="text-xl font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Penerimaan
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700">Registrasi (proses 1 hari)</h4>
                    </div>
                </li>
                
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="400">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                    class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        4
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                        class="text-xl font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Assesmen
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700">Penggalian potensi, minat bakat dan motivasi penerima manfaat (proses 1 hari)</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="500">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                    class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        5
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                        class="text-xl font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Penyelenggaraan Program
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700">Bimbingan fisik, mental, sosial, dan keterampilan (Berlangsung selama 6 bulan untuk disabilitas fisik dan menyesuaikan perkembangan resos dan disabilitas netra)</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="600">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                    class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        6
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                        class="text-xl font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Resosialisasi
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700">Upaya pengembalian Penerima Manfaat ke dalam keluarga/masyarakat</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="700">
                    <span
                        class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                        aria-hidden="true"></span>
                    <div
                    class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        7
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                        class="text-xl font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Bimbingan Lanjut
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700">Kegiatan Pemantapan kemandirian Penerima Manfaat setelah memperoleh pelayanan resos</h4>
                    </div>
                </li>
                <li class="flex-start group relative flex lg:flex-col" data-aos="fade" data-aos-delay="800">
                    <div
                    class="text-xl hover:text-black text-white inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-[#FC6C3F] transition-all duration-200 hover:bg-white">
                        8
                    </div>
                    <div class="ml-6 lg:ml-0 lg:mt-10">
                        <h3
                            class="text-xl font-bold text-[#FC6C3F] before:mb-2 before:block before:font-mono before:text-sm">
                            Terminasi
                        </h3>
                        <h4 class="mt-2 text-base text-gray-700">Pemutusan pemberian pelayanan rehabilitasi sosial</h4>
                    </div>
                </li>
            </ul>
            
        </div>
    </section>

    <x-footer></x-footer>



    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
