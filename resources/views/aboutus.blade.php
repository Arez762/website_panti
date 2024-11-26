<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Carousel with Tailwind</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .swiper-wrapper {
            width: 100%;
            height: max-content !important;
            padding-bottom: 64px !important;
            -webkit-transition-timing-function: linear !important;
            transition-timing-function: linear !important;
            position: relative;
        }

        .swiper-pagination-progressbar .swiper-pagination-progressbar-fill {
            background: #4F46E5 !important;
        }
    </style>
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="relative w-full overflow-hidden">
        <!-- Slide container -->
        <div id="slideshow" class="flex transition-transform duration-700">
            <!-- Slide 1 -->
            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Slide 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                        <p class="text-sm text-gray-600">This is a description for card 1.</p>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Slide 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 2</h3>
                        <p class="text-sm text-gray-600">This is a description for card 2.</p>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Slide 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                        <p class="text-sm text-gray-600">This is a description for card 3.</p>
                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Slide 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                        <p class="text-sm text-gray-600">This is a description for card 3.</p>
                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Slide 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                        <p class="text-sm text-gray-600">This is a description for card 3.</p>
                    </div>
                </div>
            </div>

            <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 p-4">
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Slide 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-2">Card Title 3</h3>
                        <p class="text-sm text-gray-600">This is a description for card 3.</p>
                    </div>
                </div>
            </div>
            <!-- Add more slides as needed -->
        </div>

        <!-- Navigation Buttons -->
        <button id="prev"
            class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full">
            &#10094;
        </button>
        <button id="next"
            class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full">
            &#10095;
        </button>
    </div>
    <script>
        const slideshow = document.getElementById("slideshow");
        const slides = slideshow.children;
        const prevButton = document.getElementById("prev");
        const nextButton = document.getElementById("next");

        let currentIndex = 0;

        // Fungsi untuk memperbarui posisi slide
        function updateSlideshow() {
            const slideWidth = slides[0].offsetWidth;
            slideshow.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }

        // Tombol sebelumnya
        prevButton.addEventListener("click", () => {
            // Jika index adalah 0, pindah ke slide terakhir
            currentIndex = currentIndex > 0 ? currentIndex - 1 : slides.length - 1;
            updateSlideshow();
        });

        // Tombol berikutnya
        nextButton.addEventListener("click", () => {
            // Jika index adalah slide terakhir, kembali ke slide pertama
            currentIndex = currentIndex < slides.length - 1 ? currentIndex + 1 : 0;
            updateSlideshow();
        });

        // Auto-looping (opsional)
        let autoSlide = setInterval(() => {
            currentIndex = currentIndex < slides.length - 1 ? currentIndex + 1 : 0;
            updateSlideshow();
        }, 3000); // Geser setiap 3 detik

        // Hentikan auto-slide saat user berinteraksi
        [prevButton, nextButton].forEach((button) => {
            button.addEventListener("click", () => {
                clearInterval(autoSlide);
                autoSlide = setInterval(() => {
                    currentIndex = currentIndex < slides.length - 1 ? currentIndex + 1 : 0;
                    updateSlideshow();
                }, 3000); // Restart auto-slide
            });
        });
    </script>

</body>

</html>
