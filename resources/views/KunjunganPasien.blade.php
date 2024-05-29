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
    </style>
</head>
<body>
    <div class="container">
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
                        <label for="nomor_handphone">Nomor Handphone</label>
                        <input type="text" class="form-control" id="nomor_handphone" name="nomor_handphone" required>
                    </div>
                    <h5>Data Pasien</h5>
                    <div class="form-group">
                        <label for="nama_lengkap_pasien">Nama Lengkap Pasien</label>
                        <input type="text" class="form-control" id="nama_lengkap_pasien" name="nama_lengkap_pasien" required>
                    </div>
                    <div class="form-group">
                        <label for="no_id_pasien">No. ID Pasien</label>
                        <input type="text" class="form-control" id="no_id_pasien" name="no_id_pasien" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Cek Jadwal Kunjungan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
