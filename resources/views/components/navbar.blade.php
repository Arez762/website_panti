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
</style>
<!-- Fixed Navbar -->
<header class="fixed top-0 w-full z-40 lg:pt-12 lg:px-24">
    <div
        class="bg-white container mx-auto max-w-screen-2xl lg:px-20 px-4 lg:py-2 py-4 flex items-center lg:border-2 border-b-2 border-[#FC6C3F] justify-between lg:rounded-xl lg:shadow-xl">
        <!-- Logo -->
        <div class="flex justify-center">
            <img src="{{ asset('Image/icon/logoprspdnf.png') }}" class="h-10 md:h-10 lg:h-16" alt="PRSPDNF Logo" />
        </div>
        <!-- Menu -->
        <nav class="hidden lg:flex space-x-6 font-semibold text-md">
            <a href="/" class="text-gray-900">Beranda</a>
            <a href="/news" class="block text-gray-900 hover:text-[#FC6C3F]" id="beritaButton">
                Berita
            </a>
            <div class="relative">
                <button class="text-gray-900 hover:text-[#FC6C3F] focus:outline-none" id="profileButton"
                    onclick="toggleDropdown('services-dropdown', 'profileButton')">
                    Profile
                    <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white border rounded-md shadow-lg dropdown-menu hidden"
                    id="services-dropdown">
                    <a href="/profile-visidanmisi"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Visi & Misi</a>
                    <a href="/profile-sejarah"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Sejarah</a>
                    <a href="/pegawais"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Pegawai Panti</a>
                </div>
            </div>
            <div class="relative">
                <button class="text-gray-900 hover:text-[#FC6C3F] focus:outline-none" id="layananButton"
                    onclick="toggleDropdown('services-dropdown2', 'layananButton')">
                    Layanan
                    <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white border rounded-md shadow-lg dropdown-menu hidden"
                    id="services-dropdown2">
                    <a href="/pelayanan-persyaratan"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Persyaratan Umum &
                        Administrasi</a>
                    <a href="/pelayanan-alur"
                        class="block px-4 py-2 text-gray-700 hover:text-[#FC6C3F] hover:bg-gray-100">Alur Pelayanan</a>
                </div>
            </div>
            <a href="/gallery" class="block text-gray-900 hover:text-[#FC6C3F]" id="galeriButton">
                Galeri
            </a>
        </nav>
        <!-- Contact and Mobile Menu Button -->
        <div class="flex items-center ">
            <a href="https://wa.me/6281346161962" target="_blank" class="hidden lg:flex">
                <div class="hidden contact-button custom-1280:flex items-center lg:p-2 bg-[#FC6C3F] text-white rounded-xl shadow-lg transition duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 hover:ring-2 hover:ring-orange-500 hover:ring-opacity-50">
                    <img src="{{ asset('Image/icon/Contact Us.png') }}" alt="Phone Icon" class="h-auto">
                </div>
            </a>
            <path stroke="currentColor" stroke-linecap"round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
            <button class="lg:hidden text-gray-700 focus:outline-none md:px-" id="menu-toggle">
                <svg id="menu-icon" class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path id="menu-line" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 7h14M5 12h14M5 17h14" />
                    <path id="cross-line" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden hidden  bg-white inset-x-0 w-full" id="mobile-menu">
        <nav class="md:mx-2 pt-2 pb-4 space-y-1 max-h-[70vh] overflow-y-auto border-b-2 rounded-b-md border-[#FC6C3F]">
            <a href="/" class="block text-gray-700 hover:bg-gray-100 px-4 py-2 ">Beranda</a>
            <a href="/news" class="block text-gray-700 hover:bg-gray-100 px-4 py-2" id="beritaButton2">
                Berita
            </a>
            <button class="w-full flex justify-between items-center text-gray-700 hover:bg-gray-100 px-4 py-2"
                id="dropdownButton1" onclick="toggleDropdown('mobile-dropdown', this)">
                Profile
                <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div class="px-3 py-2 hidden" id="mobile-dropdown" data-aos="fade-down">
                <a href="/profile-visidanmisi" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Visi &
                    Misi</a>
                <a href="/profile-sejarah"
                    class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Sejarah</a>
                <a href="/pegawais"
                    class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Pegawai Panti</a>
            </div>
            <button class="w-full flex justify-between items-center text-gray-700 hover:bg-gray-100 px-4 py-2"
                id="dropdownButton2" onclick="toggleDropdown('mobile-dropdown2', this)">
                Layanan
                <svg class="w-4 h-4 inline-block" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                </svg>
            </button>
            <div class="px-3 py-2 hidden" id="mobile-dropdown2">
                <a href="/pelayanan-persyaratan"
                    class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Persyaratan Umum &
                    Administrasi</a>
                <a href="/pelayanan-alur" class="block text-gray-700 hover:bg-gray-100 rounded-md px-3 py-2">Alur
                    Pelayanan</a>
            </div>

            <a href="/gallery" class="block text-gray-700 hover:bg-gray-100 px-4 py-2" id="galeributton">
                Galeri
            </a>

            <div class="flex items-center justify-center bg-[#FC6C3F] mx-24 mt-4 text-white rounded-xl shadow-lg p-2 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50 hover:ring-2 hover:ring-orange-500 hover:ring-opacity-30">
                <a href="https://wa.me/6281346161962" target="_blank">
                    <img src="{{ asset('Image/icon/Contact Us.png') }}" alt="Phone Icon" class="h-auto">
                </a>
            </div>
            
        </nav>
    </div>
</header>

<script>
    // Toggle the mobile menu
    document.getElementById('menu-toggle').addEventListener('click', () => {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('slide-down');

        const menuIcon = document.getElementById('menu-icon');
        const menuLine = document.getElementById('menu-line');
        const crossLine = document.getElementById('cross-line');

        // Toggle between menu and cross
        menuLine.classList.toggle('hidden');
        crossLine.classList.toggle('hidden');
    });


    // Function to toggle dropdown menu
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }
</script>

<script>
    // Optional: Click outside to close the dropdown
    window.addEventListener('click', function(event) {
        const servicesDropdown = document.getElementById('services-dropdown');
        const mobileDropdown = document.getElementById('mobile-dropdown');
        const servicesButton = servicesDropdown.previousElementSibling;
        const mobileButton = mobileDropdown.previousElementSibling;

        if (!servicesButton.contains(event.target) && !servicesDropdown.contains(event.target)) {
            servicesDropdown.classList.add('hidden');
        }
        if (!mobileButton.contains(event.target) && !mobileDropdown.contains(event.target)) {
            mobileDropdown.classList.add('hidden');
        }
    });
    window.addEventListener('click', function(event) {
        const servicesDropdown = document.getElementById('services-dropdown2');
        const mobileDropdown = document.getElementById('mobile-dropdown2');
        const servicesButton = servicesDropdown.previousElementSibling;
        const mobileButton = mobileDropdown.previousElementSibling;

        if (!servicesButton.contains(event.target) && !servicesDropdown.contains(event.target)) {
            servicesDropdown.classList.add('hidden');
        }
        if (!mobileButton.contains(event.target) && !mobileDropdown.contains(event.target)) {
            mobileDropdown.classList.add('hidden');
        }
    });
    window.addEventListener('click', function(event) {
        const servicesDropdown = document.getElementById('services-dropdown3');
        const mobileDropdown = document.getElementById('mobile-dropdown3');
        const servicesButton = servicesDropdown.previousElementSibling;
        const mobileButton = mobileDropdown.previousElementSibling;

        if (!servicesButton.contains(event.target) && !servicesDropdown.contains(event.target)) {
            servicesDropdown.classList.add('hidden');
        }
        if (!mobileButton.contains(event.target) && !mobileDropdown.contains(event.target)) {
            mobileDropdown.classList.add('hidden');
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        // Ambil semua elemen link yang ingin diberi efek warna
        const links = document.querySelectorAll('a');

        // Loop melalui setiap link
        links.forEach(link => {
            // Periksa apakah href dari link sama dengan URL saat ini
            if (link.href === window.location.href) {
                // Tambahkan kelas untuk mengubah warna teks
                link.classList.remove('text-gray-900');
                link.classList.remove('text-gray-700');
                link.classList.add('text-[#FC6C3F]');
            }
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentUrl = window.location.href;

        // Untuk tombol Profile
        const profileButton = document.getElementById('dropdownButton1');
        if (currentUrl.includes('profile-visidanmisi') || currentUrl.includes('profile-sejarah') || currentUrl
            .includes('profile-tenagaahli')) {
            profileButton.classList.remove('text-gray-700');
            profileButton.classList.add('text-[#FC6C3F]');
        }

        // Untuk tombol Layanan
        const layananButton = document.getElementById('dropdownButton2');
        if (currentUrl.includes('pelayanan-persyaratan') || currentUrl.includes('pelayanan-alur')) {
            layananButton.classList.remove('text-gray-700');
            layananButton.classList.add('text-[#FC6C3F]');
        }

        // Untuk tombol Galeri
        const galeriButton = document.getElementById('dropdownButton3');
        if (currentUrl.includes('gallery') || currentUrl.includes('gallery?page=1')) {
            galeriButton.classList.remove('text-gray-700');
            galeriButton.classList.add('text-[#FC6C3F]');
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentUrl = window.location.href;

        // Check and change the button style for Profile section
        if (currentUrl.includes('profile-visidanmisi') || currentUrl.includes('profile-sejarah') || currentUrl
            .includes('pegawais')) {
            document.getElementById('profileButton').classList.remove('text-gray-900');
            document.getElementById('profileButton').classList.add('text-[#FC6C3F]');
        }

        // Check and change the button style for Layanan section
        if (currentUrl.includes('pelayanan-persyaratan') || currentUrl.includes('pelayanan-alur')) {
            document.getElementById('layananButton').classList.remove('text-gray-900');
            document.getElementById('layananButton').classList.add('text-[#FC6C3F]');
        }

        // Check and change the button style for Galeri section
        if (currentUrl.includes('gallery-foto') || currentUrl.includes('gallery-video')) {
            document.getElementById('galeriButton').classList.remove('text-gray-900');
            document.getElementById('galeriButton').classList.add('text-[#FC6C3F]');
        }
    });

    function toggleDropdown(dropdownId, buttonId) {
        const dropdown = document.getElementById(dropdownId);
        dropdown.classList.toggle('hidden');
    }
</script>
