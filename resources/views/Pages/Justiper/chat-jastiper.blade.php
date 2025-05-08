<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TitipYuk - Chat Jastiper</title>
    <style>
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
            background-color: #f5f5f5;
        }

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
            margin-left: 20px;
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
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
        }

        .user-profile img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .chat-container {
            display: flex;
            margin-top: 80px;
            height: calc(100vh - 80px);
        }

        .chat-sidebar {
            width: 300px;
            background-color: white;
            border-right: 1px solid #eee;
            overflow-y: auto;
        }

        .chat-search {
            padding: 15px;
            border-bottom: 1px solid #eee;
        }

        .chat-search input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            font-size: 14px;
            outline: none;
        }

        .chat-list {
            padding: 10px 0;
        }

        .chat-item {
            display: flex;
            padding: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-bottom: 1px solid #f5f5f5;
        }

        .chat-item:hover, .chat-item.active {
            background-color: #f9f9f9;
        }

        .chat-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .chat-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .chat-info {
            flex: 1;
        }

        .chat-name {
            font-weight: 600;
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }

        .chat-time {
            font-size: 12px;
            color: var(--gray);
        }

        .chat-preview {
            font-size: 14px;
            color: var(--gray);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .chat-unread {
            background-color: var(--primary);
            color: white;
            font-size: 12px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
        }

        .chat-main {
            flex: 1;
            display: flex;
            flex-direction: column;
            background-color: white;
        }

        .chat-header {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }

        .chat-header-info {
            flex: 1;
            margin-left: 15px;
        }

        .chat-header-name {
            font-weight: 600;
        }

        .chat-header-status {
            font-size: 12px;
            color: var(--gray);
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            background-color: #f9f9f9;
        }

        .message {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .message.received {
            align-items: flex-start;
        }

        .message.sent {
            align-items: flex-end;
        }

        .message-content {
            max-width: 70%;
            padding: 10px 15px;
            border-radius: 18px;
            margin-bottom: 5px;
            position: relative;
        }

        .message.received .message-content {
            background-color: white;
            border: 1px solid #eee;
        }

        .message.sent .message-content {
            background-color: var(--secondary);
            color: white;
        }

        .message-time {
            font-size: 12px;
            color: var(--gray);
        }

        .chat-input {
            padding: 15px;
            border-top: 1px solid #eee;
            display: flex;
            align-items: center;
        }

        .chat-input input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 30px;
            outline: none;
            font-size: 16px;
        }

        .send-button {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            border: none;
            margin-left: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }

        .send-button:hover {
            background-color: #ff6b81;
        }

        @media (max-width: 768px) {
            .chat-sidebar {
                width: 100%;
                display: none;
            }
            
            .chat-sidebar.active {
                display: block;
            }
            
            .chat-main {
                display: none;
            }
            
            .chat-main.active {
                display: flex;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">Titip<span>Yuk</span></div>
                <nav>
                    <ul>
                        <li><a href="#"><i class="fas fa-home"></i></a></li>
                        <li><a href="#"><i class="fas fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fas fa-comment-dots"></i></a></li>
                        <li><a href="#"><i class="fas fa-user"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="chat-container">
        <div class="chat-sidebar active">
            <div class="chat-search">
                <input type="text" placeholder="Cari percakapan...">
            </div>
            <div class="chat-list">
                <div class="chat-item active">
                    <div class="chat-avatar">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Jastiper">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">
                            Sarah Tanaka
                            <span class="chat-time">12:30</span>
                        </div>
                        <div class="chat-preview">Barang sudah saya beli, besok dikirim</div>
                    </div>
                </div>
                <div class="chat-item">
                    <div class="chat-avatar">
                        <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Jastiper">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">
                            David Kim
                            <span class="chat-time">Kemarin</span>
                        </div>
                        <div class="chat-preview">Maaf, barang yang Anda mau sedang sold out</div>
                    </div>
                </div>
                <div class="chat-item">
                    <div class="chat-avatar">
                        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Jastiper">
                    </div>
                    <div class="chat-info">
                        <div class="chat-name">
                            Michael Chen
                            <span class="chat-time">2 hari lalu</span>
                        </div>
                        <div class="chat-preview">Apakah Anda masih berminat dengan produk ini?</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat-main active">
            <div class="chat-header">
                <div class="chat-avatar">
                    <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Jastiper">
                </div>
                <div class="chat-header-info">
                    <div class="chat-header-name">Sarah Tanaka</div>
                    <div class="chat-header-status">Online</div>
                </div>
                <a href="/customer" class="back-button"><i class="fas fa-arrow-left"></i></a>
            </div>
            <div class="chat-messages">
                <div class="message received">
                    <div class="message-content">Halo, saya sudah sampai di Tokyo. Barang yang Anda mau masih tersedia</div>
                    <div class="message-time">10:30</div>
                </div>
                <div class="message sent">
                    <div class="message-content">Wah bagus! Saya mau pesan 2 ya</div>
                    <div class="message-time">10:32</div>
                </div>
                <div class="message received">
                    <div class="message-content">Oke, total harga untuk 2 item adalah ¥12.800 + ongkir ke Indonesia ¥5.000</div>
                    <div class="message-time">10:33</div>
                </div>
                <div class="message sent">
                    <div class="message-content">Baik, saya transfer sekarang. Tolong dibungkus yang rapi ya</div>
                    <div class="message-time">10:35</div>
                </div>
                <div class="message received">
                    <div class="message-content">Siap! Nanti saya kirimkan bukti pembelian dan resi setelah barang dikirim</div>
                    <div class="message-time">10:36</div>
                </div>
            </div>
            <div class="chat-input">
                <input type="text" placeholder="Ketik pesan...">
                <button class="send-button"><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>
    </div>

    <script>
        // For mobile responsiveness
        document.querySelector('.back-button').addEventListener('click', function() {
            document.querySelector('.chat-sidebar').classList.add('active');
            document.querySelector('.chat-main').classList.remove('active');
        });

        document.querySelectorAll('.chat-item').forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    document.querySelector('.chat-sidebar').classList.remove('active');
                    document.querySelector('.chat-main').classList.add('active');
                }
                document.querySelectorAll('.chat-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>