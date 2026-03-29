<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo_title.png" type="image/png">
    <title>Digiperpus | Sistem Peminjaman Buku</title>
    <link href="./src/output.css" rel="stylesheet">
</head>
<body class="bg-teal-50">

    <!-- ============================================
         NAVIGATION / NAVBAR
         ============================================ -->
    <nav class="bg-white backdrop-blur-md shadow-sm border-b border-white/20 fixed w-full top-0 z-50 transition-all duration-500" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-18">
                <!-- LOGO -->
                <div class="flex items-center group">
                    <img src="assets/img/logo_digiperpus1.png" href="index.php" alt="Logo DigiPerpus" class="h-12 w-40 rounded-3xl object-cover">
                </div>

                <!-- MENU NAVIGASI DESKTOP -->
                <div class="hidden md:flex flex-2 justify-center">
                    <div class="flex items-center space-x-1">
                        <a href="#beranda" class="text-gray-800 font-medium nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Beranda</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#tentang" class="text-gray-800 font-medium nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Tentang</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#fitur" class="text-gray-800 font-medium nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Fitur</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                        <a href="#kontak" class="text-gray-800 font-medium nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                            <span class="relative z-10">Kontak</span>
                            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-0 h-0.5 bg-blue-500 group-hover:w-12 transition-all duration-300"></div>
                        </a>
                    </div>
                </div>

                <!-- TOMBOL LOGIN DESKTOP -->
                <div class="hidden md:flex items-center space-x-3">
                    <a href="auth/login.php" class="text-gray-800 font-medium nav-link relative px-4 py-2 text-sm transition-all duration-300 group">
                        <span class="relative z-10">Login→</span>
                    </a>
                </div>

                <!-- TOMBOL MENU MOBILE -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-primary transition-colors p-2 rounded-lg hover:bg-blue-50">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- ============================================
         HERO SECTION / BERANDA
         ============================================ -->
    <section id="beranda" class="pt-24 min-h-screen flex items-center relative">
        <!-- Background Image -->
        <img src="assets/img/Bg-Utama.jpg" class="absolute inset-0 w-full h-full object-cover brightness-50">

        <!-- Overlay Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-secondary/70 to-teal-primary/60"></div>

        <!-- Hero Content -->
        <div class="relative max-w-5xl mx-auto px-6 text-center text-white">
            <h1 class="text-3xl md:text-5xl font-semibold leading-tight">
                Sistem Perpustakaan Digital
                <br>
                <span class="font-bold">Efisien dan Terintegrasi</span>
            </h1>

            <p class="mt-4 text-sm md:text-base text-gray-200 max-w-2xl mx-auto leading-relaxed">
                Kelola koleksi buku, peminjaman, dan anggota dalam satu sistem digital 
                yang mudah digunakan dan dapat diakses secara real-time.
            </p>

            <!-- CTA Button -->
            <div class="mt-6 flex justify-center gap-3">
                <a href="auth/login.php" class="border-2 border-white text-white  font-bold py-3 px-6 rounded-lg text-sm transition-all duration-300 hover:scale-105">
                    Kelola Perpustakaan Anda→
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================
         TENTANG SECTION
         ============================================ -->
    <section id="tentang" class="fade-in py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Section Heading -->
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-semibold text-blue-secondary">Tentang Digiperpus</h2>
                <p class="text-sm text-gray-500 mt-2">Solusi digital untuk pengelolaan perpustakaan yang lebih efisien</p>
            </div>

            <!-- Content Grid -->
            <div class="grid md:grid-cols-2 gap-10 items-center">
                <!-- Text Content -->
                <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                    <p>Digiperpus adalah sistem perpustakaan digital yang dirancang untuk membantu pengelolaan buku, anggota, dan proses peminjaman secara lebih terstruktur dan efisien.</p>
                    <p>Dengan sistem yang terintegrasi, pengguna dapat dengan mudah mencari buku, melakukan peminjaman, serta memantau status transaksi secara real-time.</p>
                    <p>Digiperpus hadir untuk mendukung transformasi perpustakaan menjadi lebih modern, praktis, dan mudah diakses kapan saja.</p>
                </div>

                <!-- Highlight Box -->
                <div class="bg-teal-50 border border-teal-100 p-6 rounded-lg">
                    <h3 class="text-sm font-semibold text-blue-secondary mb-4">Keunggulan Sistem</h3>
                    <ul class="space-y-3 text-sm text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 bg-teal-500 rounded-full mt-2"></span>
                            Pengelolaan data buku dan anggota terpusat
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 bg-teal-500 rounded-full mt-2"></span>
                            Proses peminjaman lebih cepat dan terstruktur
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 bg-teal-500 rounded-full mt-2"></span>
                            Akses informasi secara real-time
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="w-2 h-2 bg-teal-500 rounded-full mt-2"></span>
                            Antarmuka sederhana dan mudah digunakan
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         FITUR SECTION
         ============================================ -->
    <section id="fitur" class="py-16 bg-teal-50">
        <div class="max-w-6xl mx-auto px-6">
            <!-- Section Heading -->
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-semibold text-blue-secondary">Fitur Utama</h2>
                <p class="text-sm text-gray-500 mt-2">Sistem yang dirancang untuk mempermudah pengelolaan perpustakaan</p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1: Katalog Digital -->
                <div class="bg-white p-5 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-sm font-semibold text-blue-secondary mb-2">Katalog Digital</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Cari dan temukan buku dengan cepat berdasarkan judul, kategori, atau pengarang.</p>
                </div>

                <!-- Feature 2: Sistem Peminjaman -->
                <div class="bg-white p-5 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-sm font-semibold text-blue-secondary mb-2">Sistem Peminjaman</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Proses peminjaman dan pengembalian buku dilakukan secara terstruktur dan efisien.</p>
                </div>

                <!-- Feature 3: Manajemen Anggota -->
                <div class="bg-white p-5 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-sm font-semibold text-blue-secondary mb-2">Manajemen Anggota</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Kelola data anggota dan pantau aktivitas peminjaman dengan mudah.</p>
                </div>

                <!-- Feature 4: Laporan & Statistik -->
                <div class="bg-white p-5 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-sm font-semibold text-blue-secondary mb-2">Laporan & Statistik</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Lihat laporan peminjaman dan data buku secara real-time.</p>
                </div>

                <!-- Feature 5: Riwayat Peminjaman -->
                <div class="bg-white p-5 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-sm font-semibold text-blue-secondary mb-2">Riwayat Peminjaman</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Melihat data peminjaman yang sedang berlangsung dan yang telah selesai secara terstruktur.</p>
                </div>

                <!-- Feature 6: Detail Buku Lengkap -->
                <div class="bg-white p-5 rounded-lg border border-gray-100 hover:shadow-md transition">
                    <h3 class="text-sm font-semibold text-blue-secondary mb-2">Detail Buku Lengkap</h3>
                    <p class="text-xs text-gray-600 leading-relaxed">Menyediakan informasi buku secara lengkap seperti pengarang, penerbit, dan deskripsi.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         STATISTIK SECTION
         ============================================ -->
    <section class="py-16 bg-blue-secondary relative">
        <!-- Background Image -->
        <img src="assets/img/Bg-Utama.jpg" class="absolute inset-0 w-full h-full object-cover brightness-50">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-secondary/70 to-blue-primary/60"></div>

        <!-- Statistics Content -->
        <div class="relative max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <!-- Total Buku -->
                <div>
                    <h3 class="text-2xl font-semibold text-white"></h3>
                    <p class="text-sm text-blue-100 mt-1">Koleksi Buku</p>
                </div>

                <!-- Total Pengguna -->
                <div>
                    <h3 class="text-2xl font-semibold text-white"></h3>
                    <p class="text-sm text-blue-100 mt-1">Pengguna Terdaftar</p>
                </div>

                <!-- Total Peminjaman -->
                <div>
                    <h3 class="text-2xl font-semibold text-white"></h3>
                    <p class="text-sm text-blue-100 mt-1">Total Peminjaman</p>
                </div>

                <!-- Buku Aktif -->
                <div>
                    <h3 class="text-2xl font-semibold text-white"></h3>
                    <p class="text-sm text-blue-100 mt-1">Sedang Dipinjam</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         BUKU TERBARU SECTION
         ============================================ -->
    <section class="py-16 bg-gray-light">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Section Heading -->
            <div class="text-center mb-10">
                <h2 class="text-2xl font-semibold text-blue-secondary mb-2">Buku Terbaru</h2>
                <p class="text-sm text-gray-600">Koleksi terbaru yang siap untuk Anda pinjam</p>
            </div>

            <!-- Book Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-lg border border-gray-200 p-3 hover:shadow-md transition">
                    <!-- Book Cover -->
                    <img src="assets/img/cover/" class="w-full h-40 object-cover rounded-md mb-3">

                    <!-- Book Title -->
                    <h3 class="text-sm font-semibold text-gray-700 line-clamp-2"></h3>

                    <!-- Book Author -->
                    <p class="text-xs text-gray-500 mt-1"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         TESTIMONIAL SECTION
         ============================================ -->
    <section class="py-16 bg-teal-50">
        <div class="max-w-5xl mx-auto px-4">
            <!-- Section Heading -->
            <div class="text-center mb-10">
                <h2 class="text-2xl font-semibold text-blue-secondary mb-2">Apa Kata Pengguna</h2>
                <p class="text-sm text-gray-600">Pengalaman pengguna dalam menggunakan Digiperpus</p>
            </div>

            <!-- Testimonial Slider -->
            <div class="overflow-hidden relative">
                <div id="testimonialSlider" class="flex transition-transform duration-500">
                    <!-- Testimonial 1 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="bg-gray-light border border-gray-200 rounded-lg p-6 text-center">
                            <p class="text-sm text-gray-600 italic mb-4">"Sistemnya memudahkan pencarian buku dan proses peminjaman jadi lebih cepat."</p>
                            <h4 class="text-sm font-semibold text-gray-700">Sari Dewi</h4>
                            <span class="text-xs text-gray-500">Pustakawan Sekolah</span>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="bg-gray-light border border-gray-200 rounded-lg p-6 text-center">
                            <p class="text-sm text-gray-600 italic mb-4">"Interface sederhana dan mudah digunakan, cocok untuk sistem perpustakaan digital."</p>
                            <h4 class="text-sm font-semibold text-gray-700">Ahmad Rahman</h4>
                            <span class="text-xs text-gray-500">Pengelola Perpustakaan</span>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="w-full flex-shrink-0 px-4">
                        <div class="bg-gray-light border border-gray-200 rounded-lg p-6 text-center">
                            <p class="text-sm text-gray-600 italic mb-4">"Fitur peminjaman dan pencatatan transaksi sangat membantu pengelolaan data."</p>
                            <h4 class="text-sm font-semibold text-gray-700">Rina Kartika</h4>
                            <span class="text-xs text-gray-500">Admin Perpustakaan</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slider Dots Navigation -->
            <div class="flex justify-center mt-6 gap-2">
                <button class="dot w-2.5 h-2.5 bg-blue-secondary rounded-full" data-slide="0"></button>
                <button class="dot w-2.5 h-2.5 bg-gray-300 rounded-full" data-slide="1"></button>
                <button class="dot w-2.5 h-2.5 bg-gray-300 rounded-full" data-slide="2"></button>
            </div>
        </div>
    </section>

    <!-- ============================================
         KONTAK SECTION
         ============================================ -->
    <section id="kontak" class="py-16 bg-gray-light">
        <div class="max-w-6xl mx-auto px-4">
            <!-- Section Heading -->
            <div class="text-center mb-10">
                <h2 class="text-2xl font-semibold text-blue-secondary mb-2">Hubungi Kami</h2>
                <p class="text-sm text-gray-600">Punya pertanyaan atau ingin menggunakan Digiperpus? Hubungi kami sekarang.</p>
            </div>

            <!-- Contact Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                <!-- Contact Info -->
                <div class="space-y-5">
                    <!-- Email -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700">Email</h3>
                        <p class="text-sm text-gray-600">digiperpus@email.com</p>
                    </div>

                    <!-- Phone -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700">Telepon</h3>
                        <p class="text-sm text-gray-600">0812-3456-7890</p>
                    </div>

                    <!-- Address -->
                    <div>
                        <h3 class="text-sm font-semibold text-gray-700">Alamat</h3>
                        <p class="text-sm text-gray-600">Indonesia</p>
                    </div>
                </div>

                <!-- Contact Form & Maps -->
                <div class="space-y-4">
                    <!-- Contact Form -->
                    <div class="bg-white border border-gray-200 p-6 rounded-lg">
                        <form id="contactForm" class="space-y-4">
                            <!-- Name Input -->
                            <div>
                                <input type="text" placeholder="Nama" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-secondary">
                            </div>

                            <!-- Email Input -->
                            <div>
                                <input type="email" placeholder="Email" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-secondary">
                            </div>

                            <!-- Message Textarea -->
                            <div>
                                <textarea rows="4" placeholder="Pesan" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:border-blue-secondary"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="w-full bg-blue-secondary text-white text-sm py-2 rounded-md hover:bg-blue-primary transition">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Google Maps Embed Full Width -->
            <div class="mt-6">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4484.198878425387!2d107.84287690451383!3d-7.216201958943139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68ba8e1722dc49%3A0xcad8aa88ea668a6!2sSMK%20Al%20Madani%20Garut!5e0!3m2!1sid!2sid!4v1774775455271!5m2!1sid!2sid" 
                    class="w-full h-64 rounded-lg border border-gray-200"
                    loading="lazy">
                </iframe>
            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-white mt-8 pt-4 text-center">
                <p class="text-xs text-blue-100">
                    &copy; 2026 Digiperpus. Semua hak dilindungi.
                </p>
            </div>
        </div>
    </footer>

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer class="bg-blue-secondary text-white py-12">
        <div class="max-w-5xl mx-auto px-4">
            <!-- Footer Content Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Brand Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-3">Digiperpus</h3>
                    <p class="text-sm text-blue-100 leading-relaxed">
                        Sistem perpustakaan digital yang membantu pengelolaan buku, 
                        peminjaman, dan data anggota secara lebih efisien dan terstruktur.
                    </p>
                </div>

                <!-- Quick Contact -->
                <div>
                    <h4 class="text-sm font-semibold mb-3">Kontak</h4>
                    <ul class="space-y-2 text-sm text-blue-100">
                        <li>Email: digiperpus@email.com</li>
                        <li>Telp: 0812-3456-7890</li>
                        <li>Indonesia</li>
                    </ul>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="border-t border-white mt-8 pt-4 text-center">
                <p class="text-xs text-blue-100">
                    &copy; 2026 Digiperpus. Semua hak dilindungi.
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="assets/js/index.js"></script>

</body>
</html>
