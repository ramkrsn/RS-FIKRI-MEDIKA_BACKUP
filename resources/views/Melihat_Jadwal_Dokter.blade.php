<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FikriMedika</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styleJadwal.css') }}">
</head>
<body>
    <header>
        <div class="container_header">
            <img src="image 1.png" alt="Logo FikriMedika" class="img-fluid">
        </div>
    </header>
    <main>
    <div class="row">
    <div class="h2">
            <h2>Jadwal Dokter</h2>
        </div>
    <div> <h3>Poli Penyakit Dalam</h3>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name_doctor>@foreach ($doctorNames as $doctorName)
                                    <li>{{ $doctorName }}</li>
                                    @endforeach</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
            
        </ul>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name>{{$doctor->namadokter}}</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
        
        </ul>
    </div>
    <div> <h3>Poli Anak</h3>
    <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name>Dr. Ade Hafni, Sp.A</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
        
        </ul>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name>Dr. Irma Laila, Sp.A</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
        
        </ul>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name>Dr. Adam Sultansah H., Sp.A</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
        
        </ul>
    </div>
    <div> <h3>Poli Kandungan (Obgyn)</h3>
    <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name>Dr. Dendi Suryadi K, Sp.Og</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
        
        </ul>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name>Dr. Yandi Jayaprana, Sp.Og</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
        
        </ul>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            <img src="DOKTER FOTO.jpeg" class= "fotodokter">    
            <span class= name>Dr. Mariana Afiati H, Sp.Og</span>
            <div class="space">
                Senin    Selasa     Rabu    Kamis    Jumat</div>
            <div class="space2">
                08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00 08.00-12.00</div>
            <div class="container text-left">
            <div class="row-row-cols-auto">
        
        </ul>
    </div>
</div>
 </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 FikriMedika</p>
        </div>
    </footer>
</body>
</html>