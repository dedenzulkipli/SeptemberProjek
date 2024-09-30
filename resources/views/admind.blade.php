<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Pos Ronda</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f0f0f5;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        .sidebar {
            background-color: #1e3799;
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 20px;
            transition: all 0.3s;
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #0a3d62;
        }

        .sidebar .logo {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            background-color: #f4f6f9;
        }

        .content h2 {
            font-size: 2rem;
            color: #1e3799;
            margin-bottom: 20px;
        }

        .card-dashboard {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card-dashboard:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .card-dashboard img {
            width: 100%;
            border-radius: 10px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.25rem;
            color: #1e3799;
            margin-bottom: 10px;
        }

        .card-text {
            color: #666;
        }

        footer {
            background-color: #0d6efd;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="/admind">Dashboard</a>
        <a href="/laporan">Laporan Kejadian</a>
        <a href="/jadwal">Jadwal Ronda</a>
        <a href="/logout">Logout</a>
    </div>

    <!-- Main Content -->
    <div class="content">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-dashboard">
                    <img src="storage/image/img1.png" alt="Laporan Kejadian">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Kejadian</h5>
                        <p class="card-text">Cek laporan kejadian terbaru dari masyarakat.</p>
                        <a href="/laporan" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dashboard">
                    <img src="storage/image/img1.png" alt="Jadwal Ronda">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Ronda</h5>
                        <p class="card-text">Kelola dan update jadwal ronda lingkungan.</p>
                        <a href="/jadwal" class="btn btn-primary">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; 2024 Admin Pos Ronda. All rights reserved.
    </footer>

    <script src="{{asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
