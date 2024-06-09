<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Artikel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/../css/desktop.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            @include('partials.sidebar')
            <!-- Main content -->
            <div class="col-10 p-5" style="background-color: #21BF73;">
                <h1 class="fw-bold" style="color: white">Manajemen Artikel</h1>
                <div style="background-color: white; color: black;" class="rounded-3 w-full p-3">
                    <h3 class="fw-bold">Daftar Artikel</h3>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalStore">Tambah</button>

                    <!-- Modal Store -->
                    <div class="modal fade" id="modalStore" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input name="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                        </div>
                                        <div class="input-group input-group-sm mb-3">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                                            <textarea name="description" class="form-control" aria-label="With textarea" rows="10" required></textarea>
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
                            <div style="background-image: url('{{ asset('storage/'. $data->image) }}'); width: 120px; height: 120px; background-position: center; background-size: cover; background-color: white; border-radius: 0.5rem; background-repeat: no-repeat;"></div>
                            <div style="display: flex; flex-direction: column; justify-content: center; row-gap: 0.5rem; width: 60%; padding: 4px;">
                                <div style="font-size: 1rem; font-weight: 500">{{ Illuminate\Support\Str::limit($data->title, 20) }}</div>
                                <div style="font-size: 0.7rem">{{ Illuminate\Support\Str::limit($data->description, 80) }}</div>
                                <div>   
                                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEdit{{$data->id}}">Edit</button>
                                    <button class="btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{$data->id}}">Delete</button>
                                </div>
                            </div>
                        </div>  

                        <!-- Modal Edit -->
                        <div class="modal fade" id="modalEdit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Artikel</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('artikel.update', $data->id) }}" enctype="multipart/form-data" method="post">
                                        @csrf
                                        @method('patch')
                                        <div class="modal-body">
                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Title</span>
                                                <input name="title" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $data->title }}" required>
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                                                <textarea name="description" class="form-control" aria-label="With textarea" rows="10" required>{{ $data->description }}</textarea>
                                            </div>
                                            <div class="input-group input-group-sm mb-3">
                                                <input name="image" type="file" class="form-control" id="inputGroupFile02">
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
                        <!-- Modal Edit -->

                        <!-- Modal Delete -->
                        <div class="modal fade" id="modalDelete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Artikel</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>