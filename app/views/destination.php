<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinasi Wisata</title>
    <link rel="shortcut icon" href="/travel-website/public/images/icon.png" type="image/x-icon">
    <link href="/travel-website/public/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/travel-website/public/assets/css/style.css" rel="stylesheet">
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
                    <form action="/travel-website/login" method="post">
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
                    <img src="/travel-website/public/images/logo.jpeg" alt="Travel Logo" height="40">
                    <span class="fw-bold">RUNS TRAVEL</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/travel-website">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/travel-website/destination">Destinasi</a>
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

        <div class="container my-5">
            <h1 class="text-center mb-5" style="color: #2c3e50; font-weight: 700;">Semua Destinasi</h1>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-tropical-beach-sea-ocean-with-coconut-palm-tree_74190-7454.jpg" class="card-img-top" alt="Bali">
                        <div class="card-body">
                            <h5 class="card-title">Bali</h5>
                            <p class="card-text">Pulau dewata dengan keindahan alam dan budaya yang memukau</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 5.000.000</span>
                                <a href="/travel-website/destination/detail/1" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-paradise-island-with-beach-sea_74190-1023.jpg" class="card-img-top" alt="Raja Ampat">
                        <div class="card-body">
                            <h5 class="card-title">Raja Ampat</h5>
                            <p class="card-text">Surga bawah laut dengan keindahan terumbu karang</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 8.500.000</span>
                                <a href="/travel-website/destination/detail/2" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/sunrise-borobudur-temple-yogyakarta-indonesia_335224-367.jpg" class="card-img-top" alt="Borobudur">
                        <div class="card-body">
                            <h5 class="card-title">Borobudur</h5>
                            <p class="card-text">Candi Buddha terbesar di dunia dengan sejarah yang kaya</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 2.500.000</span>
                                <a href="/travel-website/destination/detail/3" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/bromo-volcano-mountain-sunrise-east-java-indonesia_335224-357.jpg" class="card-img-top" alt="Bromo">
                        <div class="card-body">
                            <h5 class="card-title">Gunung Bromo</h5>
                            <p class="card-text">Pesona gunung berapi aktif dengan pemandangan matahari terbit yang menakjubkan</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 3.500.000</span>
                                <a href="/travel-website/destination/detail/4" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/komodo-dragon-komodo-national-park-indonesia_335224-351.jpg" class="card-img-top" alt="Komodo">
                        <div class="card-body">
                            <h5 class="card-title">Pulau Komodo</h5>
                            <p class="card-text">Habitat asli komodo dengan pantai pink yang menawan</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 6.500.000</span>
                                <a href="/travel-website/destination/detail/5" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/lake-toba-medan-indonesia_335224-378.jpg" class="card-img-top" alt="Toba">
                        <div class="card-body">
                            <h5 class="card-title">Danau Toba</h5>
                            <p class="card-text">Danau vulkanik terbesar di dunia dengan budaya Batak yang kental</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 4.000.000</span>
                                <a href="/travel-website/destination/detail/6" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-beach-railay-thailand_335224-1233.jpg" class="card-img-top" alt="Wakatobi">
                        <div class="card-body">
                            <h5 class="card-title">Wakatobi</h5>
                            <p class="card-text">Surga diving dengan keanekaragaman hayati laut yang menakjubkan</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 7.500.000</span>
                                <a href="/travel-website/destination/detail/7" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-landscape-mountain-range-covered-snow_181624-26569.jpg" class="card-img-top" alt="Jayawijaya">
                        <div class="card-body">
                            <h5 class="card-title">Pegunungan Jayawijaya</h5>
                            <p class="card-text">Puncak tertinggi di Indonesia dengan salju abadi</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 12.000.000</span>
                                <a href="/travel-website/destination/detail/8" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-shot-traditional-wooden-houses-water-indonesia_181624-19516.jpg" class="card-img-top" alt="Derawan">
                        <div class="card-body">
                            <h5 class="card-title">Kepulauan Derawan</h5>
                            <p class="card-text">Surga bagi pecinta snorkeling dan diving di Kalimantan Timur</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 6.000.000</span>
                                <a href="/travel-website/destination/detail/9" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://img.freepik.com/free-photo/beautiful-tropical-beach_74190-6772.jpg" class="card-img-top" alt="Belitung">
                        <div class="card-body">
                            <h5 class="card-title">Pulau Belitung</h5>
                            <p class="card-text">Pantai eksotis dengan batu granit dan air yang jernih</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp 4.500.000</span>
                                <a href="/travel-website/destination/detail/10" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    </div>
</body>
</html>
