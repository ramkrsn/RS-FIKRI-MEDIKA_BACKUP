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
            <div class="col-2 sidebar min-vh-100">
                <img src="/img/Logo.png" alt="" class="img-logo">
                <ul class="nav flex-column">
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/1.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/2.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Reservasi Dokter</a>
                    </li>
                </ul>
            </div>

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
                            <th>No Antrian</th>
                            <th>Nama Pasien</th>
                            <th>Keluhan</th>
                            <th>Dokter</th>
                            <th>Poli</th>
                            <th>Tanggal</th>
                            <th>Jadwal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($queues as $antrian)
                            <tr>
                                <td>{{ $antrian->id_antrian }}</td>
                                <td>{{ $antrian->no_antrian }}</td>
                                <td>{{ $antrian->nama_pasien }}</td>
                                <td>{{ $antrian->keluhan }}</td>
                                <td>{{ $antrian->dokter }}</td>
                                <td>{{ $antrian->poli }}</td>
                                <td>{{ $antrian->tanggal }}</td>
                                <td>{{ $antrian->est_jadwal }}</td>
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
