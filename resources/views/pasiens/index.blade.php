<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Pasien</title>
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
                    <h1 class="title-text">Manajemen Pasien</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                <div class="container-inner">
                    <h1 class="black-title spacing">List Pasien</h1>
                    <a class="button btn btn-green spacing" href="{{route('pasien.create')}}">Add</a>
                  
                    <div class="table-container">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">NIK</th>
                                    <th scope="col">Nomer Kamar</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Lantai Kamar</th>
                                    <th scope="col">Penyakit</th>
                                    <th scope="col">Dokter</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Tanggal Keluar</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Edit</th>

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($pasiens as $pasien)
                                <tr>
                                    <td>{{$pasien->namapasien}}</td>
                                    <td>{{$pasien->nik}}</td>
                                    <td>{{$pasien->nomerkamar}}</td>
                                    <td>{{$pasien->no_hp}}</td>
                                    <td>{{$pasien->lantaikamar}}</td>
                                    <td>{{$pasien->penyakit}}</td>
                                    <td>{{$pasien->dokter}}</td>
                                    <td>{{$pasien->tanggal_masuk}}</td>
                                    <td>{{$pasien->tanggal_keluar}}</td>
                                    <td>{{$pasien->status}}</td>
                                    <td class="d-flex">
                                        <a class="btn btn-success btn-space" href="{{url('pasien/'.$pasien->idpasien.'/edit')}}">Edit</a>
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
