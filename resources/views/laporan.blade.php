<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kejadian - Keamanan</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460);
            font-family: 'Roboto', sans-serif;
            color: #ffffff;
            min-height: 100vh;
            padding: 2rem;
        }

        .container {
            margin-top: 30px;
        }

        h2 {
            color: #00a8ff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
        }

        .card img {
            width: 100%; /* Membuat gambar memenuhi lebar kartu */
            height: 150px; /* Tinggi tetap untuk semua gambar */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .card-body {
            padding: 15px;
        }

        .btn-back-home,
        .btn-primary,
        .btn-custom {
            width: 100%;
        }

        .btn-back-home {
            background-color: #00a8ff;
            border: none;
            color: #ffffff;
            font-weight: bold;
            padding: 0.7rem;
            text-transform: uppercase;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-back-home:hover {
            background-color: #007bff;
        }

        .btn-primary {
            background-color: #00a8ff;
            border: none;
            color: #ffffff;
            font-weight: bold;
            padding: 0.7rem;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #007bff;
        }

        .btn-custom {
            background-color: #ff4757;
            border: none;
            color: #ffffff;
            font-weight: bold;
            padding: 0.5rem;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #ff6b81;
        }

        /* Mengatur tiga kolom */
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-md-4 {
            flex: 0 0 30%; /* Menjaga tiga kolom */
            margin-bottom: 20px; /* Spasi antar kartu */
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Laporan Kejadian</h2>

        <!-- Tombol Kembali ke Home -->
        <div class="text-center mb-4">
            <a href="/admind" class="btn-back-home">Kembali ke Dashboard</a>
        </div>

        <!-- Kartu Laporan Kejadian -->
        <div class="row">
            @foreach ($laporan as $key => $item)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/foto/'.$item->foto) }}" alt="Foto kejadian">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            <p class="card-text"><strong>Deskripsi:</strong> {{ $item->deskripsi }}</p>
                            <p class="card-text"><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                            <p class="card-text"><strong>Waktu Kejadian:</strong> {{ $item->waktu_kejadian }}</p>
                            <div class="btn-group">
                                <a href="/laporan/delete/{{ $item->id }}" onclick="return confirm('Yakin ingin menghapus?')">
                                    <button class="btn btn-custom">Hapus</button>
                                </a>
                                <a href="/laporan/edit/{{ $item->id }}">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Tombol Tambah Laporan -->
        <div class="text-center mt-4">
            <a href="/laporan/viewcreate" class="btn btn-primary">Tambah Laporan Baru</a>
        </div>
    </div>

    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
