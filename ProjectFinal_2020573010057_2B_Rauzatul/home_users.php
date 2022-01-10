<?php
require "proses/session.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title>Nuyaaa.id</title>
    <link rel="stylesheet" href="css/home_users.css">
</head>

<body>
    <!-- Navbar -->
    <?php require 'component/header.php' ?>
    <!-- End Navbar -->
    <!-- Sidebar -->
    <div class="container-fluid alert-success">
        <div class="row">
            <div class="col col-md-3">
                <?php require 'component/sidebar.php' ?>
            </div>
            <!--konten-->
            <div class="col">
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/produk (10).jpeg" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk (12).jpeg" class="d-block w-100 img-fluid">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/produk (13).jpeg" class="d-block w-100 img-fluid">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <br>
                <!-- Akhir Carousel-->

                <div class="container mt-5">
                    <div class="judul-kategori" style="background-color: #fff; padding : 5px 10px">
                        <h4 class="text-center" style="margin-top: 5px;"><strong>New Arrival</strong></h4>
                    </div>
                <div class="col">
                <div class="card">
                    <div class="row row-cols row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/ke.jpg" width="296px">
                                <div class="card-footer">
                                 <h6 class="card-title">Kemeja Summer</h6>
                                <h5>Rp 70.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6282167401652&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/kemeja.jpg" width="294px">
                                <div class="card-footer">
                                 <h6 class="card-title">Kemeja Pocket Hyena</h6>
                                <h5>Rp 85.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6282167401652&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/kem.jpg" width="296px">
                                <div class="card-footer">
                                 <h6 class="card-title">Atlanta Kemeja</h6>
                                <h5>Rp 90.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6282167401652&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
                    </div>              
                </div>
              
                <!-- Awal Kategori -->
                <div class="container mt-5">
                    <div class="judul-kategori" style="background-color: #fff; padding : 5px 10px">
                        <h4 class="text-center" style="margin-top: 5px;"><strong>Kategori</strong></h4>
                    </div>
                    <div class="row text-center row-container mt-2">
                        <div class="col-lg-4 col-md-5 col-sm-4 col-4">
                            <div class="menu-kategori">
                                <img src="assets/img/uu.png" class="img-categori mt-3"></a>
                                <h5 class="mt-2">Pakaian</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-4">
                            <div class="menu-kategori">
                                <img src="assets/img/aksesoris.png" class="img-categori mt-3"></a>
                                <h5 class="mt-2">Aksesoris</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-4">
                            <div class="menu-kategori">
                                <img src="assets/img/i.png" class="img-categori mt-3"></a>
                                <h5 class="mt-2">Kecantikan</h5>
                            </div>
                        </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <br>

            <!-- Akhir Kategori -->
        </div>

        <!---akhir konten--->
        <!---footer----->
        <?php
        require "component/footer.php"
        ?>
        <!-- End Sidebar -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>