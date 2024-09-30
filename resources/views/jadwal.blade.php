<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembagian Jadwal Ronda</title>
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

        h1 {
            color: #00a8ff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .day-card {
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
        }

        h2 {
            color: #00a8ff;
            margin-bottom: 10px;
        }

        .member-list {
            list-style-type: none;
            padding: 0;
        }

        .member-list li {
            color: #dcdde1;
            margin: 5px 0;
            display: flex;
            justify-content: space-between;
            align-items: center; /* Align items vertically */
        }

        .btn-danger {
            background-color: #e84118;
            border: none;
            color: #ffffff;
            padding: 0.3rem 1rem;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-left: 10px; /* Jarak antara nama dan tombol */
        }

        .btn-danger:hover {
            background-color: #ff4757;
        }

        .btn-primary {
            background-color: #00a8ff;
            border: none;
            color: #ffffff;
            font-weight: bold;
            padding: 0.7rem 1.5rem; /* Sesuaikan padding */
            text-transform: uppercase;
            transition: background-color 0.3s;
            margin-left: 10px; /* Jarak antara tombol */
        }

        .btn-primary:hover {
            background-color: #00c3ff;
        }

        .btn-back-home {
            background-color: #00a8ff;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
            padding: 0.7rem 2rem;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn-back-home:hover {
            background-color: #00c3ff;
        }

        .text-center {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Pembagian Jadwal Ronda</h1>

    <!-- Tombol Kembali -->
    <div class="text-center">
        <a href="/admind" class="btn-back-home">Kembali ke Dashboard</a>
    </div>

    <a href="/jadwal/viewcreate" class="btn btn-primary mb-3">Tambah Jadwal Ronda</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="/jadwal/search" method="get" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari  nama anggota" aria-label="Cari berdasarkan nama anggota">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    <!-- Pembagian jadwal berdasarkan hari -->
    @foreach (['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'] as $day)
        <div class="day-card">
            <h2>{{ $day }}</h2>
            <ul class="member-list">
                @php $no = 1; @endphp
                @foreach ($jadwal as $item)
                    @if ($item->hari == $day)
                        <li>
                            <span>{{ $no }}. {{ $item->anggota }}</span>
                            <div>
                                <a href="/jadwal/edit/{{ $item->id }}">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                                <a href="/jadwal/delete/{{ $item->id }}" onclick="return confirm('Yakin ingin menghapus anggota ini?')">
                                    <button class="btn-danger">Hapus</button>
                                </a>
                            </div>
                        </li>
                        @php $no++; @endphp
                    @endif
                @endforeach
            </ul>
        </div>
    @endforeach
</div>

<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
</body>
</html>
