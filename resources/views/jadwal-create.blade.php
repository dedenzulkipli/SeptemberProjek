<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Ronda</title>
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
            max-width: 600px;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
        }

        h2 {
            color: #00a8ff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .form-group label {
            color: #dcdde1;
        }

        .form-control {
            background-color: transparent;
            border: 1px solid #00a8ff;
            color: #ffffff;
        }

        .form-control:focus {
            background-color: transparent;
            box-shadow: none;
            border-color: #00c3ff;
        }

        .btn-primary {
            background-color: #00a8ff;
            border: none;
            color: #ffffff;
            font-weight: bold;
            padding: 0.7rem 2rem;
            text-transform: uppercase;
            transition: background-color 0.3s;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #00c3ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Jadwal Ronda</h2>
        <form action="/jadwal/create" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="anggota">Nama Anggota</label>
                <input type="text" name="anggota" id="anggota" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hari">Hari</label>
                <select name="hari" id="hari" class="form-control" required>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
