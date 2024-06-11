<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("css/desktop.css")}}"> 
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('partials.sidebar')
            <!-- Main content -->
            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Manajemen Pasien</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">Create Pasien</h1>
                    <!-- Form to create a new patient -->
                    <div class="container form-container">
                        <form action="{{route('pasien.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <p class="black-text">Nama Pasien:</p>
                                <input type="text" class="form-control" name="namapasien" placeholder="Nama Pasien" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">NIK :</p>
                                <input type="text" class="form-control" name="nik" placeholder="NIK" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">No HP:</p>
                                <input type="text" class="form-control" name="no_hp" placeholder="No HP" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Nomer Kamar:</p>
                                <input type="text" class="form-control" name="nomerkamar" placeholder="Nomer Kamar" >
                            </div>
                            <div class="form-group">
                                <p class="black-text">Lantai Kamar:</p>
                                <input type="text" class="form-control" name="lantaikamar" placeholder="Lantai Kamar" >
                            </div>
                            <div class="form-group">
                                <p class="black-text">Penyakit:</p>
                                <input type="text" class="form-control" name="penyakit" placeholder="Penyakit" >
                            </div>
                            <div class="form-group">
                                <p class="black-text">Dokter:</p>
                                <select class="form-control" name="namadokter">
                                    @foreach($dokters as $dokter)
                                        <option value="{{ $dokter->namadokter }}">{{ $dokter->namadokter }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Tanggal Masuk:</p>
                                <input type="date" class="form-control" name="tanggal_masuk" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Tanggal Keluar:</p>
                                <input type="date" class="form-control" name="tanggal_keluar">
                            </div>
                            <div class="form-group">
                                <p class="black-text">Status:</p>
                                <select class="form-control" name="status">
                                    @foreach($statusEnum as $value)
                                        <option value="{{ $value }}">{{ ucfirst($value) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Create</button> 
                                <a href="{{url('pasien/')}}" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
