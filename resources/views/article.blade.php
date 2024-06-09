<!-- resources/views/article.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
</head>
<body>
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Obat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body style="background-color: #F8FAFD;">

<div class="container mt-5">
    <div class="card" style="max-width: 500px; margin: auto;">
        <div class="card-header text-center" style="background-color: #DFFF00;">
        <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
            </div>
            <h2 style="color: #21BF73;">Informasi Obat</h2>
            
        </div>
        <div class="card-body">
        <h1 class="text-center">{{ $informasiObat->name }}</h1>
        <p>{{ $informasiObat->description }}</p>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
           

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>
