<!DOCTYPE html>
<html>
<head>
    <title>Menerima Kunjungan Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/desktop.css') }}">
    <style>
        .queue-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            background-color: #fff;
            color: #000;
        }
        .button-wrapper {
            display: flex;
            align-items: center;
        }
        .details {
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @include('partials.sidebar')

            <div class="col-10 green-background text-white">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="title-text">Kunjungan Pasien</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Admin
                        </button>
                    </div>
                </div>
                @foreach($kunjungans as $kunjungan)
                <div class="queue-wrapper">
                    <div class="details">
                        <p class="antrian-text"><strong>ID Kunjungan:</strong> {{ $kunjungan->idkunjungan }}</p>
                        <p class="antrian-text"><strong>Nama:</strong> {{ $kunjungan->nama_depan }} {{ $kunjungan->nama_belakang }}</p>
                        <p class="antrian-text"><strong>NIK:</strong> {{ $kunjungan->nik }}</p>
                        <p class="antrian-text"><strong>Email:</strong> {{ $kunjungan->email }}</p>
                        <p class="antrian-text"><strong>Nomor HP:</strong> {{ $kunjungan->no_hp }}</p>
                        <p class="antrian-text"><strong>Nama Pasien:</strong> {{ $kunjungan->namapasien }} </p>
                        @if($kunjungan->pasien)
                            <p class="antrian-text"><strong>Nomor Kamar:</strong> {{ $kunjungan->pasien->nomerkamar }}</p>
                            <p class="antrian-text"><strong>Lantai Kamar:</strong> {{ $kunjungan->pasien->lantaikamar }}</p>
                        @else
                            <p class="antrian-text"><strong>Nomor Kamar:</strong> Tidak ditemukan</p>
                            <p class="antrian-text"><strong>Lantai Kamar:</strong> Tidak ditemukan</p>
                        @endif
                        <p class="antrian-text"><strong>Tanggal:</strong> {{ $kunjungan->tanggal }}</p>
                        <p class="antrian-text"><strong>Waktu:</strong> {{ $kunjungan->waktu }}</p>
                    </div>
                    <!-- <div class="button-wrapper">
                        <form action="{{ url('/deletekunjungan/'.$kunjungan->idkunjungan) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger right-spacing" type="submit">Delete</button>
                        </form>
                    </div> -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
