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

    <title>Menu</title>
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
                <h3 style="margin-bottom: 20px; margin-top:20px;" >Daftar Menu</h3>
                <div class="card">
                    <div class="card-header">
                        <h5>Varian Dimsum</h5>
                    </div>
                    <div class="row row-cols row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/telurasin.jpg" width="311px">
                                <div class="card-footer">
                                 <h6 class="card-title">Dimsum Telur Asin</h6>
                                <h5>Rp 75.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/3varian.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Dimsum Mix 3 Varian (Ayam, Rumput Laut, Udang)</h6>
                                <h5>Rp 80.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/jamur.jpg" width="310px">
                                <div class=" card-footer">
                                <h6 class="card-title">Dimsum Jamur</h6>
                                <h5>Rp 80.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/4varian.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Dimsum Mix 4 Varian (Ayam, Rumput Laut, Udang, Kepiting)</h6>
                                <h5>Rp 83.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/kepiting.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Dimsum Kepiting</h6>
                                <h5>Rp 65.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/ayam.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Dimsum Ayam</h6>
                                <h5>Rp 75.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/udang.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Dimsum Udang</h6>
                                <h5>Rp 75.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/rumputlaut.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Dimsum Rumput Laut</h6>
                                <h5>Rp 80.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/5varian.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Dimsum Mix 5 Varian (Ayam, Jamur, Rumput Laut, Udang, Kepiting)</h6>
                                <h5>Rp 85.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div class="col">
                            <div class="card">
                                <img src="assets/img/lumpia.jpg" width="311px">
                                <div class="card-footer">
                                <h6 class="card-title">Lumpia Kulit Tahu isi Udang</h6>
                                <h5>Rp 80.000</h5>
                                    <div class="container text-center">
                                        <a type="text">
                                            <a href="https://api.whatsapp.com/send/?phone=6285277330345&text&app_absent=0" class="btn btn-primary">Beli <i class="bi bi-bag"></i></a>
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
        <!-- End Sidebar -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
