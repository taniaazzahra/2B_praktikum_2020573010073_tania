<?php 
    require "proses/session.php";
    require "proses/koneksi.php";
    $sql = mysqli_query($conn,"SELECT * FROM tb_menu"); 
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

        <title>Data Menu</title>
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
                    <h1 class="mb-2">Menu</h1>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                    
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="bi me-2 bi-plus-lg"></i>
                            Tambah Menu
                    </button>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kode Menu</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 0;
                                while($data = mysqli_fetch_array($sql)) {
                                    $no++;
                            ?>
                            <tr> 
                                <td scope="row"><?php echo $no; ?></td>
                                <td><?php echo $data ['id_menu']; ?></td>
                                <td><?php echo $data ['nama_menu']; ?></td>
                                <td><?php echo $data ['keterangan']; ?></td>
                                <td><?php echo $data ['stok']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $no ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus<?php echo $no ?>">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- Modal tambah data Menu -->
                            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Menu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="proses/proses_tambah_data_menu.php" method="post">
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nm_menu" class="col-form-label">Nama Menu</label>
                                                    <input type="text" class="form-control" id="nm_menu" name="nm_menu">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="ket" class="col-form-label">Keterangan</label>
                                                    <input type="text" class="form-control" id="ket" name="ket">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="stok" class="col-form-label">Stok</label>
                                                    <input type="number" class="form-control" id="stok" name="stok">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir modal tambah data Menu -->

                            <!--Awal Modal Edit Data Menu-->
                            <div class="modal fade" id="exampleModal<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Menu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="proses/proses_ubah_data_menu.php">
                                            <input type="hidden" name="kode_menu" value="<?php echo $data['id_menu']?>">
                                            <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Kode Menu</label>
                                                        <input name="kode_menu" type="number" class="form-control" value="<?php echo $data['id_menu'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Nama Menu</label>
                                                        <input name="nama_menu" type="text" class="form-control" value="<?php echo $data['nama_menu'] ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan</label>
                                                        <input name="keterangan" type="text" class="form-control" value="<?php echo $data['keterangan'] ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Stok</label>
                                                        <input name="stok" type="number" class="form-control" value="<?php echo $data['stok'] ?>">
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Akhir Modal Edit Data Menu-->

                            <!--Awal Modal Hapus Data Menu-->
                            <div class="modal fade" id="ModalHapus<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Menu</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="proses/proses_hapus_data_menu.php">
                                            <input type="hidden" name="kode_menu" value="<?php echo $data['id_menu']?>">
                                            <div class="modal-body">
                                                Apakah anda yakin akan menghapus data "<?php echo $data ['nama_menu'] ?>"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Akhir Modal Hapus Data Menu-->

                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
                <!-- End Content -->    
            </div>
            
        </div>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>