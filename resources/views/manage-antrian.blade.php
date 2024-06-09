<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Antrian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/desktop.css">
    <style>
        .details {
            padding: 10px; /* Add padding to the details container */
        }
        .queue-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            background-color: #fff;
            color: #000;
        }
        .button-wrapper {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('partials.sidebar')
            <!-- Main content -->
            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Manajemen Antrian</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h2 class="black-title spacing">Manajemen Antrian</h2>
                    @foreach ($jadwalpertemuan as $jadwal)
                        <div class="queue-wrapper">
                            <div class="details">
                                <p class="antrian-text"><strong>Nama:</strong> {{ $jadwal->namadepan }} {{ $jadwal->namabelakang }}</p>
                                <p class="antrian-text"><strong>Dokter:</strong> {{ $jadwal->namadokter }}</p>
                                <p class="antrian-text"><strong>Poli:</strong> {{ $jadwal->polidokter }}</p>
                                <p class="antrian-text"><strong>Waktu:</strong> {{ $jadwal->tanggalpertemuan }}, {{ $jadwal->jampertemuan }}</p>
                                <!-- <p class="antrian-text"><strong>Nomor Antrian:</strong> {{ $jadwal->nomor_antrian }}</p> -->
                                <p class="antrian-text"><strong>Keluhan:</strong> {{ $jadwal->keluhanpasien }}</p>                                <p class="antrian-text"><strong>Keluhan:</strong> {{ $jadwal->keluhanpasien }}</p>

                            </div>
                            <div class="button-wrapper">
                                <form action="{{ url('/deleteantrian/'.$jadwal->idjadwalpertemuan.'/delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger right-spacing">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
