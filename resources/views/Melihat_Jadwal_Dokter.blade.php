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
        <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
        </div>
    </header>
    <main>
    <div class="row">
    <div class="h2">
            <h2>Jadwal Dokter</h2>
        </div>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            @foreach ($doctors as $doctor)
            <img src="{{asset('storage/'.$doctor->wajahdokter)}}" alt="" width="70" height="70" class="rounded-circle spacing top-spacing" style="object-fit: cover;">
            <span class= name_doctor> <li>{{$doctor->namadokter }}</li></span>
            <div class="card-header">
                    Poli: {{ $doctor->polidokter}}
                </div>
            <div class="days">
                                <div class="day">Senin</div>
                                <div class="day">Selasa</div>
                                <div class="day">Rabu</div>
                                <div class="day">Kamis</div>
                                <div class="day">Jumat</div>
                                <div class="day">Sabtu</div>
                            </div>
                            <div class="times">
                                <div class="time">{{ \Carbon\Carbon::parse($doctor->seninstart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->seninend)->format('H:i') }}</div>
                                <div class="time">{{ \Carbon\Carbon::parse($doctor->selasastart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->selasaend)->format('H:i') }}</div>
                                <div class="time">{{ \Carbon\Carbon::parse($doctor->rabustart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->rabuend)->format('H:i') }}</div>
                                <div class="time">{{ \Carbon\Carbon::parse($doctor->kamisstart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->kamisend)->format('H:i') }}</div>
                                <div class="time">{{ \Carbon\Carbon::parse($doctor->jumatstart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->jumatend)->format('H:i') }}</div>
                                <div class="time">{{ \Carbon\Carbon::parse($doctor->sabtustart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->sabtuend)->format('H:i') }}</div>
                            </div>
                            @endforeach
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