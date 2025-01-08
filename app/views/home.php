<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RUNS TRAVEL </title>
    <link rel="shortcut icon" href="/travel-website/public/images/icon.png" type="image/x-icon">
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Login ke Akun Anda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="/login" method="post">
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                        <div class="mb-4 d-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">Ingat saya</label>
                            </div>
                            <a href="#" class="text-decoration-none">Lupa password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary login-btn">Login</button>
                    </form>
                    <div class="social-login">
                        <p class="text-muted">Atau login dengan</p>
                        <div>
                            <a href="#" class="social-btn btn btn-outline-primary"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-btn btn btn-outline-danger"><i class="fab fa-google"></i></a>
                            <a href="#" class="social-btn btn btn-outline-dark"><i class="fab fa-apple"></i></a>
                        </div>
                        <p class="mt-4 mb-0">Belum punya akun? <a href="#" class="text-decoration-none">Daftar sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/travel-website">
                    <img src="public/images/logo.jpeg" alt="Travel Logo" height="40">
                    <span class="fw-bold">RUNS TRAVEL</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/travel-website/destination">Destinasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/travel-website/paket">Paket Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/travel-website/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/travel-website/contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary text-white" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Carousel -->
        <div id="travelCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#travelCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#travelCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#travelCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-with-coconut-palm-tree_74190-7488.jpg" class="d-block w-100" alt="Destination 1">
                    <div class="carousel-caption">
                        <h2>Jelajahi Keindahan Indonesia</h2>
                        <p>Temukan destinasi wisata menakjubkan di seluruh Nusantara</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-photo/aerial-view-beautiful-tropical-island-with-white-sandy-beach-blue-ocean_181624-4287.jpg" class="d-block w-100" alt="Destination 2">
                    <div class="carousel-caption">
                        <h2>Pengalaman Tak Terlupakan</h2>
                        <p>Ciptakan momen berharga di tempat-tempat eksotis</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://img.freepik.com/free-photo/beautiful-shot-mountains-trees-covered-fog_181624-24367.jpg" class="d-block w-100" alt="Destination 3">
                    <div class="carousel-caption">
                        <h2>Petualangan Menanti</h2>
                        <p>Mulai perjalanan Anda sekarang</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#travelCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#travelCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="container my-5">
            <h1 class="text-center mb-5" style="color: #2c3e50; font-weight: 700;">Destinasi Populer</h1>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree_74190-7454.jpg" class="card-img-top" alt="Bali">
                        <div class="card-body">
                            <h5 class="card-title">Bali</h5>
                            <p class="card-text">Pulau dewata dengan keindahan alam dan budaya yang memukau</p>
                            <a href="/travel-website/destination/detail/1" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-paradise-island-with-beach-sea_74190-1023.jpg" class="card-img-top" alt="Raja Ampat">
                        <div class="card-body">
                            <h5 class="card-title">Raja Ampat</h5>
                            <p class="card-text">Surga bawah laut dengan keindahan terumbu karang</p>
                            <a href="/travel-website/destination/detail/2" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/sunrise-borobudur-temple-yogyakarta-indonesia_335224-367.jpg" class="card-img-top" alt="Borobudur">
                        <div class="card-body">
                            <h5 class="card-title">Borobudur</h5>
                            <p class="card-text">Candi Buddha terbesar di dunia dengan sejarah yang kaya</p>
                            <a href="/travel-website/destination/detail/3" class="btn btn-primary">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="/travel-website/destination" class="btn btn-lg btn-primary">Jelajahi Semua Destinasi</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </div>
</body>
</html>
