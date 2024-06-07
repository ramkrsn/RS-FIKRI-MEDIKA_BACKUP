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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
            align-items: center;
        }

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

        <p class="header-title title-container">Profil RSU Fikri Medika</p>
        <img src="{{ asset('assets/image.png') }}" class="image">

        <main class="main">
            <div id="content">
                <div class="section">
                    <h3>Visi</h3>
                    <p>Menjadi rumah sakit unggulan yang mengutamakan pelayanan prima dan keselamatan pasien.</p>
                </div>
                <div class="section">
                    <h3>Misi</h3>
                    <p>Menyediakan layanan kesehatan berkualitas tinggi dengan pendekatan profesional dan empati.</p>
                </div>
                <div class="section">
                    <h3>Nilai-Nilai</h3>
                    <p>Integritas, Inovasi, Kolaborasi, dan Keunggulan.</p>
                </div>
                <div class="section">
                    <h3>Sejarah</h3>
                    <p>RSU Fikri Medika didirikan pada tahun 2000 dengan komitmen untuk memberikan pelayanan kesehatan yang terbaik bagi masyarakat.</p>
                </div>
            </div>
        </main>
    </div>

    <div id="mySidebar" class="sidebar hidden shadow">
        <nav>
            <ul>
                <li><a href="#visi" class="menu-sidebar">Visi</a></li>
                <li><a href="#misi" class="menu-sidebar">Misi</a></li>
                <li><a href="#nilai" class="menu-sidebar">Nilai-Nilai</a></li>
                <li><a href="#sejarah" class="menu-sidebar">Sejarah</a></li>
            </ul>
        </nav>
    </div>

    <div id="myOverlay" class="hidden" style="position: fixed; width: 100%; height: 100vh; z-index: 1000; top: 0; background-color: rgba(0, 0, 0, 0.7); transition: opacity 300ms ease-in"></div>

    <script>
        document.getElementById("openToggle").onclick = function () {
            document.getElementById("mySidebar").classList.remove('hidden');
            document.getElementById("myOverlay").classList.remove('hidden');
        }

        document.getElementById("myOverlay").onclick = function () {
            document.getElementById("mySidebar").classList.add('hidden');
            document.getElementById("myOverlay").classList.add('hidden');
        }
    </script>
</body>

</html>
