<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata - RUNS TRAVEL</title>
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
            <h1 class="text-center mb-5" style="color: #2c3e50; font-weight: 700;">Paket Wisata</h1>
            <div class="row">
                <?php foreach($data['paket_wisata'] as $id => $paket): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= $paket['gambar'] ?>" class="card-img-top" alt="<?= $paket['nama'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $paket['nama'] ?></h5>
                            <p class="card-text"><?= $paket['deskripsi'] ?></p>
                            <p class="text-muted mb-2">
                                <i class="fas fa-clock"></i> <?= $paket['durasi'] ?>
                            </p>
                            <p class="text-muted mb-3">
                                <i class="fas fa-map-marker-alt"></i> <?= $paket['destinasi'] ?>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">Rp <?= number_format($paket['harga'], 0, ',', '.') ?></span>
                                <a href="/travel-website/paket/detail/<?= $id ?>" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
