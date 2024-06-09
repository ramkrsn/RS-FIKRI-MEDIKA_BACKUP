<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Dokter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/desktop.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('partials.sidebar')
            <!-- Main content -->
            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Manajemen Dokter</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">Create Doctor</h1>
                    <!-- Form to create a new doctor -->
                    <div class="container form-container">
                        <form action="{{url('createdokter')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <p class="black-text">Nama Dokter:</p>
                                <input type="text" class="form-control" name="namadokter" placeholder="Nama Dokter" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Senin:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="seninstart" id="senin-start" placeholder="Mulai Senin">
                                    <input type="time" class="form-control" name="seninend" id="senin-end" placeholder="Akhir Senin">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Selasa:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="selasastart" id="selasa-start" placeholder="Mulai Selasa">
                                    <input type="time" class="form-control" name="selasaend" id="selasa-end" placeholder="Akhir Selasa">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Rabu:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="rabustart" id="rabu-start" placeholder="Mulai Rabu">
                                    <input type="time" class="form-control" name="rabuend" id="rabu-end" placeholder="Akhir Rabu">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Kamis:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="kamisstart" id="kamis-start" placeholder="Mulai Kamis">
                                    <input type="time" class="form-control" name="kamisend" id="kamis-end" placeholder="Akhir Kamis">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Jumat:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="jumatstart" id="jumat-start" placeholder="Mulai Jumat">
                                    <input type="time" class="form-control" name="jumatend" id="jumat-end" placeholder="Akhir Jumat">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Sabtu:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="sabtustart" id="sabtu-start" placeholder="Mulai Sabtu">
                                    <input type="time" class="form-control" name="sabtuend" id="sabtu-end" placeholder="Akhir Sabtu">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Poli Dokter:</p>
                                <input type="text" class="form-control" name="polidokter" placeholder="Poli Dokter" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Wajah Dokter:</p>
                                <input type="file" class="form-control-file" name="wajahdokter" accept="image/*" required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Create</button> 
                                <a href="{{url('dokter/')}}" class="btn btn-danger">Cancel</a>
                            </div>
                            @csrf
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