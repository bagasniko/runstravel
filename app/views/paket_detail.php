<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-image {
            height: 400px;
            object-fit: cover;
            width: 100%;
        }
        .price-tag {
            font-size: 24px;
            color: #2c3e50;
            font-weight: bold;
        }
        .feature-icon {
            font-size: 20px;
            color: #3498db;
            margin-right: 10px;
        }
    </style>
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/travel-website">
                <img src="/travel-website/public/images/logo.jpeg" alt="Logo" height="30">
                Travel Website
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
                        <a class="nav-link" href="/travel-website/destination">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/travel-website/paket">Paket Wisata</a>
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
        <div class="row">
            <div class="col-lg-8">
                <img src="<?= $data['paket']['gambar'] ?>" alt="<?= $data['paket']['nama'] ?>" class="hero-image rounded mb-4">
                <h1 class="mb-4"><?= $data['paket']['nama'] ?></h1>
                <div class="mb-4">
                    <span class="feature-icon"><i class="fas fa-map-marker-alt"></i></span>
                    <span class="h5"><?= $data['paket']['destinasi'] ?></span>
                </div>
                <div class="mb-4">
                    <span class="feature-icon"><i class="fas fa-clock"></i></span>
                    <span class="h5"><?= $data['paket']['durasi'] ?></span>
                </div>
                <div class="mb-4">
                    <h4>Deskripsi Paket</h4>
                    <p class="lead"><?= $data['paket']['deskripsi'] ?></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Booking Paket</h3>
                        <p class="price-tag mb-4">Rp <?= number_format($data['paket']['harga'], 0, ',', '.') ?></p>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Keberangkatan</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Peserta</label>
                                <input type="number" class="form-control" min="1" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Booking Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
