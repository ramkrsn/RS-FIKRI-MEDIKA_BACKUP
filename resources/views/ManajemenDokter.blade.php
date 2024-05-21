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
                        <img src="/img/2.png" alt="" class="mr-2" >
                        <a class="nav-link black-text" href="#">Manajemen Dokter</a>
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
                    <h1 class="title-text">Manajemen Dokter</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">Doctor List</h1>
                    <a class="button btn btn-green spacing" href="{{url('createdokter')}}">Add</a>
                    @foreach ($doctors as $doctor)
                    <div class="doctor-wrapper">
                        <img src="{{asset('storage/'.$doctor->wajahdokter)}}" alt="" width="70" height="70" class="rounded-circle spacing top-spacing" style="object-fit: cover;">
                        <div class="details">
                            <p class="nama-text">{{$doctor->namadokter}}</p>
                            <p class="poli-text">{{$doctor->polidokter}}</p>
                        </div>
                        <div class="button-wrapper">
                            <a class="button btn btn-success" href="{{url('updatedokter/'.$doctor->iddokter.'/update')}}">Edit</a>
                            <form action="{{url('/deletedoctor/'.$doctor->iddokter.'/delete')}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger right-spacing">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
                
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
