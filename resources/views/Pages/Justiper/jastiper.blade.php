<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Jastiper - TitipYuk</title>
    <style>
        /* Reuse the same CSS from test.html */
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
            background-color: #f5f5f5;
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
            align-items: center;
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

        .user-profile {
            display: flex;
            align-items: center;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }

        /* Dashboard Styles */
        .dashboard {
            margin-top: 80px;
            padding: 30px 0;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .dashboard-title h1 {
            font-size: 28px;
            color: var(--dark);
        }

        .dashboard-title p {
            color: var(--gray);
        }

        .stats-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            flex: 1;
            min-width: 200px;
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .stat-card h3 {
            font-size: 16px;
            color: var(--gray);
            margin-bottom: 10px;
        }

        .stat-card p {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
        }

        .stat-card.secondary p {
            color: var(--secondary);
        }

        .dashboard-section {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .section-header h2 {
            font-size: 22px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary);
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn:hover {
            background-color: #ff6b81;
            transform: translateY(-2px);
        }

        .btn-secondary {
            background-color: var(--secondary);
        }

        .btn-secondary:hover {
            background-color: #3dbeb6;
        }

        .order-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .order-item:last-child {
            border-bottom: none;
        }

        .order-info h4 {
            margin-bottom: 5px;
        }

        .order-info p {
            color: var(--gray);
            font-size: 14px;
        }

        .order-status {
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }

        .status-processing {
            background-color: #cce5ff;
            color: #004085;
        }

        .status-completed {
            background-color: #d4edda;
            color: #155724;
        }

        .upcoming-trips {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .trip-card {
            flex: 1;
            min-width: 250px;
            background-color: white;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 20px;
            transition: all 0.3s;
        }

        .trip-card:hover {
            border-color: var(--secondary);
            transform: translateY(-5px);
        }

        .trip-card h3 {
            margin-bottom: 10px;
        }

        .trip-card p {
            color: var(--gray);
            margin-bottom: 15px;
        }

        .trip-meta {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
        }

        .trip-meta span {
            font-size: 14px;
            color: var(--gray);
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

            .stats-cards {
                flex-direction: column;
            }

            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .dashboard-actions {
                margin-top: 15px;
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
                        <li><a href="jastiper-home.html">Dashboard</a></li>
                        <li><a href="jastiper-orders.html">Pesanan</a></li>
                        <li><a href="jastiper-history.html">Riwayat</a></li>
                        <li><a href="#"><i class="fas fa-bell"></i></a></li>
                        <li>
                            <div class="user-profile">
                                <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="User">
                                <span>Rudi Hartono</span>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Dashboard Content -->
    <div class="dashboard">
        <div class="container">
            <div class="dashboard-header">
                <div class="dashboard-title">
                    <h1>Selamat Datang, Rudi!</h1>
                    <p>Ringkasan aktivitas dan pesanan Anda</p>
                </div>
                <div class="dashboard-actions">
                    <a href="#" class="btn btn-secondary"><i class="fas fa-plus"></i> Tambah Perjalanan</a>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="stats-cards">
                <div class="stat-card">
                    <h3>Pesanan Aktif</h3>
                    <p>5</p>
                </div>
                <div class="stat-card">
                    <h3>Pendapatan Bulan Ini</h3>
                    <p>Rp 1.250.000</p>
                </div>
                <div class="stat-card secondary">
                    <h3>Rating</h3>
                    <p>4.8 <i class="fas fa-star" style="color: gold;"></i></p>
                </div>
                <div class="stat-card">
                    <h3>Perjalanan Mendatang</h3>
                    <p>2</p>
                </div>
            </div>

            <!-- Recent Orders Section -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Pesanan Terbaru</h2>
                    <a href="jastiper-orders.html" class="btn">Lihat Semua</a>
                </div>
                
                <div class="order-item">
                    <div class="order-info">
                        <h4>Skincare Set - Korea</h4>
                        <p>Dari Seoul ke Jakarta • 2 items</p>
                    </div>
                    <div class="order-meta">
                        <span class="order-status status-processing">Dalam Proses</span>
                    </div>
                </div>
                
                <div class="order-item">
                    <div class="order-info">
                        <h4>Buku Programming</h4>
                        <p>Dari Singapore ke Bandung • 1 item</p>
                    </div>
                    <div class="order-meta">
                        <span class="order-status status-pending">Menunggu Pembayaran</span>
                    </div>
                </div>
                
                <div class="order-item">
                    <div class="order-info">
                        <h4>Action Figure Limited</h4>
                        <p>Dari Tokyo ke Surabaya • 1 item</p>
                    </div>
                    <div class="order-meta">
                        <span class="order-status status-processing">Dalam Proses</span>
                    </div>
                </div>
            </div>

            <!-- Upcoming Trips Section -->
            <div class="dashboard-section">
                <div class="section-header">
                    <h2>Perjalanan Mendatang</h2>
                    <a href="#" class="btn">Kelola Perjalanan</a>
                </div>
                
                <div class="upcoming-trips">
                    <div class="trip-card">
                        <h3>Seoul, Korea Selatan</h3>
                        <p>Perjalanan bisnis selama 5 hari</p>
                        <div class="trip-meta">
                            <span><i class="far fa-calendar-alt"></i> 15 - 20 Juni 2023</span>
                            <span>3 Pesanan</span>
                        </div>
                    </div>
                    
                    <div class="trip-card">
                        <h3>Singapore</h3>
                        <p>Liburan akhir pekan</p>
                        <div class="trip-meta">
                            <span><i class="far fa-calendar-alt"></i> 28 - 30 Juni 2023</span>
                            <span>1 Pesanan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // You can add JavaScript functionality here
        // For example, handling notifications or dynamic content
    </script>
</body>
</html>