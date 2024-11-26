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
            <h1 class="text-xl lg:text-5xl font-semibold lg:mt-6 mt-2">Persyaratan Umum & Administrasi</h1>
        </div>
    </section>

    <section>
        <div class="w-full h-auto flex lg:flex-row flex-col p-8 gap-8 my-12 lg:px-32">
            <div
                class="border-2 border-[#FC6C3F] lg:w-[50%] w-full h-auto rounded-xl p-4  lg:px-8 bg-white/30 backdrop-blur-lg" data-aos="fade-down">
                <div class="">
                    <div class="text-center font-bold text-3xl text-[#FC6C3F] py-4 w-full">Persyaratan Administrasi
                    </div>
                    <div class="py-4 font-bold text-[#FC6C3F] text-xl">Disabilitas Netra</div>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>Disabilitas Netra potensial: mampu didik dan mampu latih.</li>
                        <li>Tidak memiliki kedisabilitasan lain (tidak ganda: netra disertai disabilitas
                            intelektual,
                            rungu wicara).</li>
                        <li>Usia 7 s/d 45 Tahun (diatas usia 35 tahun program percepatan).</li>
                        <li>Berbadan sehat dan tidak mempunyai penyakit menular (surat keterangan berbadan sehat
                            dari
                            dokter/ Puskesmas/ Rumah Sakit).</li>
                        <li>Jenis kelamin laki-laki dan perempuan.</li>
                    </ol>
                </div>

                <div class="">
                    <div class="py-4 mt-2 font-bold text-[#FC6C3F] text-xl">Disabilitas Fisik</div>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>Tidak memiliki kedisabilitasan lain (tidak ganda: fisik disertai disabilitas
                            intelektual,
                            rungu wicara).</li>
                        <li>Usia 15 s/d 35 tahun (Program vokasional).</li>
                        <li>Berbadan sehat dan tidak mempunyai penyakit menular (keterangan dokter).</li>
                        <li>Jenis kelamin laki-laki dan perempuan.</li>
                    </ol>
                </div>

            </div>

            <div
                class="border-2 border-[#FC6C3F] lg:w-[50%] w-full h-auto rounded-xl p-4 lg:px-8 bg-white/30 backdrop-blur-lg" data-aos="fade-up">
                <div class="">
                    <div class="text-center font-bold text-3xl text-[#FC6C3F] py-4 w-full">Persyaratan Umum
                    </div>
                    <div class="py-3"></div>
                    <ol class="list-decimal ml-4 text-gray-700">
                        <li>Mengisi formulir yang telah disediakan.</li>
                        <li>Surat penyataan tidak menikah selama mengikuti program Rehabilitasi Sosial.</li>
                        <li>Surat perjanjian selama mengikuti program rehabilitasi sosial.</li>
                        <li>Surat keterangan berbadan sehat dari Dokter/Puskesmas/Rumah Sakit.</li>
                        <li>Akte kelahiran/Surat Keterangan Kenal Lahir.</li>
                        <li>Ijazah/STTB/Sertifikat/Piagam yang dimiliki (bila ada).</li>
                        <li>Foto copy Kartu Keluarga.</li>
                        <li>Foto copy KTP yang usia sudah 17 tahun.</li>
                        <li>Kartu BPJS Kesehatan.</li>
                        <li>Pas Photo ukuran 4x6 sebanyak 3 lembar.</li>
                        <li>Surat pengantar/Rekomendasi Dinas Sosial Kabupaten/Kota.</li>
                    </ol>
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
