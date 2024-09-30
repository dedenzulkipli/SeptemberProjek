<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kejadian</title>
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e, #16213e, #0f3460); /* Background dengan gradasi biru gelap */
            font-family: 'Roboto', sans-serif; /* Font modern */
            color: #ffffff;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.1); /* Latar belakang transparan */
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3); /* Efek bayangan lembut */
            backdrop-filter: blur(10px); /* Efek glassmorphism */
        }

        h2 {
            color: #00a8ff; /* Biru untuk heading */
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.05);
            border: none;
            color: #ffffff;
            border-bottom: 2px solid #00a8ff; /* Aksen biru */
            border-radius: 0;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff; /* Aksen biru lebih terang saat fokus */
            box-shadow: none;
            background-color: rgba(255, 255, 255, 0.1);
        }

        label {
            color: #00a8ff;
            font-size: 1.1rem;
        }

        .btn-primary {
            background-color: #00a8ff; /* Warna tombol biru */
            border: none;
            color: #ffffff;
            font-weight: bold;
            padding: 0.7rem 2rem;
            text-transform: uppercase;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #007bff; /* Warna biru lebih terang saat hover */
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        ::placeholder {
            color: #b0b0b0; /* Placeholder warna abu-abu */
        }

        ul {
            padding-left: 1.5rem;
            color: #ff6666; /* Warna merah untuk error */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Form Laporan Kejadian</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="laporan">
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            @endif

            <form action="/detaillaporan/create" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" required placeholder="Masukkan judul kejadian">
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="deskripsi" rows="4" required placeholder="Deskripsi kejadian"></textarea>
                </div>

                <div class="form-group">
                    <label for="lokasi">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" id="lokasi" required placeholder="Lokasi kejadian">
                </div>

                <div class="form-group">
                    <label for="waktu_kejadian">Waktu Kejadian</label>
                    <input type="datetime-local" class="form-control" name="waktu_kejadian" id="waktu_kejadian" required>
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" id="foto" required>
                </div>

                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
