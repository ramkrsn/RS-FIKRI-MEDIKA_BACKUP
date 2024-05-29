<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunjungan Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h3 class="card-title">Kunjungan Pasien</h3>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="/patient-visit/schedule" method="POST">
                    @csrf
                    <h5>Pilih Jadwal</h5>
                    <div class="form-group">
                        <label for="date">Tanggal</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Waktu</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                    <button type="submit" class="btn btn-success">Jadwalkan Kunjungan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
