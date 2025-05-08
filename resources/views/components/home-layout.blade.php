<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Jastipkuy</title>
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
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            display: flex;
            height: 100vh;
        }

        a {
            text-decoration: none;
        }

        .sidebar {
            width: 250px;
            background: var(--dark);
            color: #ecf0f1;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.2rem;
            color: white;
        }

        .sidebar a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: all 0.3s;
        }

        .sidebar a:hover {
            background-color: var(--primary);
        }

        .main-wrapper {
            flex: 1;
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }

        .navbar {
            height: 60px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .profile-photo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--secondary);
        }

        .main-content {
            flex: 1;
            padding: 1rem;
            overflow-y: auto;
        }

        .main-content h1 {
            font-size: 28px;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .dashboard-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            padding: 25px;
            width: 250px;
            text-decoration: none;
            transition: all 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h2 {
            margin-top: 0;
            font-size: 16px;
            color: var(--gray);
            margin-bottom: 10px;
        }

        .card p {
            font-size: 28px;
            font-weight: 700;
            color: var(--primary);
        }

        .card:nth-child(even) p {
            color: var(--secondary);
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .user-table th,
        .user-table td {
            padding: 15px;
            text-align: left;
        }

        .user-table th {
            background-color: #f9f9f9;
            font-weight: 600;
            color: var(--dark);
        }

        .user-table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        .user-table tbody tr:hover {
            background-color: #f0f0f0;
        }

        .action-btn {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: var(--primary);
            transition: color 0.3s;
        }

        .action-btn:hover {
            color: #ff6b81;
        }

        .laporan-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .laporan-table th,
        .laporan-table td {
            padding: 15px;
            text-align: left;
        }

        .laporan-table thead th {
            background-color: #f9f9f9;
            font-weight: 600;
            color: var(--dark);
        }

        .laporan-table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        .laporan-table tbody tr:hover {
            background-color: #f0f0f0;
        }

        /* For Mobile Responsiveness */
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
                height: auto;
            }
            
            .dashboard-cards {
                flex-direction: column;
            }
            
            .card {
                width: 100%;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="/admin"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="/admin/users"><i class="fas fa-users"></i> Manajemen User</a>
        <a href="/admin/reports"><i class="fas fa-chart-bar"></i> Laporan</a>

        <!-- temp -->
        <a href="/customer">Customer</a>
        <a href="/">Landing</a>
        <a href="/jastiper">Jastiper</a>
    </div>

    <div class="main-wrapper">
        <div class="navbar">
            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Profile" class="profile-photo">
        </div>

        <div class="main-content">
            {{ $slot }}
        </div>
    </div>
</body>

</html>