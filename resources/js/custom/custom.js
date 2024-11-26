// Fungsi untuk inisialisasi AOS (Animation On Scroll)
function initAOS() {
    AOS.init({
        duration: 1000,
        once: true, // Animasi hanya berjalan sekali
        startEvent: 'DOMContentLoaded', // Mulai animasi pada event DOMContentLoaded
        useClassNames: true, // Aktifkan penggunaan class
        initClassName: false, // Nonaktifkan kelas awal
        animatedClassName: 'aos-animate', // Kelas yang ditambahkan saat animasi
        onComplete: function() {
            // Reset transform setelah animasi AOS selesai
            setTimeout(function() {
                document.querySelectorAll('[data-aos]').forEach(el => {
                    el.style.transform = 'none';
                });
            }, 1000); // Sesuaikan delay dengan durasi animasi AOS
        }
    });
}

// Fungsi untuk memulai animasi count-up
function animateValue(id, start, end, duration) {
    let obj = document.getElementById(id);
    let range = end - start;
    let current = start;
    let increment = end > start ? 1 : -1;
    let stepTime = Math.abs(Math.floor(duration / range));

    let timer = setInterval(function() {
        current += increment;
        obj.textContent = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

// Fungsi untuk mengaktifkan Intersection Observer pada elemen yang ditargetkan
function initCountUpObserver(targetId) {
    let target = document.getElementById(targetId);

    // Fungsi untuk memantau section menggunakan Intersection Observer
    let handleIntersection = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Mulai animasi count-up
                animateValue("count1", 0, 60, 2000);
                animateValue("count2", 0, 53, 2000);
                animateValue("count3", 0, 16, 2000);
                animateValue("count4", 0, 18, 2000);

                // Hentikan observer setelah animasi dimulai
                observer.unobserve(entry.target);
            }
        });
    };

    let observer = new IntersectionObserver(handleIntersection, {
        threshold: 0.5 // Animasi akan dimulai ketika 50% section terlihat
    });

    // Observe target section
    observer.observe(target);
}

// Memanggil kedua fungsi ketika DOM selesai dimuat
document.addEventListener('DOMContentLoaded', function() {
    // Inisialisasi AOS
    initAOS();

    // Inisialisasi observer untuk animasi count-up
    initCountUpObserver('count-section');
});