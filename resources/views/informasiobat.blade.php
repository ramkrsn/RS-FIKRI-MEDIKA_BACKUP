<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: yellow">
      <div class="container-fluid" style="background-color: yellow">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Dropdown </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- navbar end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <h1 class="font-bold text-center" style="color: green">Antrian</h1>
    <div class="px-10" style="margin-left: 10px">
      <button type="button" class="btn btn-light" style="color: green">Pertemuan</button>

      <button type="button" class="btn btn-success">Obat</button>
    </div>
    <hr style="border-top: 2px solid #000" />

    <!-- Card -->
    <div class="card" style="width: 18rem" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <div class="card-body d-flex align-items-center">
        <img src="https://png.pngtree.com/png-clipart/20210815/original/pngtree-drug-capsule-and-pill-illustration-icon-vector-isolated-design-png-image_6633679.jpg" class="card-img-top mr-3" style="max-width: 100px" alt="..." />
        <div>
          <h5 class="card-title">Resep 001</h5>
          <p class="card-text">Paracetamol 600mg, Dexamethasone 0,5mg</p>
        </div>
      </div>
    </div>
    <!-- End Card -->

    <!-- Modal -->
    <!-- Modal Detail Obat -->
    <div class="modal fade" id="modalDetailObat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Detail Obat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Konten detail obat di sini -->
          </div>
          <div class="text-center">
          <a href="{{ route('artikel') }}" class="b"><p>Tamofen tab mg 20 no XXX</p></a>
            <a href="" class="b"><p>Theragran M tab no XXX</p></a>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <!-- End Modal Detail Obat -->

    <!-- Modal Nomor Antrian -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-center" id="exampleModalLabel">Nomor Antrian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <h1>Nomor Resep</h1>
              <h2>001</h2>
            </div>
            <div class="text-center">
              <h1>Antrian Anda</h1>
              <h2>0001</h2>
            </div>
            <div class="text-center">
              <a href="#" class="btn-detail-obat"><h2>Detail Obat</h2></a>
            </div>
            <div class="text-center">
              <h1>Status</h1>
              <button type="button" class="btn btn-light" style="color: green">Sudah bisa di ambil</button>
            </div>
            <div class="text-center">
            <img src="/img/barcode.png" alt="Barcode">
              <p>Scan barcode disini</p>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
    <!-- End Modal Nomor Antrian -->

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Handle click event on detail obat link
        var btnDetailObat = document.querySelector(".btn-detail-obat");
        btnDetailObat.addEventListener("click", function () {
          // Show modal detail obat
          var modalDetailObat = new bootstrap.Modal(document.getElementById("modalDetailObat"));
          modalDetailObat.show();
        });
      });
    </script>
  </body>
</html>
