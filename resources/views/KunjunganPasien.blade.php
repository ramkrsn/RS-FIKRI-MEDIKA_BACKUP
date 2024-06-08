<!DOCTYPE html>
<html>
<head>
    <title>Kunjungan Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styleJadwal.css') }}">
    <style>
       
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="image-container">
                <img src="img/Logo.png" alt="Image">
            </div>
            <div class="card-header">
                Kunjungan Pasien
            </div>
            <div class="card-body">
                    <form action="{{url('KunjunganPasien')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5>Data Pengunjung</h5>
                        <div class="form-group">
                            <label for="nama_depan">Nama Depan</label>
                            <input type="text" class="form-control" id="nama_depan" name="nama_depan" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_belakang">Nama Belakang</label>
                            <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" required>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK / No KTP Pengunjung</label>
                            <input type="text" class="form-control" id="nik" name="nik" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor Handphone</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>
                        <h5>Data Pasien</h5>
                        <div class="form-group">
                            <label for="nama_pasien">Nama Lengkap Pasien</label>
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
                        </div>
                        <div class="form-group">
                            <label for="id_pasien">No. ID Pasien</label>
                            <input type="text" class="form-control" id="id_pasien" name="id_pasien" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input type="time" class="form-control" id="waktu" name="waktu" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success btn-block">Jadwalkan Kunjungan</button>
                        </div>
                    </form>
            </div> 
        </div> <!-- This closes card -->
    </div> <!-- This closes container -->
</body>
</html>
