<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin - Jastipkuy</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            height: 100vh;
        }

        a {
            text-decoration: none;
        }

        .sidebar {
            width: 250px;
            background: #2c3e50;
            color: #ecf0f1;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.2rem;
        }

        .sidebar a {
            color: #ecf0f1;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #34495e;
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
            border: 2px solid #ccc;
        }

        .main-content {
            flex: 1;
            padding:0 1rem;
            overflow-y: auto;
        }

        .dashboard-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 250px;
        }

        .card h2 {
            margin-top: 0;
            font-size: 18px;
            color: #333;
        }

        .card p {
            font-size: 32px;
            font-weight: bold;
            color: #007BFF;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }

        .user-table th,
        .user-table td {
            padding: 12px 16px;
            text-align: left;
        }

        .user-table th {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .user-table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        .action-btn {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #c0392b;
        }

        .action-btn:hover {
            color: #e74c3c;
        }

        .laporan-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }

        .laporan-table th,
        .laporan-table td {
            padding: 12px 16px;
            text-align: left;
        }

        .laporan-table thead {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .laporan-table tbody tr:nth-child(even) {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <a href="/admin">Dashboard</a>
        <a href="/admin/users">Manajemen User</a>
        <a href="/admin/reports">Laporan</a>
    </div>

    <div class="main-wrapper">
        <div class="navbar">
            <img src="https://images2.fanpop.com/images/photos/7900000/JOHN-DOE-john-doe-7969094-2087-2560.jpg" alt="Profile" class="profile-photo">
        </div>

        <div class="main-content">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
