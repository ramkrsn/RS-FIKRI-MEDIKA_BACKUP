<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Register</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F8FAFD;
        }

        .container {
            max-width: 480px;
            margin-top: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #F1F864;
            padding: 10px;
            padding-top: 20px;
            box-shadow: 0px 12.6px 10px rgba(0, 0, 0, 0.092), 0px 88px 80px rgba(0, 0, 0, 0.07);
        }

        .header-title {
            color: #21BF73;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }

        .image {
            padding: 0px;
            margin: 0px;
            height: 273px;
            width: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
        }

        .main {
            text-align: center;
            padding: 10px 70px;
        }

        .btn-primary {
            background-color: #21BF73;
            border-color: #21BF73;
        }

        .btn-primary:hover {
            background-color: #1a9f5d;
            border-color: #1a9f5d;
        }

        .form-group label {
            float: left;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="RSU Fikri Medika Logo">
            </div>
            <button id="openToggle" style="background-color: transparent; border: none; cursor:pointer">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#21BF73" class="menu">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </header>

        <p class="header-title">Profil RSU Fikri Medika</p>

        <div class="image" style="background-image: url('{{ asset('assets/image 5.png') }}')"></div>

        <main class="main">
            <div class="container mt-5">
                <h2 class="text-center">Register</h2>
                  <!-- Alert untuk register berhasil -->
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Alert untuk error pada register -->
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Whoops!</strong> Ada masalah dengan inputan Anda.
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no">No Telepon</label>
                        <input type="text" class="form-control @error('no') is-invalid @enderror" id="no" name="no" value="{{ old('no') }}" required>
                        @error('no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
                <p class="mt-3">Sudah memiliki akun ? <a href="{{ route('login') }}">Masuk</a></p>
            </div>
        </main>
        
    </div>
    @include('partials.sidebaruser')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
