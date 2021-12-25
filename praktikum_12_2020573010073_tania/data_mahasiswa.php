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

        <title>Data Mahasiswa</title>
    </head>
    <body>
    
        <!-- Navbar -->
        <?php require 'component/header.php' ?>
        <!-- End Navbar -->

        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-3">
                    <!-- Sidebar -->
                    <?php require 'component/sidebar.php' ?>
                    <!-- End Sidebar -->
                </div>
                <!-- Content -->
                <div class="col">
                    <h1 class="mb-2">Data Mahasiswa</h1>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Mahasiswa</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a class="btn btn-primary" href="#" role="button">
                            <i class="bi me-2 bi-plus-square"></i>
                            Tambah
                        </a>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Cari mahasiswa..." aria-label="Search" autofocus>
                        </form>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Mahasiswa</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>  
                                <td>2020573010073</td>  
                                <td>Tania Azzahra</td>
                                <td>TI-2B</td>
                                <td>082361580190</td>
                                <td>
                                    <a class="btn btn-warning btn-sm me-1" href="#" role="button">
                                        <i class="bi me-1 bi-pencil-square"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" role="button">
                                        <i class="bi me-1 bi-trash"></i>
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>  
                                <td>2020573010010</td> 
                                <td>Athaya Zakira</td>
                                <td>TI-2B</td>
                                <td>081382672621</td>
                                <td>
                                    <a class="btn btn-warning btn-sm me-1" href="#" role="button">
                                        <i class="bi me-1 bi-pencil-square"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="#" role="button">
                                        <i class="bi me-1 bi-trash"></i>
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End Content -->
            </div>

            <!-- Footer -->
            <?php require 'component/footer.php' ?>
            <!-- End Footer -->
        </div>



        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>