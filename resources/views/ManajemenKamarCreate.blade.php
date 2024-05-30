<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Kamar</title>
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
                        <img src="/img/2.png" alt="" class="mr-2" >
                        <a class="nav-link black-text" href="{{url('/dokter')}}">Manajemen Dokter</a>
                    </li>
                    <li class="nav-item d-flex align-items-center">
                        <img src="/img/3.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="#">Manajemen Kamar</a>
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
                    <h1 class="title-text">Manajemen Kamar</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">Kamar List</h1>
                    <div class="container form-container">
                        <form action="{{url('createkamar')}}" method="POST">
                            <div class="form-group">
                                <p class="black-text">Tipe Kamar:</p>
                                <input type="text" class="form-control" name="tipekamar" placeholder="Tipe Kamar" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Harga:</p>
                                <input type="number" class="form-control" name="harga" placeholder="Harga" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Jumlah Kamar:</p>
                                <input type="number" class="form-control" name="jumlahkamar" placeholder="Jumlah Kamar" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Gedung Kamar:</p>
                                <input type="text" class="form-control" name="gedungkamar" placeholder="Gedung Kamar" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Lantai Kamar:</p>
                                <input type="text" class="form-control" name="lantaikamar" placeholder="Lantai Kamar" required>
                            </div>
                            <div class="form-group">
                                <p class="black-text">Info Kamar:</p>
                                <textarea class="form-control" name="infokamar" placeholder="Info Kamar" required></textarea>
                            </div>
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Create</button> 
                                <a href="{{url('kamar/')}}" class="btn btn-danger">Cancel</a>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1
