@extends('admin.layout.main-layout')

@section('title', 'Manajemen Antrian')

<!-- @section('redeem-point', 'active') -->

@section('content')
<div class="h-vh-100 p-5" style="background-color: #21BF73; width: 83vw">
        <h1 class="fw-bold" style="color: white">Manajemen Antrian</h1>
        <div style="background-color: white; color: black;" class="rounded-3 w-full p-3">
            <h3 class="fw-bold">Daftar Antrian Pertemuan</h3>
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
                            <th>ID</th>
                            <th>Nama Pasien</th>
                            <th>NIK</th>
                            <th>Keluhan</th>
                            <th>Tanggal Pertemuan</th>
                            <th>Jam Pertemuan</th>
                            <th>Poli Dokter</th>
                            <th>Nama Dokter</th>
                            <th>Opsi</th>
                            <th>Status</th>
                            <th>Ubah Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwalpertemuan as $jadwal)
                            <tr>
                                <td>{{ $jadwal->idjadwalpertemuan }}</td>
                                <td>{{ $jadwal->namadepan }} {{ $jadwal->namabelakang }}</td>
                                <td>{{ $jadwal->NIK }}</td>
                                <td>{{ $jadwal->keluhanpasien }}</td>
                                <td>{{ $jadwal->tanggalpertemuan }}</td>
                                <td>{{ $jadwal->jampertemuan }}</td>
                                <td>{{ $jadwal->polidokter }}</td>
                                <td>{{ $jadwal->namadokter }}</td>
                                <td>{{ $jadwal->opsi }}</td> 
                                <td>
                                    <div>
                                        @if ($jadwal->status == 'pending')
                                            <p class="fw-bolder text-status text-secondary m-0 ">Pending</p> 
                                        @elseif ($jadwal->status == 'done')
                                            <p class="fw-bolder text-status text-success m-0">Done</p>
                                        @elseif ($jadwal->status == 'cancel')
                                            <p class="fw-bolder text-status text-warning m-0">Cancel</p>
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
                                            <form method="POST" action="{{ route('manage-antrian.update', ['id' => $jadwal->idjadwalpertemuan]) }}">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="dropdown-item" name="status" value="pending">Pending</button>
                                                <button type="submit" class="dropdown-item" name="status" value="done">Done</button>
                                                <button type="submit" class="dropdown-item" name="status" value="cancel">Cancel</button>
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
