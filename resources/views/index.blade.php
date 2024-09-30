<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Pos Ronda</title>
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css') }}">
    <style>
        body {
            background-color: #f0f0f5;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        /* Animasi Floating Element */
        .floating {
            position: absolute;
            animation: floating 5s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        /* Navbar */
        header {
            background: linear-gradient(45deg, #0a3d62, #1e3799);
            color: white;
            border-bottom: 4px solid #1e3799;
            padding: 20px 0;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand {
            font-size: 2rem;
            letter-spacing: 3px;
        }

        .nav-link {
            color: white !important;
            font-weight: bold;
        }

        .nav-link:hover {
            color: #f1c40f !important;
        }

        .btn-primary {
            background-color: #1e3799;
            border-color: #1e3799;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0a3d62;
        }

        /* Header Background Image & Intro Section */
        .header-section {
            position: relative;
            background-image: url('https://example.com/posronda-background.jpg');
            background-size: cover;
            background-position: center;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.5);
        }

        .header-section h1 {
            font-size: 4rem;
            text-shadow: 0 5px 10px rgba(0, 0, 0, 0.7);
            animation: zoomIn 2s ease;
        }

        .header-section p {
            font-size: 1.5rem;
            margin-top: 10px;
            animation: fadeInUp 2s ease;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.7);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Floating Icon Decoration */
        .icon-circle {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            position: absolute;
        }

        .icon-circle.one {
            top: 100px;
            left: 10%;
            animation: floating 6s ease-in-out infinite;
        }

        .icon-circle.two {
            top: 250px;
            left: 80%;
            animation: floating 4s ease-in-out infinite;
        }

        /* Card Section */
        .cards-section {
            margin-top: -100px;
            padding: 50px 0;
            background-color: white;
            border-radius: 30px 30px 0 0;
            box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.1);
        }

        .card {
            margin-bottom: 30px;
            border: none;
            transition: transform 0.3s ease;
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.05);
        }

        .card-body {
            text-align: center;
            padding: 20px;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #0a3d62;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        /* Footer */
        footer {
            background-color: #0d6efd;
            color: white;
            padding: 40px 0;
            text-align: center;
            position: relative;
        }

        footer .social-icons {
            margin-top: 20px;
        }

        footer .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        footer .social-icons a:hover {
            color: #f1c40f;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <header>
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="#">Pos Ronda</a>
            <nav>
                <ul class="nav">
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="/detaillaporan" class="nav-link">Laporan Kejadian</a></li>
                    <li><a href="/detailjadwal" class="nav-link">Shift Jaga</a></li>
                </ul>
            </nav>
            <div>
                <a href="/logout" class="btn btn-primary">Logout</a>
            </div>
        </div>
    </header>

    <!-- Header Section with Animation -->
    <section class="header-section">
        <div>
            <h1>Selamat Datang di Pos Kamling</h1>
            <p>Keamanan lingkungan adalah tanggung jawab bersama.</p>
        </div>
        <!-- Floating Decoration -->
        <div class="icon-circle one floating"></div>
        <div class="icon-circle two floating"></div>
    </section>

    <!-- Cards Section -->
    <section class="cards-section container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <img src="storage/image/img1.png" alt="Jadwal Ronda">
                    <div class="card-body">
                        <h5 class="card-title">Jadwal Ronda</h5>
                        <p class="card-text">Lihat jadwal ronda terbaru di sini.</p>
                        <a href="/detailjadwal" class="btn btn-primary">Lihat Jadwal</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow">
                    <img src="storage/image/img1.png" alt="Laporan Kejadian">
                    <div class="card-body">
                        <h5 class="card-title">Laporan Kejadian</h5>
                        <p class="card-text">Laporkan kejadian yang terjadi di sekitar lingkungan.</p>
                        <a href="/detaillaporan" class="btn btn-primary">Laporkan Kejadian</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Pos Kamling. All rights reserved.</p>
        <p>Contact us: info@poskamling.com | Follow us:</p>
        <div class="social-icons">
            <a href="#"><i class="bi bi-facebook"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
</svg></i></a>
            <a href="#"><i class="bi bi-instagram"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
</svg></i></a>
            <a href="#"><i class="bi bi-twitter"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
</svg></i></a>
        </div>
    </footer>

    <script src="{{asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
