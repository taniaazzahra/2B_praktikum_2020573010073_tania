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
                    <h3 class="mb-2" style='margin-top: 10px;'>Dashboard</h3>
                    <div class="d-flex gap-4">
                    <div class="section">
                    <div class="container">
                        <div class="box" style='margin-top: 3%; border: 1px solid black; padding: 8px; width: 900px; background-color: #F7F7F7;'>
                            <h7>Selamat Datang di Nuyaaa.id</h7>
                        </div>
                    </div>
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

