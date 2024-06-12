<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FikriMedika</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styleJadwal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>
<body>
<div class="wrapper">
<header class="header">
        <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
        </div>
        <button id="openToggle" style="background-color: transparent; border: none; cursor: pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#21BF73" class="menu">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
        </header>
    <div class="row">
    <div class="h2">
            <h2>Jadwal Dokter</h2>
        </div>
        <ul>
            <div class="shadow p-3 mb-5 bg-body rounded">
            @foreach ($doctors as $doctor)
            <img src="{{asset('storage/'.$doctor->wajahdokter)}}" alt="" width="100" height="100" class="rounded-circle spacing top-spacing" style="object-fit: cover;">
            <span class= name_doctor> <li>{{$doctor->namadokter }}</li></span>
            <div class="card-header">
                    Poli: {{ $doctor->polidokter}}
                </div>
                <section id="content" style="padding: 16px; min-height: 100%"></section>
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

    <!-- <div style="width: 100%; height: full; position: relative; background-color: #F8FAFD; z-index: 2000">
        <div style="position: absolute;background-color: white ;width: 100%; height: 100%; z-index: 50"></div>
        <div class="sidebar">
            <div style="width: 100%; display: flex; justify-content: flex-end; padding: 4px;">
                <button id="closeToggle" style="background-color: transparent; border: none; cursor:pointer ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="#21BF73" class="menu">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div
                style="display: flex; 	flex-direction: column; align-items: flex-end;  justify-content: flex-end; padding-right: 10px; row-gap: 0.5rem;">
                <a href="#" class="w3-bar-item w3-button"
                    style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #21BF73; color: white; border-radius: 0.375rem;">Masuk</a>
                <a href="#" class="w3-bar-item w3-button"
                    style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #21BF73; color: white; border-radius: 0.375rem;">Daftar</a>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("DOMContentLoaded", () => {
            document.getElementById("openToggle").addEventListener("click", () => {
                const sidebarEl = document.getElementsByClassName("sidebar")[0];
                sidebarEl.classList.toggle("hidden");
            });
            document.getElementById("closeToggle").addEventListener("click", () => {
                const sidebarEl = document.getElementsByClassName("sidebar")[0];
                sidebarEl.classList.toggle("hidden");
            });
        });

    </script> --> -->

       
 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Melihat Jadwal Dokter</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <style>
        .hidden {
            transform: translateX(-16rem);
            transition: transform 300ms ease-out;
        }

        .sidebar {
            background-color: #ffffff;
            width: 16rem;
            height: 100vh;
            padding: 16px 10px 0 0;
            position: fixed;
            transition: transform 300ms ease-in;
            top: 0;
        }

        .menu-sidebar {
            padding: 4px 6px;
            border-radius: 0.5rem;
        }

        .menu-sidebar:hover {
            color: #F1F864;
            background-color: #F1F864;
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .shadow {
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
        }

        .menu {
            width: 32px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            width: 100%;
            max-width: 480px;
            margin: 0 auto;
            /* padding: 0px 0px 20px 0px; */
        }

        .header {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: #21BF73;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #F1F864;
            padding: 10px;
            padding-top: 20px;
            box-shadow:
                0px 12.6px 10px rgba(0, 0, 0, 0.092),
                0px 88px 80px rgba(0, 0, 0, 0.07);
        }

        .title-container {
            background: white;
            padding: 5px 0px 5px 0px;
        }

        .image {
            padding: 0px;
            margin: 0px;
            height: 273px;
            width: 100%;
            max-width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .header-title {
            color: #21BF73;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        #content {
            background: #FAF8ED;
        }

        .main {
            align-items: center;
            text-align: center;
            padding: 10px 70px 10px 70px;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .section h3 {
            font-size: 18px;
            margin-bottom: 5px;
            align-items: center;
        }

        .section p {
            line-height: 1.5;
            margin-bottom: 20px;
            /* Add spacing between sections */
            align-items: center;
        }
        .card-header {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    justify-content: space-between;
    align-items: center;
    background: #F1F864;
}


        /* Mobile Responsive Styles */
        @media only screen and (max-width: 768px) {
            .main-content {
                flex-direction: column;
            }
        }

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

        a {
            text-decoration: none;
        }   
.form-group {
    margin-bottom: 20px; /* Adjust the value as needed */
}

.days, .times {
    display: flex;
    justify-content: space-between;
}
.day, .time {
    flex: 1;
    margin-top: 5px;
}
.name_doctor{
    font-size: 30px;
}

.ul {
    list-style: none;
    padding: 0;
    margin: 40px;
    border: 1px solid #ccc; /* Warna dan ketebalan border */
    border-radius: 8px; /* Sudut melengkung */
    padding: 20px; /* Padding di dalam kotak */
    margin-bottom: 20px; /* Spasi antar kotak */
    background-color: #fff; /* Warna latar belakang */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan */
    
}
    </style>
</head>

<body class="poppins-regular" style="display: flex; min-height: 100vh">
    <div style="width: 100%; height: full; background-color: #F8FAFD; z-index: 2000"></div>
    <div class="wrapper">
        <header class="header h1">
        <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
            </div>
            <button id="openToggle" style="background-color: transparent; border: none; cursor: pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#21BF73" class="menu">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </header>
        <p class="header-title poppins-bold">Jadwal Dokter</p>
        
        <ul class="ul">
            @foreach ($doctors as $doctor)
            <img src="{{asset('storage/'.$doctor->wajahdokter)}}" alt="" width="100" height="100" class="rounded-circle spacing top-spacing" style="object-fit: cover;">
            <span class= name_doctor> <li>{{$doctor->namadokter }}</li></span>
            <div class="card-header">
                    Poli: {{ $doctor->polidokter}}
                </div>
                <!-- <section id="content" style="padding: 16px; min-height: 100%"></section> -->
            <div class="days">
                                <div class="day">Senin</div>
                                <div class="day">Selasa</div>
                                <div class="day">Rabu</div>
                                <div class="day">Kamis</div>
                                <div class="day">Jumat</div>
                                <div class="day">Sabtu</div>
                            </div>
                            <div class="times">
                                @if($doctor->seninstart && $doctor->seninend)
                                    <div class="time">{{ \Carbon\Carbon::parse($doctor->seninstart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->seninend)->format('H:i') }}</div>
                                @endif
                                @if($doctor->selasastart && $doctor->selasaend)
                                    <div class="time">{{ \Carbon\Carbon::parse($doctor->selasastart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->selasaend)->format('H:i') }}</div>
                                @endif
                                @if($doctor->rabustart && $doctor->rabuend)
                                    <div class="time">{{ \Carbon\Carbon::parse($doctor->rabustart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->rabuend)->format('H:i') }}</div>
                                @endif
                                @if($doctor->kamisstart && $doctor->kamisend)
                                    <div class="time">{{ \Carbon\Carbon::parse($doctor->kamisstart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->kamisend)->format('H:i') }}</div>
                                @endif
                                @if($doctor->jumatstart && $doctor->jumatend)
                                    <div class="time">{{ \Carbon\Carbon::parse($doctor->jumatstart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->jumatend)->format('H:i') }}</div>
                                @endif
                                @if($doctor->sabtustart && $doctor->sabtuend)
                                    <div class="time">{{ \Carbon\Carbon::parse($doctor->sabtustart)->format('H:i') }} - {{ \Carbon\Carbon::parse($doctor->sabtuend)->format('H:i') }}</div>
                                @endif
                            </div>

                            @endforeach
            <div class="container text-left">
            <div class="row-row-cols-auto">   
        </ul>
    </div>
    </div>
    @include('partials.sidebaruser') 
