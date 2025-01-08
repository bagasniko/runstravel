<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['destination']['nama'] ?> - Detail Destinasi</title>
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
                            <a class="nav-link active" aria-current="page" href="/travel-website/destination">Destinasi</a>
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
            <div class="row">
                <div class="col-md-6">
                    <img src="<?= $data['destination']['gambar'] ?>" class="img-fluid rounded" alt="<?= $data['destination']['nama'] ?>">
                </div>
                <div class="col-md-6">
                    <h1 class="mb-4"><?= $data['destination']['nama'] ?></h1>
                    <p class="lead mb-4"><?= $data['destination']['deskripsi'] ?></p>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-primary">Rp <?= number_format($data['destination']['harga'], 0, ',', '.') ?></h3>
                        <button class="btn btn-primary btn-lg">Pesan Sekarang</button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Fasilitas</h5>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-hotel me-2"></i> Akomodasi Hotel</li>
                                        <li class="mb-2"><i class="fas fa-utensils me-2"></i> Makan 3x Sehari</li>
                                        <li class="mb-2"><i class="fas fa-car me-2"></i> Transportasi</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-map-marked-alt me-2"></i> Tour Guide</li>
                                        <li class="mb-2"><i class="fas fa-ticket-alt me-2"></i> Tiket Wisata</li>
                                        <li class="mb-2"><i class="fas fa-camera me-2"></i> Dokumentasi</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
