<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
</head>

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
        margin-right: 8px;
        font-size: 24px;
    }

    .text-status {
        font-weight: bold;
    }

    .text-todo {
        color: red;
    }

    .text-pending {
        color: orange;
    }

    .text-siap {
        color: green;
    }
    
    .delete-icon {
        cursor: pointer;
    }
    
    .delete-icon:hover {
        color: #dc3545;
    }

</style>

<body class="min-vh-100 d-flex poppins-regular">
    @include('partials.sidebar')

    @yield('content') 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>