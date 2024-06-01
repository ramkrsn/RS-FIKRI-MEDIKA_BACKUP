<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas RSU Fikri Medika</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 800px;
            margin-top: 50px;
            
        }
        .navbar-custom {
            background-color: #faff00;
        }
        .navbar-brand img {
            height: 40px;
        }
        .row{
            flex-direction: column; /* Atur elemen secara vertikal */
            align-items: center; /* Pusatkan elemen secara horizontal */
            margin-top: 20px;
        }
        .facility-card {
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
           
        }
        .facility-header {
            text-align: center;
            color: #33A645;
            margin: 40px 0;
            
        }
        @media (max-width: 768px) {
            .facility-card {
                margin-bottom: 15px;
                padding: 15px;
            }
            .facility-icon {
                font-size: 1.5em;
                padding: 10px;
            }
            h1 {
                font-size: 1.2em;
            }
            h4 {
                font-size: 1em;
            }
            p {
                font-size: 0.9em;
            }
        }
        @media (max-width: 576px) {
            .facility-card {
                margin-bottom: 10px;
                padding: 10px;
            }
            .facility-icon {
                font-size: 1.2em;
                padding: 8px;
            }
            h1 {
                font-size: 1em;
            }
            h4 {
                font-size: 0.9em;
            }
            p {
                font-size: 0.8em;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/Logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <!-- Add your navbar items here if needed -->
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="facility-header">Fasilitas RSU Fikri Medika</h1>
    <div class="row">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="facility-card text-center">
                    <div class="facility-icon bg-success"><i class="fas fa-procedures"></i></div>
                    <h4>Unit Gawat Darurat</h4>
                    <p>Pelayanan Unit Gawat Darurat 24 jam untuk pasien dengan kedaruratan medik dan pelayanan dokter umum yang didukung oleh tenaga medis dan paramedis yang berpengalaman.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="facility-card text-center">
                    <div class="facility-icon bg-info"><i class="fas fa-stethoscope"></i></div>
                    <h4>Medical Check Up</h4>
                    <p>Untuk pelayanan Medical Check Up, kami memiliki paket pemeriksaan sebagai berikut: Paket Medical Check Up internal, yaitu pemeriksaan Medical Check Up dengan lokasi di Klinik kami.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="facility-card text-center">
                    <div class="facility-icon bg-warning"><i class="fas fa-hospital"></i></div>
                    <h4>Kamar Operasi</h4>
                    <p>Kamar operasi adalah suatu unit khusus di rumah sakit, tempat untuk melakukan tindakan pembedahan, baik elektif maupun emergency, yang membutuhkan keadaan steril.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="facility-card text-center">
                    <div class="facility-icon bg-danger"><i class="fas fa-heartbeat"></i></div>
                    <h4>Penunjang Medis</h4>
                    <p>Pelayanan selama 24 jam meliputi Instalasi Gawat Darurat & Ambulans, Laboratorium, Farmasi, Radiologi, Intensive Care Unit (ICU, NICU, PICU), Hemodialisis, Instalasi Gizi, Rekam Medis.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="facility-card text-center">
                    <div class="facility-icon bg-primary"><i class="fas fa-user-md"></i></div>
                    <h4>Rawat Jalan</h4>
                    <p>Rawat jalan adalah pelayanan medis kepada seorang pasien untuk tujuan pengamatan, diagnosis, pengobatan, rehabilitasi, dan pelayanan kesehatan lainnya, tanpa mengharuskan pasien tersebut dirawat inap.</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="facility-card text-center">
                    <div class="facility-icon bg-secondary"><i class="fas fa-procedures"></i></div>
                    <h4>Rawat Inap</h4>
                    <p>Rawat inap adalah istilah yang berarti proses perangkapan pasien oleh tenaga kesehatan profesional akibat penyakit tertentu, di mana pasien dilampakan di suatu ruangan di rumah sakit.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>
