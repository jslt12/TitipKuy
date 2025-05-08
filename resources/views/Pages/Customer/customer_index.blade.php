<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TitipYuk - Jastip</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0; padding: 0; box-sizing: border-box;
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
            background-color: #f5f5f5;
        }
        header {
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed; width: 100%; top: 0; z-index: 1000;
            padding: 15px 0;
        }
        .container { width: 90%; max-width: 1200px; margin: 0 auto; }
        .header-content {
            display: flex; justify-content: space-between; align-items: center;
        }
        .logo { font-size: 24px; font-weight: 700; color: var(--primary); }
        .logo span { color: var(--secondary); }
        nav ul {
            display: flex; list-style: none; align-items: center;
        }
        nav ul li { margin-left: 20px; }
        nav ul li a {
            text-decoration: none; color: var(--dark);
            font-weight: 500; transition: color 0.3s;
        }
        nav ul li a:hover { color: var(--primary); }
        .user-profile {
            width: 40px; height: 40px; border-radius: 50%;
            overflow: hidden; cursor: pointer;
        }
        .user-profile img {
            width: 100%; height: 100%; object-fit: cover;
        }
        main { padding-top: 80px; min-height: 100vh; }
        .search-section {
            background-color: white;
            padding: 30px; border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        .search-title { margin-bottom: 20px; font-size: 24px; color: var(--dark); }
        .search-bar { display: flex; margin-bottom: 20px; }
        .search-bar input {
            flex: 1; padding: 12px 20px;
            border: 1px solid #ddd; border-radius: 30px 0 0 30px;
            font-size: 16px; outline: none;
        }
        .search-bar button {
            padding: 12px 25px; background-color: var(--primary);
            color: white; border: none; border-radius: 0 30px 30px 0;
            cursor: pointer; font-weight: 600; transition: background-color 0.3s;
        }
        .search-bar button:hover { background-color: #ff6b81; }
        .filter-section {
            display: flex; flex-wrap: wrap; gap: 15px;
        }
        .filter-group {
            flex: 1; min-width: 200px;
        }
        .filter-group label {
            display: block; margin-bottom: 8px; font-weight: 500;
        }
        .filter-group select {
            width: 100%; padding: 10px;
            border: 1px solid #ddd; border-radius: 5px;
            font-size: 16px;
        }
        .jastiper-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        .jastiper-card {
            background-color: white; border-radius: 10px;
            overflow: hidden; box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s;
        }
        .jastiper-card:hover { transform: translateY(-5px); }
        .jastiper-image {
            height: 200px; overflow: hidden;
        }
        .jastiper-image img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 0.3s;
        }
        .jastiper-card:hover .jastiper-image img { transform: scale(1.05); }
        .jastiper-info { padding: 20px; }
        .jastiper-name { font-size: 20px; margin-bottom: 5px; color: var(--dark); }
        .jastiper-location {
            color: var(--gray); margin-bottom: 15px;
            display: flex; align-items: center;
        }
        .jastiper-location i { margin-right: 5px; }
        .jastiper-rating { display: flex; align-items: center; margin-bottom: 15px; }
        .stars { color: #ffc107; margin-right: 10px; }
        .rating-count { color: var(--gray); font-size: 14px; }
        .jastiper-countries { margin-bottom: 15px; }
        .country-tag {
            display: inline-block; background-color: var(--light);
            padding: 5px 10px; border-radius: 20px;
            font-size: 12px; margin-right: 5px; margin-bottom: 5px;
        }
        .view-profile {
            display: inline-block; width: 100%; padding: 10px;
            text-align: center; background-color: var(--secondary);
            color: white; text-decoration: none; border-radius: 5px;
            font-weight: 600; transition: background-color 0.3s;
        }
        .view-profile:hover { background-color: #3dbeb6; }
        @media (max-width: 768px) {
            .jastiper-list { grid-template-columns: 1fr; }
            .filter-group { min-width: 100%; }
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">Titip<span>Yuk</span></div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pesanan</a></li>
                    <li><a href="/chat">Chat</a></li>
                    <li><a href="#">Akun</a></li>
                    <li>
                        <div class="user-profile">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User">
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <section class="search-section">
            <h2 class="search-title">Cari Jastiper Terbaik</h2>
            <div class="search-bar">
                <input type="text" placeholder="Cari jastiper atau produk...">
                <button><i class="fas fa-search"></i> Cari</button>
            </div>
            <div class="filter-section">
                <div class="filter-group">
                    <label for="country">Negara Tujuan</label>
                    <select id="country">
                        <option value="">Semua Negara</option>
                        <option value="japan">Jepang</option>
                        <option value="korea">Korea Selatan</option>
                        <option value="usa">Amerika Serikat</option>
                        <option value="china">China</option>
                        <option value="singapore">Singapura</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="province">Provinsi Asal</label>
                    <select id="province">
                        <option value="">Semua Provinsi</option>
                        <option value="jakarta">DKI Jakarta</option>
                        <option value="jabar">Jawa Barat</option>
                        <option value="jateng">Jawa Tengah</option>
                        <option value="jatim">Jawa Timur</option>
                        <option value="bali">Bali</option>
                    </select>
                </div>
                <div class="filter-group">
                    <label for="category">Kategori Produk</label>
                    <select id="category">
                        <option value="">Semua Kategori</option>
                        <option value="fashion">Fashion</option>
                        <option value="cosmetic">Kosmetik</option>
                        <option value="electronic">Elektronik</option>
                        <option value="food">Makanan</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="jastiper-list">
            <!-- Card 1 -->
            <div class="jastiper-card">
                <div class="jastiper-image">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=634&q=80" alt="Jastiper">
                </div>
                <div class="jastiper-info">
                    <h3 class="jastiper-name">Sarah Tanaka</h3>
                    <p class="jastiper-location"><i class="fas fa-map-marker-alt"></i> Jakarta - Jepang</p>
                    <div class="jastiper-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="rating-count">(42)</span>
                    </div>
                    <div class="jastiper-countries">
                        <span class="country-tag">Jepang</span>
                        <span class="country-tag">Korea</span>
                    </div>
                    <a href="/admin" class="view-profile">Lihat Profil</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="jastiper-card">
                <div class="jastiper-image">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=634&q=80" alt="Jastiper">
                </div>
                <div class="jastiper-info">
                    <h3 class="jastiper-name">Michael Chen</h3>
                    <p class="jastiper-location"><i class="fas fa-map-marker-alt"></i> Bandung - USA</p>
                    <div class="jastiper-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>
                        </div>
                        <span class="rating-count">(35)</span>
                    </div>
                    <div class="jastiper-countries">
                        <span class="country-tag">USA</span>
                        <span class="country-tag">UK</span>
                    </div>
                    <a href="/jastiper" class="view-profile">Lihat Profil</a>
                </div>
            </div>

            <!-- Card 3 (Tambahan) -->
            <div class="jastiper-card">
                <div class="jastiper-image">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=634&q=80" alt="Jastiper">
                </div>
                <div class="jastiper-info">
                    <h3 class="jastiper-name">Ayu Lestari</h3>
                    <p class="jastiper-location"><i class="fas fa-map-marker-alt"></i> Bali - Singapura</p>
                    <div class="jastiper-rating">
                        <div class="stars">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                        </div>
                        <span class="rating-count">(28)</span>
                    </div>
                    <div class="jastiper-countries">
                        <span class="country-tag">Singapura</span>
                        <span class="country-tag">Malaysia</span>
                    </div>
                    <a href="/" class="view-profile">Lihat Profil</a>
                </div>
            </div>
        </section>
    </div>
</main>

</body>
</html>
