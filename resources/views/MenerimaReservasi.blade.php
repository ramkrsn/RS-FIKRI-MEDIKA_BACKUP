<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Dokter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/desktop.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('partials.sidebar')

            <!-- main code -->
            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Menerima Reservasi</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>NIK</th>
                            <th>Keluhan</th>
                            <th>Tanggal Pertemuan</th>
                            <th>Jam Pertemuan</th>
                            <th>Poli Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $jadwal)
                            <tr>
                                <td>{{ $jadwal->idjadwalpertemuan }}</td>
                                <td>{{ $jadwal->namadepan }}</td>
                                <td>{{ $jadwal->namabelakang }}</td>
                                <td>{{ $jadwal->NIK }}</td>
                                <td>{{ $jadwal->keluhanpasien }}</td>
                                <td>{{ $jadwal->tanggalpertemuan }}</td>
                                <td>{{ $jadwal->jampertemuan }}</td>
                                <td>{{ $jadwal->polidokter }}</td>
                                <td>{{ $jadwal->namadokter }}</td>
                                <td>{{ $jadwal->opsi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>