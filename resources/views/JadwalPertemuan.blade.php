<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<title>Jadwalkan Pertemuan</title>
</head>
<body>

<div class="container">
    <div class="top-section">
        <div class="image-container">
            <img src="img/Logo.png" alt="Image">
        </div>
        <a class="x-button" href="{{ url('home') }}"><img src="img/X.png" alt="Image"></a>
        <h1 class="top-text">Jadwalkan Pertemuan</h1>
    </div>

    <div class="section">
        <form action="{{ route('jadwalpertemuan') }}" method="POST">
            @csrf
            <div class="dropdown-container">
                <h2>Pilih opsi</h2>
                <select class="dropdown" name="opsi">
                    <option value="Pertemuan dengan Dokter">Pertemuan dengan Dokter</option>
                    <option value="Medical Check-Up">Medical Check-Up</option>
                </select>
            </div>

            <div class="data-pasien">
                <h2 class="spacing">Data Pasien</h2>
                <input type="text" name="namadepan" placeholder="Nama Depan" class="input-choice" required>
                <input type="text" name="namabelakang" placeholder="Nama Belakang" class="input-choice" required>
                <input type="number" name="NIK" placeholder="NIK" class="input-choice" required>
                <textarea name="keluhanpasien" placeholder="Keluhan Pasien" class="input-choice-keluhan" required></textarea>
                <input type="date" name="tanggalpertemuan" placeholder="Tanggal pertemuan" class="input-choice" required>
                <input type="time" name="jampertemuan" placeholder="Jam pertemuan" class="input-choice" required>
            </div>

            <div class="dropdown-container">
                <div class="nama-dokter-container">
                    <h2 class="spacing">Pilih Dokter</h2>
                    <select class="dropdown input-choice" name="namadokter">
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->namadokter }}">{{ $doctor->namadokter }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="poli-dokter-container">
                    <select class="dropdown input-choice" name="polidokter">
                        @foreach($doctors as $doctor)
                            <option value="{{ $doctor->polidokter }}">{{ $doctor->polidokter }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="next-container">
                <button type="submit" class="next spacing">Jadwalkan Pertemuan</button>
            </div>
        </form>
    </div>
</div>

@if (session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif

@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

</body>
</html>
