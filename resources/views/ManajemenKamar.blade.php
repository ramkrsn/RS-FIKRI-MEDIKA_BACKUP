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
                        <img src="/img/2.png" alt="" class="mr-2">
                        <a class="nav-link black-text" href="{{url('/dokter')}}">Manajemen Dokter</a>
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
                    <h1 class="title-text">Manajemen Kamar</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">Kamar List</h1>
                    <a class="button btn btn-green spacing mb-3" href="{{url('createkamar')}}">Add</a>
                    <div class="table-container">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Tipe Kamar</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Jumlah Kamar</th>
                                    <th scope="col">Gedung Kamar</th>
                                    <th scope="col">Lantai Kamar</th>
                                    <th scope="col">Info Kamar</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kamars as $kamar)
                                <tr>
                                    <td>{{$kamar->tipekamar}}</td>
                                    <td>{{$kamar->harga}}</td>
                                    <td>{{$kamar->jumlahkamar}}</td>
                                    <td>{{$kamar->gedungkamar}}</td>
                                    <td>{{$kamar->lantaikamar}}</td>
                                    <td>{{$kamar->infokamar}}</td>
                                    <td class="d-flex">
                                        <a class="btn btn-success btn-space" href="{{url('updatekamar/'.$kamar->idkamar.'/update')}}">Edit</a>
                                        <form action="{{url('/deletekamar/'.$kamar->idkamar.'/delete')}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>