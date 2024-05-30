<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/css/desktop.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-2 sidebar min-vh-100">
                <!-- Sidebar content -->
                <img src="/img/Logo.png" alt="" class="img-logo">
                <ul class="nav flex-column">
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/1.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/2.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Manajemen Dokter</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/3.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="{{url('/kamar')}}">Manajemen Kamar</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/4.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Resources</a>
                    </li>
                </ul>
            </div>
            <!-- Main content -->
            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Edit Doctor</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">Update Doctor</h1>
                    <!-- Form to update the doctor -->
                    <div class="container form-container">
                        <form action="{{url('updatedokter/'.$dokter->iddokter.'/update')}}" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <p class="black-text">Nama Dokter:</p>
                                <input type="text" class="form-control" name="namadokter" placeholder="Nama Dokter" value="{{ $dokter->namadokter }}">
                            </div>
                            <div class="form-group">
                                <p class="black-text">Senin:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="seninstart" id="senin-start" placeholder="Mulai Senin" value="{{ $dokter->seninstart }}">
                                    <input type="time" class="form-control" name="seninend" id="senin-end" placeholder="Akhir Senin" value="{{ $dokter->seninend }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Selasa:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="selasastart" id="selasa-start" placeholder="Mulai Selasa" value="{{ $dokter->selasastart }}">
                                    <input type="time" class="form-control" name="selasaend" id="selasa-end" placeholder="Akhir Selasa" value="{{ $dokter->selasaend }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Rabu:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="rabustart" id="rabu-start" placeholder="Mulai Rabu" value="{{ $dokter->rabustart }}">
                                    <input type="time" class="form-control" name="rabuend" id="rabu-end" placeholder="Akhir Rabu" value="{{ $dokter->rabuend }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Kamis:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="kamisstart" id="kamis-start" placeholder="Mulai Kamis" value="{{ $dokter->kamisstart }}">
                                    <input type="time" class="form-control" name="kamisend" id="kamis-end" placeholder="Akhir Kamis" value="{{ $dokter->kamisend }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Jumat:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="jumatstart" id="jumat-start" placeholder="Mulai Jumat" value="{{ $dokter->jumatstart }}">
                                    <input type="time" class="form-control" name="jumatend" id="jumat-end" placeholder="Akhir Jumat" value="{{ $dokter->jumatend }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Sabtu:</p>
                                <div class="d-flex">
                                    <input type="time" class="form-control mr-2" name="sabtustart" id="sabtu-start" placeholder="Mulai Sabtu" value="{{ $dokter->sabtustart }}">
                                    <input type="time" class="form-control" name="sabtuend" id="sabtu-end" placeholder="Akhir Sabtu" value="{{ $dokter->sabtuend }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Poli Dokter:</p>
                                <input type="text" class="form-control" name="polidokter" placeholder="Poli Dokter" value="{{ $dokter->polidokter }}">
                            </div>
                            <div class="form-group">
                                <p class="black-text">Wajah Dokter:</p>
                                <input type="file" class="form-control-file" name="wajahdokter" accept="image/*">
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Update</button> 
                                <a href="{{url('/dokter')}}" class="btn btn-danger">Cancel</a>
                            </div>
                            @csrf
                            @method('PATCH')
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
