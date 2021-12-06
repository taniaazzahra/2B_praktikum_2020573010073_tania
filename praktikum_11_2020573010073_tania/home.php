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

        <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
    </head>
    <body>
    
        <!-- Navbar -->
        <?php require 'component/header.php' ?>
        <!-- End Navbar -->

        <!-- Sidebar -->
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-lg-3">
                    <?php require 'component/sidebar.php' ?>
                </div>
                <div class="col col-lg-9">
                    <h1 class="mb-2">Dashboard</h1>
                    <div class="d-flex gap-4">
                        <div class="card">
                            <div class="card-header text-white bg-primary">
                                Data Barang
                            </div>
                            <div class="card-body">
                                <h2 class="card-title d-flex align-items-center">
                                    <i class="bi me-4 bi-briefcase-fill display-4"></i>
                                    7 Barang
                                </h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header text-white bg-danger">
                                Barang Belum Dikembalikan
                            </div>
                            <div class="card-body">
                                <h2 class="card-title d-flex align-items-center">
                                    <i class="bi me-4 bi-briefcase-fill display-4"></i>
                                    1 Barang
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <?php require 'component/footer.php' ?>
            <!-- End Footer -->
        </div>
        <!-- End Sidebar -->



        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

