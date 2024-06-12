<!DOCTYPE html>
<html>
<head>

    <title>Manajemen Antrian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/desktop.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <style>
        .table{
            background-color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('partials.sidebar')

            <!-- main code -->
            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Manajemen Antrian</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
                            <th>Keluhan</th>
                            <th>Tanggal Pertemuan</th>
                            <th>Jam Pertemuan</th>
                            <th>Poli Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Opsi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jadwalpertemuan as $jadwal)
                            <tr>
                                <td>{{ $jadwal->namadepan }} {{ $jadwal->namabelakang }}</td>
                                <td>{{ $jadwal->NIK }}</td>
                                <td>{{ $jadwal->keluhanpasien }}</td>
                                <td>{{ $jadwal->tanggalpertemuan }}</td>
                                <td>{{ $jadwal->jampertemuan }}</td>
                                <td>{{ $jadwal->polidokter }}</td>
                                <td>{{ $jadwal->namadokter }}</td>
                                <td>{{ $jadwal->opsi }}</td> 
                                <td>
                                    <div>
                                        @if ($jadwal->status == 'pending')
                                            <p class="fw-bolder text-status text-secondary m-0">Pending</p> 
                                        @elseif ($jadwal->status == 'done')
                                            <p class="fw-bolder text-status text-success m-0">Done</p>
                                        @elseif ($jadwal->status == 'cancel')
                                            <p class="fw-bolder text-status text-warning m-0">Cancel</p>
                                        @endif
                                    </div>
                                
                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-three-dots m-3"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Ubah Status</h6>
                                            </li>
                                            <form method="POST" action="{{ route('manage-antrian.update', ['id' => $jadwal->idjadwalpertemuan]) }}">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="dropdown-item" name="status" value="pending">Pending</button>
                                                <button type="submit" class="dropdown-item" name="status" value="done">Done</button>
                                                <button type="submit" class="dropdown-item" name="status" value="cancel">Cancel</button>
                                            </form>
                                        </ul>
                                    </div>
                                </td>
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
<body class="min-vh-100 d-flex poppins-regular">

    @yield('content') 
    @if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>