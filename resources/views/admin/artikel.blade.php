<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Artikel</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .poppins-thin {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .poppins-extralight {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .poppins-light {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .poppins-semibold {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .poppins-extrabold {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .poppins-black {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .poppins-thin-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .poppins-extralight-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .poppins-light-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .poppins-regular-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .poppins-medium-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .poppins-semibold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .poppins-bold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .poppins-extrabold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .poppins-black-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

        .shadow {
            box-shadow:
                0px 12.6px 10px rgba(0, 0, 0, 0.092),
                0px 88px 80px rgba(0, 0, 0, 0.07);
        }

        .bi {
        color: #21BF73;
        margin-right: 14px;
        font-size: 22px;
        }

    </style>
</head>

<body class="min-vh-100 d-flex poppins-regular">
<div class="h-vh-100 p-4 d-flex flex-column gap gap-2" id="sidebar" style="width: 17vw">
        <div class="d-flex align-items-center">
            <div style="width: 16%">
                <img src="{{ asset('assets/dashboard.png') }}" alt="Dashboard">
            </div>
            Dashboard
        </div>
        <div class="d-flex align-items-center">
            <div style="width: 16%">
                <img src="{{ asset('assets/manajemendokter.png') }}" alt="Manajemen Dokter">
            </div>
            Manajemen Dokter
        </div>
        <div class="d-flex align-items-center">
            <div style="width: 16%">
                <img src="{{ asset('assets/manajemenkamar.png') }}" alt="Manajemen Kamar">
            </div>
            Manajemen Kamar
        </div>
        <div>
            <a class="nav-link d-flex align-items-center" href="{{url('/manage-obat')}}">
                <i class="bi bi-capsule-pill"></i>
                <span class="m-0">Manajemen Obat</span>
            </a>
        </div>
        <div>
            <a class="nav-link d-flex align-items-center" href="{{url('/admin/artikel')}}">
                <i class="bi bi-book-half"></i>
                <span class="m-0">Manajemen Artikel</span>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <div style="width: 16%">
                <img src="{{ asset('assets/reservasi.png') }}" alt="Reservasi">
            </div>
            Reservasi
        </div>
    </div>
    <div class="h-vh-100 p-5" style="background-color: #21BF73; width: 83vw">
        <h1 class="fw-bold" style="color: white">Manajemen Artikel</h1>
        <div style="background-color: white; color: black;" class="rounded-3 w-full p-3">
            <h3 class="fw-bold">Daftar Artikel</h3>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalStore">Tambah</button>

            <!-- Modal Store -->

            <div class="modal fade" id="modalStore" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Artikel</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('artikel.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
                                    <input name="title" type="text" class="form-control"
                                        aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                        required>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                                    <textarea name="description" class="form-control" aria-label="With textarea"
                                        rows="10" required></textarea>
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <input name="image" type="file" class="form-control" id="inputGroupFile02" required>
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal Store -->

            <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr));" class="gap gap-2 mt-3">
                @foreach($artikels as $data)
                <div class="shadow" style="background-color: white; display: flex; gap: 1rem; 	border-radius: 0.5rem;">
                    <div
                        style="background-image: url('{{ asset('storage/artikelphoto/'. $data->image) }}'); width: 120px; height: 120px; background-position: center; background-size: cover; background-color: white; border-radius: 0.5rem; background-repeat: no-repeat;">
                    </div>
                    <div
                        style="display: flex; flex-direction: column; justify-content: center; row-gap: 0.5rem; width: 60%; padding: 4px;">
                        <div style="font-size: 1rem; font-weight: 500">
                            {{ Illuminate\Support\Str::limit($data->title, 20) }}</div>
                        <div style="font-size: 0.7rem">
                            {{ Illuminate\Support\Str::limit($data->description, 80)    }}</div>
                        <div>
                            <button class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modalEdit{{$data->id}}">Edit</button>
                            <button class="btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{$data->id}}">Delete</button>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="modalEdit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Artikel</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('artikel.update', $data->id) }}" enctype="multipart/form-data"
                                method="post">
                                @csrf
                                @method('patch')
                                <div class="modal-body">
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
                                        <input name="title" type="text" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
                                            value="{{ $data->title }}" required>
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                                        <textarea name="description" class="form-control" aria-label="With textarea"
                                            rows="10" required>{{ $data->description }}</textarea>
                                    </div>
                                    <div class="input-group input-group-sm mb-3">
                                        <input name="image" type="file" class="form-control" id="inputGroupFile02">
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Artikel</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                "Do you really want to delete this article!?"
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('artikel.destroy', $data->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-primary">Yes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Delete -->
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
