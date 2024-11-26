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
            <h3 class="text-md lg:text-2xl text-white">Profil</h3>
            <!-- Orange underline below 'Profil' -->
            <div class="w-12 lg:w-20 h-1 bg-orange-500 mx-auto my-2"></div>
            <!-- Large Bold Title -->
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Visi & Misi Fajar Harapan</h1>
        </div>
    </section>

    <section class="flex flex-col items-center justify-center py-20 w-auto p-6"
        style="background-image: url('{{ asset('Image/Background/your-background-image.jpg') }}'); background-size: cover; background-attachment: fixed;">
        <div class="border-2 border-[#FC6C3F] lg:w-[60%] w-full h-auto rounded-xl p-4 m-2 bg-white/30 backdrop-blur-lg" data-aos="fade-right">
            <div class="w-full justify-center text-center text-4xl font-bold py-3 text-[#FC6C3F] ">Visi</div>
            <div class="text-center text-base lg:text-xl text-gray-700">Terwujudnya kesetaraan dan kemandirian penyandang
                disabilitas netra dan fisik melalui pelayanan rehabilitasi sosial prima</div>
        </div>
        <div class="border-2 border-[#FC6C3F] lg:w-[60%] w-full h-auto rounded-xl p-4 m-2 bg-white/30 backdrop-blur-lg" data-aos="fade-right">
            <div class="w-full justify-center text-center text-4xl font-bold py-3 text-[#FC6C3F] ">Misi</div>
            <div class="grid lg:grid-cols-2 grid-col-1 gap-4">
                <div class="flex lg:p-4 rounded text-justify ">
                    <div class="text-xl"><svg class="w-6 h-6 text-gray-700 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                    </div> 
                    <div class="text-gray-700">Memulihkan, meningkatkan rasa harga diri, percaya diri, kecintaan
                        berkarya dan kesadaran serta tanggung jawab terhadap masa depan
                        diri sendiri, keluarga, dan masyarakat atau lingkungan sosialnya.</div>
                </div>
                <div class="flex lg:p-4 rounded text-justify ">
                    <div class="text-xl"><svg class="w-6 h-6 text-gray-700 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                    </div>
                    <div class="text-gray-700">Meningkatkan sumber daya penyandang disabilitas netra dan fisik</div>
                </div>
                <div class="flex lg:p-4 rounded text-justify ">
                    <div class="text-xl"><svg class="w-6 h-6 text-gray-700 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                    </div>
                    <div class="text-gray-700">Meningkatkan kesadaran dan tanggungjawab bagi penyandang
                        disabilitas netra dan fisik untuk ikut berperan serta dalam proses
                        pembangunan nasional</div>
                </div>
                <div class="flex lg:p-4 rounded text-justify ">
                    <div class="text-xl"><svg class="w-6 h-6 text-gray-700 " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="2" />
                        </svg>
                    </div>
                    <div class="text-gray-700">Menjalin kerjasama dengan organisasi masyarakat dan instansi
                        terkait
                        dalam rangka meningkatkan pelayanan sosial bagi penyandang
                        disabilitas netra dan fisik</div>
                </div>
            </div>
        </div>
    </section>


    {{-- <x-card-all></x-card-all> --}}
    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
