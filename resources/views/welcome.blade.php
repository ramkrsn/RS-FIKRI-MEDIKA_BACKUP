<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profil RSU Fikri Medika</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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

        .menu {
            width: 32px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: bold;
            color: #21BF73;
        }

        .wrapper {
            width: 100%;
            max-width: 480px;
        }

        a {
            text-decoration: none;
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

        .header {
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

        .title-wrapper {
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

    </style>
</head>

<body style="display: flex; min-height: 100vh">
    <div style="width: 100%; height: full; background-color: #F8FAFD;"></div>
    <div class="wrapper" style="min-height: 100vh">
        <header class="header h1">
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
            </div>
            <button id="openToggle" style="background-color: transparent; border: none; cursor:pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="#21BF73" class="menu">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </header>

        <p class="header-title poppins-bold pt-3">Artikel Online</p>

        <section id="content" style="min-height: 80vh">
            <div style="display: flex; flex-direction: column; gap: 0.75rem; padding: 12px;">
                @foreach($artikels as $data)
                <a href="{{ route('artikel.show', $data->id) }}" style="color: black">
                    <div class="shadow"
                        style="background-color: white; display: flex; gap: 1rem; 	border-radius: 0.5rem;">
                        <div
                            style="background-image: url('{{ asset('storage/artikelphoto/'. $data->image) }}'); width: 120px; height: 120px; background-position: center; background-size: cover; background-color: white; border-radius: 0.5rem; background-repeat: no-repeat;">
                        </div>
                        <div
                            style="display: flex; flex-direction: column; justify-content: center; row-gap: 0.5rem; width: 60%; padding: 4px;">
                            <div style="font-size: 1rem; font-weight: 500">
                                {{ Illuminate\Support\Str::limit($data->title, 50) }}</div>
                            <div style="font-size: 0.7rem">
                                {{ Illuminate\Support\Str::limit($data->description, 120)    }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            <div style="padding: 16px">
                <h1 style="text-align: center; font-weight: medium; color: black">Artikel Lainnya</h1>
                @if(count($otherArtikels) > 0)
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach($otherArtikels as $index => $value)
                        <div class="carousel-item {{ $index == 0 ? ' active' : '' }}" style="padding: 0px 64px;">
                            <a href="{{ route('artikel.show', $value->id) }}" class="card mb-3" style="max-width: 540px;">
                                <div class="d-flex">
                                    <div
                                        style="background-image: url('{{ asset('storage/artikelphoto/'. $value->image) }}'); width: 150px; height: 150px; background-position: center; background-size: cover; background-color: white; border-radius: 0.5rem; background-repeat: no-repeat;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="p-3">
                                            <h5 class="" style="font-size: 1rem">{{ Illuminate\Support\Str::limit($value->title, 25) }}</h5>
                                            <p class="" style="font-size: 0.8rem">{{ Illuminate\Support\Str::limit($value->description, 80) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: black"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: black"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                @else
                <p class="text-center">Empty</p>
                @endif
            </div>
        </section>
    </div>
    <div style="width: 100%; height: full; position: relative; background-color: #F8FAFD;">
        <div style="position: absolute;background-color: #F8FAFD ;width: 100%; height: 100%; z-index: 50"></div>
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
                style="display: flex; flex-direction: column; align-items: flex-end;  justify-content: flex-end; padding-right: 10px; row-gap: 0.5rem;">
                <a href="#" class="w3-bar-item w3-button"
                    style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #21BF73; color: white; border-radius: 0.375rem;">Masuk</a>
                <a href="#" class="w3-bar-item w3-button"
                    style="text-align: end; width: fit-content; padding: 4px 8px; background-color: #21BF73; color: white; border-radius: 0.375rem;">Daftar</a>
            </div>
            <ul
                style="margin-top: 8px;text-decoration: none; text-align: end;  list-style-type: none; display: flex; flex-direction: column; row-gap: 0.75rem; ">
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Beranda</a>
                </li>
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Profil</a>
                </li>
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Jadwal Dokter</a>
                </li>
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Kunjungan
                        Pasien</a>
                </li>
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Pengambilan
                        Obat</a>
                </li>
                <li>
                    <a href="{{ route('artikel.index') }}" class="menu-sidebar"
                        style="text-align: end; color: #21BF73">Jadwalkan Pertemuan</a>
                </li>
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Artikel Online</a>
                </li>
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Feedback</a>
                </li>
                <li>
                    <a href="#" class="menu-sidebar" style="text-align: end; color: #21BF73">Riwayat
                        Pembayaran</a>
                </li>
            </ul>
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

    </script>
</body>

</html>
