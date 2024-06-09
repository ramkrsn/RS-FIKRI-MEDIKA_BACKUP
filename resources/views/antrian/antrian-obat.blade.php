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

        .container {
            width: 100%;
            max-width: 480px;
        }

        a {
            text-decoration: none;
        }
        .menu-sidebar{
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

<body class="poppins-regular" style="display: flex; min-height: h-screen">
    <div style="width: 100%; height: full; background-color: #F8FAFD; z-index: 2000"></div>
    <div class="container">
        <header class="header h1">
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
            </div>
            <button id="openToggle" style="background-color: transparent; border: none; cursor: pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="#21BF73" class="menu">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </header>

        <p class="header-title poppins-bold">Antrian</p>

        <section id="content">
            <div>
                <a href="{{url('/queue')}}">
                    <button
                        style="background-color: white; color: #21BF73; padding: 5px 10px; border: 1px solid white; border-radius: 0.5rem; cursor: pointer">Pertemuan</button>
                </a>
                <a href="{{url('/antrian-obat')}}">
                    <button 
                    style="background-color: #21BF73; color: white; padding: 5px 10px; border: 1px solid #21BF73; border-radius: 0.5rem; cursor: pointer">Obat</button>
                </a>
            </div>
            <hr style="border: 1px solid black; margin: 10px 0px">
            <div style="display: flex; flex-direction: column; gap: 0.5rem">
                @foreach($data_antrian_obat as $data)
                    <div data-bs-toggle="modal" data-bs-target="#exampleModal{{ $data->id }}">
                        <div class="shadow" 
                            style="background-color: white; display: flex; gap: 1rem; border-radius: 0.5rem;">
                            <div style="background-image: url('{{ asset('img/obat-image.jpg') }}'); width: 100px; height: 100px; background-color: white; border-radius: 0.5rem"></div>
                            <div style="display: flex; flex-direction: column; justify-content: center; row-gap: 0.5rem;">
                                <div style="font-size: 1.2rem; font-weight: 500;">{{ $data->nama_obat }}</div>
                                <div style="font-size: 0.8rem;">{{ $data->resep_obat }}</div>
                            </div>
                        </div>
                    </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
                    aria-labelledby="exampleModal{{ $data->id }}Label" aria-hidden="true">
                    <div class="modal-dialog" style=" max-width: 440px;">
                        <div class="modal-content">
                            <div class="" style="background-color: #F1F864; border-radius: 0.5rem;">
                                <div class=""
                                    style="display: flex; padding: 12px; align-items: center; justify-content: space-between;">
                                    <img src="{{ asset('assets/logo.png') }}" alt="">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <p style=" color: #21BF73; font-size: 20px; font-weight: bold; text-align: center;">
                                    Jadwalkan Pertemuan</p>
                            </div>
                            <div class="modal-body" style="padding: 28px">
                                <div class="my-4" style="display: flex; align-items: center; justify-content: center;">
                                    <div style="text-align: center;">
                                        <h3 style="margin: 0;">Nama Obat</h3>
                                        <span style="font-size: 1.8rem; font-weight: 600;">{{ $data->nama_obat }}</span>
                                    </div>
                                </div>
                                <div class="my-4" style="my-5 display: flex; align-items: center; justify-content: center;">
                                    <div style="text-align: center;">
                                        <h3 style="margin: 0;">Nomor Antrian</h3>
                                        <span style="font-size: 1.8rem; font-weight: 600;">{{ $data->idjadwalpertemuan }}</span>
                                    </div>
                                </div>
                                <div class="my-4" style="display: flex; align-items: center; justify-content: center;">
                                    <div style="text-align: center;">
                                        <h4 style="margin: 0;"><a href="{{ url('/informasiobat') }}">Detail Obat</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
    @include('partials.sidebaruser')
    <style>
    /* CSS umum untuk desktop */
    #crisp-chatbox {
        bottom: 20px !important; 
        right: 20px !important;
        left: auto !important; 
    }

    .crisp-client .cc-widget {
        right: 20px !important; 
        left: auto !important; 
    }

    /* Media query untuk perangkat mobile dengan mode potret */
    @media only screen and (max-width: 600px) and (orientation: portrait) {
        #crisp-chatbox {
            bottom: 20px !important; 
            left: 20px !important; 
            right: auto !important; 
        }

        .crisp-client .cc-widget {
            left: 20px !important; 
            right: auto !important; 
        }
    }
</style>

<!-- Script Crisp -->
<script type="text/javascript">
    window.$crisp=[];window.CRISP_WEBSITE_ID="b64fab3e-fe60-40a4-bf30-fc3bd2f60504";
    (function(){
        d=document;
        s=d.createElement("script");
        s.src="https://client.crisp.chat/l.js";
        s.async=1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
</script>

</body>

</html>
