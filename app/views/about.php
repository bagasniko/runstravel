<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - RUNS TRAVEL</title>
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
                            <a class="nav-link" href="/travel-website/paket">Paket Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/travel-website/about">About Us</a>
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
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="mb-4" style="color: #2c3e50; font-weight: 700;">Tentang RUNS TRAVEL</h1>
                    <p class="lead mb-4">RUNS TRAVEL adalah agen perjalanan terpercaya yang telah berpengalaman dalam industri pariwisata Indonesia sejak 2010.</p>
                    <p class="mb-4">Kami berkomitmen untuk memberikan pengalaman perjalanan terbaik dengan:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Layanan profesional dan ramah</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Paket wisata yang terjangkau</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Destinasi wisata terbaik</li>
                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Jaminan keamanan dan kenyamanan</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="https://img.freepik.com/free-photo/young-woman-hiker-taking-photo-with-smartphone_1150-7411.jpg" alt="About Us" class="img-fluid rounded shadow">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center p-4">
                        <i class="fas fa-bullseye text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h3 class="h4 mb-3">Visi Kami</h3>
                        <p>Menjadi agen perjalanan terdepan yang menghadirkan pengalaman wisata berkualitas dan berkesan.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center p-4">
                        <i class="fas fa-rocket text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h3 class="h4 mb-3">Misi Kami</h3>
                        <p>Memberikan pelayanan terbaik dengan harga kompetitif dan mengutamakan kepuasan pelanggan.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center p-4">
                        <i class="fas fa-heart text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h3 class="h4 mb-3">Nilai Kami</h3>
                        <p>Integritas, profesionalisme, dan dedikasi dalam melayani setiap pelanggan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</body>
</html>
