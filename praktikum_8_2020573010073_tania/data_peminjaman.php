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
    <?php require 'componen/header.php' ?>
    <!-- End Navbar -->

    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-3">
                <?php require 'componen/sidebar.php' ?>
            </div>
            <div class="col">
                <h1>Data Peminjaman</h1>
                <div class="card">
                    <div class="card-header">
                        Datar Data Peminjam
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="text-align: center;">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Prodi</th>
                                    <th scope="col">kelas</th>
                                    <th scope="col">Barang Yang Dipinjam</th>
                                    <th scope="col">Dosen Pengajar</th>
                                    <th scope="col">Tanggal Peminjaman</th>
                                    <th scope="col">Tanggal Pengembalian</th>
                                    <th scope="col">Jam Peminjaman</th>
                                    <th scope="col">Jam Pengembalian</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Fajar BM</td>
                                    <td>TI</td>
                                    <td>2B</td>
                                    <td>Infokus</td>
                                    <td>Samsul</td>
                                    <td>12-12-2021</td>
                                    <td>12-12-2021</td>
                                    <td>09:30</td>
                                    <td>12:30</td>
                                    <td><button type="button" class="btn btn-success">Sudah</button>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Dafi     Bancin</td>
                                    <td>TI</td>
                                    <td>2C</td>
                                    <td>Infokus</td>
                                    <td>Samsul</td>
                                    <td>13-12-2021</td>
                                    <td>13-12-2021</td>
                                    <td>07:30</td>
                                    <td>12:30</td>
                                    <td><button type="button" class="btn btn-success">Sudah</button>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Sidebar -->
    
    <!-- Footer -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card text-center">
                <div class="card-body">
                    <a href="http://tik.pnl.ac.id/" target="_blank">Jurusan Teknologi Informasi dan Komputer</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Footer -->

    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>