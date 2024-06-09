@extends('admin.layout.main-layout')

@section('title', 'Manajemen Obat')

@section('content')
<div class="h-vh-100 p-5" style="background-color: #21BF73; width: 83vw">
        <h1 class="fw-bold" style="color: white">Manajemen Obat</h1>
        <div style="background-color: white; color: black;" class="rounded-3 w-full p-3">
            <h3 class="fw-bold">Daftar Obat</h3>
            <button class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#modalStore">Tambah</button>
            @if (Session::has('success'))
                <div class="alert alert-success alert-lg"> {{ Session::get('success') }}</div>
            @elseif (Session::has('fail'))
                <div class="alert alert-danger alert-lg"> {{ Session::get('fail') }}</div>
            @elseif (Session::has('successDeleteObat'))
                <div class="alert alert-success alert-lg"> {{ Session::get('successDeleteObat') }}</div>
            @endif
            <!-- Content -->
            <div class="col">
                <table class="table my-4">
                    <thead class="table-light">
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Obat</th>
                            <th>Resep Obat</th>
                            <th>Nomor Antrian</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_obat as $data)
                            <tr>
                                <td scope="row">{{ $loop -> iteration }}</td>
                                <td scope="row">{{ $data -> nama_obat }}</td>
                                <td scope="row">{{ $data -> resep_obat }}</td>
                                <td scope="row">{{ $data -> nomor_antrian }}</td>
                                <td scope="row">
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEdit{{$data->id}}">Edit</button>
                                    <button class="btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{$data->id}}">Delete</button>

                                    <!-- Modal Edit -->
                                    <div class="modal fade" id="modalEdit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Obat</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('obat.update', $data->id) }}" enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    @method('patch')
                                                    <div class="modal-body">
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Nama Obat</span>
                                                            <input name="nama_obat" type="text" class="form-control"
                                                                aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                                                value="{{ $data -> nama_obat }}">
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Resep Obat</span>
                                                            <textarea name="resep_obat" class="form-control" aria-label="With textarea"
                                                                rows="10">{{ $data -> resep_obat }}</textarea>
                                                        </div>
                                                        <div class="input-group input-group-sm mb-3">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">Nomor Antrian</span>
                                                            <select name="idjadwalpertemuan" class="form-select" required>
                                                                    @foreach ($id_pertemuan as $nomor_antrian)
                                                                    <option value="{{ $nomor_antrian->idjadwalpertemuan }}">{{ $nomor_antrian -> idjadwalpertemuan }}</option>
                                                                    @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Edit -->

                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="modalDelete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Obat</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    "Apakah yakin untuk menghapus obat ini!?"
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{ route('data-obat.delete', ['id' => $data->id]) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tidak</button>
                                                        <button type="submit" class="btn btn-primary">Ya</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Delete -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Content -->
            <!-- Modal Store -->
            <div class="modal fade" id="modalStore" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Obat</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('obat.add') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nama Obat</span>
                                    <input name="nama_obat" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                        required>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Resep Obat</span>
                                    <textarea name="resep_obat" class="form-control" aria-label="With textarea"
                                        rows="10" required></textarea>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nomor Antrian</span>
                                    <select name="idjadwalpertemuan" class="form-select" required>
                                            @foreach ($id_pertemuan as $nomor_antrian)
                                            <option value="{{ $nomor_antrian->idjadwalpertemuan }}">{{ $nomor_antrian -> idjadwalpertemuan }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Store -->

            
        </div>
    </div>
@endsection
