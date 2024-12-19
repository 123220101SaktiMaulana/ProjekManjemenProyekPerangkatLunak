<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdaKita - Solusi Anda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <style>
        .navbar-brand img {
            width: 50px;
            /* Memperbesar logo */
            height: auto;
            /* Mempertahankan proporsi */
        }

        .navbar {
            padding: 15px 20px;
            /* Memberikan jarak lebih pada navbar */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Logo Aplikasi.svg" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    <a class="nav-link" href="login.php">Masuk</a>
                    <a class="nav-link" href="registrasi.php">Daftar</a>
                    <a class="nav-link" href="#">Kontak</a>
                    <a class="nav-link" href="#">Layanan</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <h1
                        style="font-family: 'Space Grotesk', sans-serif; text-align: left; padding-top: 40px; font-size: 70px;">
                        temukan<br>kemudahan<br>kesehatan<br>dengan AdaKita
                    </h1>
                </div>
                <div class="row" style="padding-top: 20px; font-size: 20px;">
                    <p>
                        Aplikasi ini menawarkan layanan penanganan pasien yang membutuhkan pengasuh atau perawat
                        pribadi. blablablabla.....
                    </p>
                    <div>
                        <button type="button" class="btn btn-outline-primary" style="width: 200px;"
                            onclick="location.href='#sesi2'"">Mulai</button>
                    </div>

                </div>

            </div>
            <div class=" col d-flex justify-content-center" style="padding-top: 20px;">
                            <img src="Asset 11.svg" class="img-fluid" alt="gambar" style="max-width: 80%;">
                    </div>
                </div>
                <div class="row justify-content-start align-items-center g-2" style="padding-top: 30px;">
                    <p style="font-family: 'Space Grotesk', sans-serif; font-size: 40px; font-weight: bold;">
                        our service
                    </p>
                </div>
                <!-- 2 card untuk mencari pengasuh dan menawarkan bantuan -->
                <div id="sesi2" class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mx-auto" style="width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Cari Pengasuh</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="form_pasien.php" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mx-auto" style="width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Menawarkan Bantuan</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="daftar_pasien.php" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-start align-items-center g-2" style="padding-top: 30px;">
                    <p style="font-family: 'Space Grotesk', sans-serif; font-size: 40px; font-weight: bold;">
                        our team
                    </p>
                </div>

                <!-- First Row: 4 Cards -->
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="card mx-auto" style="width: 18rem; max-width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Yedhit Trisakti</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mx-auto" style="width: 18rem; max-width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Naufal Laudza</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mx-auto" style="width: 18rem; max-width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sakti Maulana</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mx-auto" style="width: 18rem; max-width: 100%;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jaconiah Widiwasita</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of
                                    the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <!-- Footer -->
            <footer class="bg-dark text-light py-5 mt-5">
                <div class="container">
                    <div class="row">
                        <!-- Footer Column 1: About Us -->
                        <div class="col-md-4">
                            <h5>About Us</h5>
                            <p>We are a dedicated team providing personalized care services. Our mission is to improve
                                patient
                                quality of life with compassionate care and support.</p>
                        </div>

                        <!-- Footer Column 2: Quick Links -->
                        <div class="col-md-4">
                            <h5>Quick Links</h5>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-light">Home</a></li>
                                <li><a href="#" class="text-light">Features</a></li>
                                <li><a href="#" class="text-light">Pricing</a></li>
                                <li><a href="#" class="text-light">Contact</a></li>
                            </ul>
                        </div>

                        <!-- Footer Column 3: Contact Information -->
                        <div class="col-md-4">
                            <h5>Contact Us</h5>
                            <p><strong>Email:</strong> info@adakita.com</p>
                            <p><strong>Phone:</strong> +123 456 7890</p>
                            <p><strong>Address:</strong> 1234 Health St, City, Country</p>
                        </div>
                    </div>

                    <!-- Footer Bottom -->
                    <div class="row mt-4">
                        <div class="col text-center">
                            <p>&copy; 2024 AdaKita. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>