<!DOCTYPE html>
<html>
<head>
    <title>Kunjungan Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .card-header {
            background-color: #ffeb3b;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        
        .top-section {
        position: relative; 
         background-color: #ffeb3b; 
         min-height: 100px;
         border-radius: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
    <div class="top-section">
        <div class="image-container">
            <img src="img/Logo.png" alt="Image">
        </div>
        <div class="card">
            <div class="card-header">
                Kunjungan Pasien
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
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
        </div>
    </div>
</body>
</html>
