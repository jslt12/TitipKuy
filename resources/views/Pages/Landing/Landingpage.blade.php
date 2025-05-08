<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa Titip Online - TitipYuk</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --primary: #ff4757;
            --secondary: #4ECDC4;
            --dark: #333;
            --light: #f9f9f9;
            --gray: #777;
        }

        body {
            color: var(--dark);
            line-height: 1.6;
        }

        /* Header Styles */
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            padding: 15px 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
        }

        .logo span {
            color: var(--secondary);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            margin-top: 60px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .cta-button {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .cta-button:hover {
            background-color: #ff6b81;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Section Styles */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .section-title p {
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }

        /* About Section */
        .about-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .about-box {
            width: 48%;
            background-color: var(--light);
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .about-box:hover {
            transform: translateY(-10px);
        }

        .about-box h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .about-box p {
            margin-bottom: 20px;
        }

        .about-box ul {
            margin-bottom: 20px;
            padding-left: 20px;
        }

        .about-box ul li {
            margin-bottom: 8px;
        }

        /* Testimonial Section */
        .testimonial-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 50px;
        }

        .testimonial {
            width: 30%;
            background-color: var(--light);
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .testimonial:hover {
            transform: translateY(-10px);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
        }

        .testimonial-author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
        }

        .author-info h4 {
            margin-bottom: 5px;
        }

        .author-info p {
            color: var(--gray);
            font-size: 14px;
        }

        /* FAQ Section */
        .faq-container {
            max-width: 800px;
            margin: 50px auto 0;
        }

        .faq-item {
            margin-bottom: 20px;
            border: 1px solid #eee;
            border-radius: 5px;
            overflow: hidden;
            transition: all 0.3s;
        }

        .faq-item:hover {
            border-color: var(--secondary);
        }

        .faq-question {
            padding: 15px 20px;
            background-color: var(--light);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }

        .faq-question i {
            transition: transform 0.3s;
        }

        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        .faq-answer {
            padding: 20px;
            background-color: white;
            display: none;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .question-form {
            margin-top: 50px;
            background-color: var(--light);
            padding: 30px;
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--secondary);
            outline: none;
        }

        .form-group textarea {
            height: 150px;
        }

        .submit-btn {
            background-color: var(--secondary);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s;
        }

        .submit-btn:hover {
            background-color: #3dbeb6;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Report Section */
        .contact-methods {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 50px;
        }

        .contact-method {
            width: 300px;
            background-color: var(--light);
            padding: 30px;
            border-radius: 10px;
            margin: 0 15px 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }

        .contact-method:hover {
            transform: translateY(-10px);
        }

        .contact-method i {
            font-size: 40px;
            color: var(--secondary);
            margin-bottom: 20px;
        }

        .contact-method h3 {
            margin-bottom: 15px;
            color: var(--primary);
        }

        .contact-method p {
            color: var(--gray);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .footer-section {
            width: 30%;
            margin-bottom: 30px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            font-size: 20px;
            color: var(--secondary);
        }

        .footer-section p {
            margin-bottom: 15px;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: var(--secondary);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #444;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
            }

            nav ul {
                margin-top: 20px;
            }

            nav ul li {
                margin-left: 15px;
                margin-right: 15px;
            }

            .hero h1 {
                font-size: 36px;
            }

            .about-box, .testimonial {
                width: 100%;
            }

            .footer-section {
                width: 100%;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">Titip<span>Yuk</span></div>
                <nav>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#testimonial">Testimoni</a></li>
                        <li><a href="#faq">Q&A</a></li>
                        <li><a href="#report">Report</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Mau nitip? Mau dititipin? Ada disini!</h1>
            <p>Titip barang atau belikan barang dari luar negeri dengan mudah dan aman</p>
            <a href="#about" class="cta-button">Pelajari Lebih Lanjut</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="section-title">
                <h2>Tentang Layanan Kami</h2>
                <p>Kami menyediakan platform untuk mempertemukan mereka yang ingin menitipkan barang dengan mereka yang bersedia membelikan barang</p>
            </div>
            <div class="about-content">
                <div class="about-box">
                    <h3>Sebagai Konsumen (Jastip)</h3>
                    <p>Anda bisa memesan barang dari luar negeri atau kota lain tanpa harus repot bepergian. Cukup pesan melalui platform kami dan barang akan diantarkan ke alamat Anda.</p>
                    <p>Keuntungan:</p>
                    <ul>
                        <li>Barang langka yang tidak tersedia di Indonesia</li>
                        <li>Harga lebih murah dari toko lokal</li>
                        <li>Proses pembelian yang mudah</li>
                    </ul>
                    <a href="#" class="cta-button">Pesan Sekarang</a>
                </div>
                <div class="about-box">
                    <h3>Sebagai Penyedia Jasa (Jastiper)</h3>
                    <p>Anda bisa mendapatkan penghasilan tambahan dengan membelikan barang untuk orang lain saat Anda bepergian ke luar negeri atau kota lain.</p>
                    <p>Keuntungan:</p>
                    <ul>
                        <li>Penghasilan tambahan dari komisi</li>
                        <li>Memaksimalkan bagasi saat bepergian</li>
                        <li>Jaringan yang lebih luas</li>
                    </ul>
                    <a href="#" class="cta-button" style="background-color: var(--secondary);">Daftar Jadi Jastiper</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section id="testimonial">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Mereka?</h2>
                <p>Testimoni dari pelanggan dan mitra jastiper kami</p>
            </div>
            <div class="testimonial-container">
                <div class="testimonial">
                    <div class="testimonial-text">
                        "Barang sampai dengan cepat dan kondisi baik. Packaging sangat rapi. Terima kasih TitipYuk!"
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Customer">
                        <div class="author-info">
                            <h4>Sarah Wijaya</h4>
                            <p>Customer sejak 2022</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        "Saya sudah 3 kali titip beli skincare Korea melalui TitipYuk. Harganya lebih murah dari toko lokal dan asli."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer">
                        <div class="author-info">
                            <h4>Dewi Lestari</h4>
                            <p>Customer sejak 2023</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial-text">
                        "Sebagai jastiper, saya bisa dapat penghasilan tambahan yang lumayan setiap kali pulang kampung ke Bandung."
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Jastiper">
                        <div class="author-info">
                            <h4>Rudi Hartono</h4>
                            <p>Jastiper sejak 2021</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq">
        <div class="container">
            <div class="section-title">
                <h2>Pertanyaan yang Sering Ditanyakan</h2>
                <p>Temukan jawaban untuk pertanyaan umum tentang layanan kami</p>
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        Bagaimana cara memesan jasa titip?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Anda bisa memesan melalui website atau aplikasi kami. Pilih produk yang ingin dibelikan, tentukan jumlahnya, lalu lakukan pembayaran. Kami akan menghubungkan Anda dengan jastiper yang tersedia.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Berapa lama waktu pengiriman?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Waktu pengiriman tergantung pada lokasi pembelian dan tujuan pengiriman. Rata-rata membutuhkan waktu 1-3 minggu untuk barang dari luar negeri dan 3-7 hari untuk dalam negeri.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Bagaimana jika barang rusak atau tidak sesuai?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Kami memiliki garansi kepuasan pelanggan. Jika barang rusak atau tidak sesuai, Anda bisa melaporkan dalam 3 hari setelah penerimaan untuk proses klaim.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        Bagaimana cara menjadi jastiper?
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Anda bisa mendaftar sebagai jastiper melalui halaman khusus di website kami. Setelah verifikasi data, Anda bisa mulai menerima pesanan sesuai jadwal perjalanan Anda.</p>
                    </div>
                </div>
            </div>

            <div class="question-form">
                <h3>Tanyakan Pertanyaan Anda</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" placeholder="Masukkan nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="Masukkan email Anda">
                    </div>
                    <div class="form-group">
                        <label for="question">Pertanyaan Anda</label>
                        <textarea id="question" placeholder="Tulis pertanyaan Anda di sini"></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Kirim Pertanyaan</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Report Section -->
    <section id="report">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Pelanggan</h2>
                <p>Hubungi kami jika Anda memiliki keluhan atau masalah</p>
            </div>
            <div class="contact-methods">
                <div class="contact-method">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>cs@titipyuk.com</p>
                    <p>Respon dalam 24 jam</p>
                </div>
                <div class="contact-method">
                    <i class="fab fa-whatsapp"></i>
                    <h3>WhatsApp</h3>
                    <p>+62 812 3456 7890</p>
                    <p>Respon lebih cepat</p>
                </div>
                <div class="contact-method">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Telepon</h3>
                    <p>021 1234 5678</p>
                    <p>Senin-Jumat, 09.00-17.00</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Tentang TitipYuk</h3>
                    <p>Platform jasa titip beli pertama di Indonesia yang menghubungkan konsumen dengan traveler untuk mendapatkan produk dari berbagai belahan dunia.</p>
                </div>
                <div class="footer-section">
                    <h3>Link Cepat</h3>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#testimonial">Testimoni</a></li>
                        <li><a href="#faq">Q&A</a></li>
                        <li><a href="#report">Report</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Hubungi Kami</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Jl. Sudirman No. 123, Jakarta</p>
                    <p><i class="fas fa-phone"></i> 021 1234 5678</p>
                    <p><i class="fas fa-envelope"></i> info@titipyuk.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 TitipYuk. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // FAQ Toggle
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                item.classList.toggle('active');
                
                // Close other open items
                faqQuestions.forEach(q => {
                    if (q !== question) {
                        q.parentNode.classList.remove('active');
                    }
                });
            });
        });

        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>