<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/desktop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-2 sidebar min-vh-100">
                <img src="/img/Logo.png" alt="" class="img-logo">
                <ul class="nav flex-column">
                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-newspaper"></i>
                        <a class="nav-link black-text" href="#">Manajemen Artikel</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-capsule"></i>
                        <a class="nav-link black-text" href="#">Manajemen Obat</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/1.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="{{url('/manage-antrian')}}">Manajemen Antrian Dokter</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-capsule"></i>
                        <a class="nav-link black-text" href="#">Reservasi Obat</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-people-fill"></i>
                        <a class="nav-link black-text" href="{{url('/MenerimaReservasi')}}">Menerima Reservasi</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/2.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="{{url('/dokter')}}">Manajemen Dokter</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">

                        <i class="bi bi-people-fill"></i>
                        <a class="nav-link black-text" href="{{url('/menerimakunjungan')}}">Menerima Kunjungan Pasien</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/4.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="{{ route('admin.feedback.index') }}">Feedback</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-capsule"></i>
                        <a class="nav-link black-text" href="{{ route('informasiobat.index') }}">Informasi Obat</a>
                        </li>
                        <li class="nav-item d-flex align-items-center">
                        <i class="bi bi-people-fill"></i>
                        <a class="nav-link black-text" href="{{url('/pasien')}}">Manajemen Pasien</a>
                    </li>
                    </li>
                </ul>
            </div>

            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
