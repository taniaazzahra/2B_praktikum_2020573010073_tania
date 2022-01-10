<?php
require "proses/session.php";
require "proses/koneksi.php";
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
                <h3 style="margin-bottom: 20px; margin-top:20px;" >Produk</h3>
                <div class="card">
                    <div class="card-header">
                        <h5>Kecantikan</h5>
                    </div>
                    <div class="row row-cols row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/lipgel.jpeg" width="311px">
                                <div class="card-footer">
                                 <h6 class="card-title">Lipgel Heygurl</h6>
                                <h5>Rp 50.000</h5>
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
                                <img src="assets/img/heygurl.jpg" width="310px">
                                <div class="card-footer">
                                <h6 class="card-title">Masker Heygurl</h6>
                                <h5>Rp 48.000</h5>
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
                                <img src="assets/img/produk (9).jpeg" width="310px">
                                <div class=" card-footer">
                                <h6 class="card-title">Masker Organik</h6>
                                <h5>Rp 45.000</h5>
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
                <br>
                <br>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Pakaian</h5>
                        </div>
                        <div class="row row-cols row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/produk (14).jpeg" width="310px">
                                    <div class="card-footer">
                                    <h6 class="card-title">Hoodie BB hitam</h6>
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
                                    <img src="assets/img/produk (15).jpeg" width="310px">
                                    <div class="card-footer">
                                    <h6 class="card-title">Hoodie FR-LANK kuning</h6>
                                    <h5>Rp 75.000</h5>
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
                                    <img src="assets/img/produk (17).jpeg" width="310px">
                                    <div class="card-footer">
                                    <h6 class="card-title">Hoodie Malaimo ungu</h6>
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
                                    <img src="assets/img/produk (16).jpeg">
                                    <div class="card-footer">
                                    <h6 class="card-title">Hoodie SU coklat</h6>
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
                                    <img src="assets/img/produk (5).jpeg">
                                    <div class="card-footer">
                                    <h6 class="card-title">Hoodie Pizza hijau</h6>
                                    <h5>Rp 60.000</h5>
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
                                    <img src="assets/img/produk (19).jpeg">
                                    <div class="card-footer">
                                    <h6 class="card-title">Hoodie Candy pink</h6>
                                    <h5>Rp 70.000</h5>
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
                    <br>
                  
                    <br>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h5>Aksesoris</h5>
                        </div>
                        <div class="row row-cols row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card">
                                    <img src="assets/img/tas.jpg" width="310px">
                                    <div class="card-footer">
                                    <h6 class="card-title">Tas Selempang Simple</h6>
                                    <h5>Rp 60.000</h5>
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
                                    <img src="assets/img/1.jpg" width="310px">
                                    <div class="card-footer">
                                    <h6 class="card-title">Tas Selempang Mini </h6>
                                    <h5>Rp 65.000</h5>
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
                                    <img src="assets/img/tta.jpg" width="310px">
                                    <div class="card-footer">
                                    <h6 class="card-title">Slingbag</h6>
                                    <h5>Rp 70.000</h5>
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
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
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