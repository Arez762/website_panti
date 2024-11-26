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

    <section class="relative bg-cover bg-center lg:h-96 h-48 lg:pt-24 pt-2 lazy-bg"
        data-bg-url="{{ asset('Image/Background/Nav-bg.jpg') }}">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10 text-center justify-center text-white py-20">
            <!-- Top Small Title -->
            <h3 class="text-md lg:text-2xl text-white">Profil</h3>
            <!-- Orange underline below 'Profil' -->
            <div class="w-12 lg:w-20 h-1 bg-orange-500 mx-auto my-2"></div>
            <!-- Large Bold Title -->
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Pegawai Panti</h1>
        </div>
    </section>

    <script>
        // JavaScript to handle lazy loading for background image
        document.addEventListener("DOMContentLoaded", function() {
            const lazyBg = document.querySelector('.lazy-bg');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const bgUrl = lazyBg.getAttribute('data-bg-url');
                        lazyBg.style.backgroundImage = `url('${bgUrl}')`;
                        observer.unobserve(lazyBg);
                    }
                });
            });
            observer.observe(lazyBg);
        });
    </script>



    <section class="flex flex-col items-center justify-center py-12 w-auto p-6"
        style="background-image: url('{{ asset('Image/Background/your-background-image.jpg') }}'); background-size: cover; background-attachment: fixed;">
        <div class="border-2 border-[#FC6C3F] lg:w-[90%] w-full h-auto rounded-xl p-8 lg:p-12 m-2 bg-white/30 backdrop-blur-lg"
            data-aos="fade-up">

            <div class="w-full text-center text-sm pb-4 lg:text-3xl font-bold lg:px-12 lg:py-6 text-[#FC6C3F]">
                Struktur Organisasi Panti Rehabilitasi Sosial Penyandang Disabilitas Netra dan Fisik Fajar Harapan
            </div>

            <div class="flex justify-center items-center">
                <img src="{{ asset('Image/Background/struktur Organisasi (2).png') }}" class="lg:py-6" alt="">
            </div>
        </div>

        <div class="border-2 border-[#FC6C3F] lg:w-[90%] w-full h-auto rounded-xl p-8 lg:p-12 m-2 bg-white/30 backdrop-blur-lg"
            data-aos="fade-up">
            <div class="w-full text-center text-xl lg:text-3xl font-bold lg:px-12 lg:py-6 text-[#FC6C3F]">
                Pegawai Panti Rehabilitasi Sosial Penyandang Disabilitas Netra dan Fisik Fajar Harapan
            </div>

            <div class="w-full flex flex-col items-center py-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    <!-- Loop through each pegawai in the collection -->
                    @foreach ($pegawais as $pegawai)
                        <div class="flex flex-col items-center bg-white p-4 rounded-lg shadow-lg">
                            <img src="{{ asset('storage/' . $pegawai->image) }}" alt="{{ $pegawai->nama }}"
                                class=" rounded-lg transition-transform transform scale-100 hover:scale-105"
                                loading="lazy" />
                            <div class="flex flex-col py-2 items-center text-center">
                                <h3 class="font-semibold text-base text-gray-800">{{ $pegawai->nama }}</h3>
                                <h4 class="text-base text-gray-600">{{ $pegawai->jabatan }}</h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </section>

    <x-footer></x-footer>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <!-- Include file JS menggunakan Vite -->
    @vite(['resources/js/app.js', 'resources/js/custom/custom.js'])

</body>

</html>
