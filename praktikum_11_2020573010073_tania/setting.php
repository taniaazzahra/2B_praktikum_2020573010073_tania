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
                <div class="col col-lg-4">
                    <h1 class="mb-2">Setting</h1>
                    <div class="card">
                        <div class="card-header text-white bg-primary">
                            Ganti Password
                        </div>
                        <div class="card-body">
                            <form action="ganti_password.php" method="Post">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" value=" <?= $_SESSION['email'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="exampleInputPassword1" class="form-label">Password Lama</label>
                                    <input type="password" class="form-control" name="pass_lama" required>
                                </div>
                                <div class="mb-3">
                                    <label class="exampleInputPassword1" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control" name="pass_baru" required>
                                </div>
                                <div class="mb-3">
                                    <label class="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control" name="konfir_pass" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Ganti</button>
                                <button type="reset" class="btn btn-danger">Batal</button>
                            </form>
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