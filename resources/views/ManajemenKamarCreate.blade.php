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
            @include('partials.sidebar')
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
