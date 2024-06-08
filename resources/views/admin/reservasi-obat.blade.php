@extends('admin.layout.main-layout')

@section('title', 'Manajemen Obat')

<!-- @section('redeem-point', 'active') -->

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
                            <th>Nama Obat</th>
                            <th>Resep Obat</th>
                            <th>Nomor Antrian</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_obat as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_obat }}</td>
                                <td>{{ $data->resep_obat }}</td>
                                <td>{{ $data->nomor_antrian }}</td>
                                <td>
                                    <div>
                                        @if ($data->status == '-')
                                            <p class="fw-bolder text-status text-secondary m-0 ">-</p> 
                                        @elseif ($data->status == 'Pending')
                                            <p class="fw-bolder text-status text-warning m-0">Pending</p>
                                        @elseif ($data->status == 'Siap Diambil')
                                            <p class="fw-bolder text-status text-success m-0">Siap Diambil</p>
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
                                            <form method="POST" action="{{ route('reservasi-obat.update', ['id' => $data->id]) }}">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="dropdown-item" name="status" value="-">-</button>
                                                <button type="submit" class="dropdown-item" name="status" value="Pending">Pending</button>
                                                <button type="submit" class="dropdown-item" name="status" value="Siap Diambil">Siap Diambil</button>
                                            </form>
                                        </ul>
                                        <i class="bi bi-trash3-fill icon-background delete-icon text-danger" data-bs-toggle="modal" data-bs-target="#modal{{ $data->id }}"></i>
                                        <!-- Modal -->  
                                        <div class="modal fade" id="modal{{ $data->id }}" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Konfirmasi Hapus Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah Anda yakin menghapus data yang dipilih?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <a class="btn btn-danger" href="{{ route('reservasi-obat.delete', ['id' => $data->id]) }}">
                                                        Hapus
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                        </div><!-- End Modal-->
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
