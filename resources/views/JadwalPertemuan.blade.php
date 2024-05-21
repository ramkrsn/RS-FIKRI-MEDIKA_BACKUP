<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="top-section">
        <div class="image-container">
            <img src="img/Logo.png" alt="Image">
        </div>
        <div class="x-button" href=""><img src="img/X.png" alt="Image"></div>
        <h1 class="top-text">Jadwal Dokter</h1>
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
                <div>
                    <h2 class="spacing">Data Pasien</h2>
                    <input type="text" name="namadepan" placeholder="Nama Depan" class="input-choice" required>
                </div>
                <div>
                    <input type="text" name="namabelakang" placeholder="Nama Belakang" class="input-choice" required>
                </div>
                <div>
                    <input type="text" name="NIK" placeholder="NIK" class="input-choice" required>
                </div>
                <div>
                    <input name="keluhanpasien" placeholder="Keluhan Pasien" class="input-choice-keluhan" required></input>
                </div>
                <div>
                    <input type="date" name="tanggalpertemuan" placeholder="Tanggal pertemuan" class="input-choice" required>
                </div>
                <div>
                    <input type="time" name="jampertemuan" placeholder="Jam pertemuan" class="input-choice" required>
                </div>
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

</body>
</html>
