@extends('admin.layout.main-layout')

@section('title', 'Manajemen Obat')

@section('content')
<div class="h-vh-100 p-5" style="background-color: #21BF73; width: 83vw">
    <h1 class="fw-bold" style="color: white">Reservasi Obat</h1>
    <div style="background-color: white; color: black;" class="rounded-3 w-full p-3">
        <h3 class="fw-bold">Daftar Reservasi Obat</h3>
        @if (Session::has('success'))
            <div class="alert alert-success alert-lg"> {{ Session::get('success') }}</div>
        @elseif (Session::has('fail'))
            <div class="alert alert-danger alert-lg"> {{ Session::get('fail') }}</div>
        @endif
        <!-- Content -->
        <div class="col">
            <table class="table table-bordered my-4">
                <thead class="table-light">
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Pasien</th>
                        <th>Nama Poli</th>
                        <th>Tanggal Pertemuan</th>
                        <th>Nomor Antrian</th>
                        <th>Status Obat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reservasiobat as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->namadepan }} {{ $data->namabelakang }}</td>
                            <td>{{ $data->polidokter }}</td>
                            <td>{{ \Carbon\Carbon::parse($data->tanggalpertemuan)->format('d-m-Y') }}</td>
                            <td>{{ $data->nomor_antrian }}</td>
                            <td>
                                <div>
                                    @if ($data->statusobat == 'pending')
                                        <p class=class="fw-bolder text-status m-0" style="color: rgb(255, 0, 0); font-weight: bold;">Sedang Diproses</p>
                                    @elseif ($data->statusobat == 'Sudah Diambil')
                                        <p class="fw-bolder text-status text-warning m-0" style="color: rgb(91, 198, 91); font-weight: bold;">Sudah Diambil</p>
                                    @elseif ($data->statusobat == 'Siap Diambil')
                                        <p class="fw-bolder text-status text-success m-0" style="color: rgb(247, 255, 2); font-weight: bold;">Siap Diambil</p>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots m-3"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Ubah Status</h6>
                                        </li>
                                        <form method="POST" action="{{ route('jadwal-reservasi-obat.update', ['idjadwalpertemuan' => $data->idjadwalpertemuan]) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit" class="dropdown-item" name="statusobat" value="pending">Sedang Diproses</button>
                                            <button type="submit" class="dropdown-item" name="statusobat" value="Sudah Diambil">Sudah Diambil</button>
                                            <button type="submit" class="dropdown-item" name="statusobat" value="Siap Diambil">Siap Diambil</button>
                                        </form>
                                    </ul>
            
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Content -->
    </div>
</div>
@endsection
