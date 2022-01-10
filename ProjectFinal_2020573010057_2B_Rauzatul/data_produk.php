<?php 
    require "proses/session.php";
    require "proses/koneksi.php";
    $sql = mysqli_query($conn,"SELECT * FROM tb_produk LEFT JOIN tb_kategori
    USING (id_kategori) ORDER BY id_produk DESC");
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

        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-3">
                    <!-- Sidebar -->
                    <?php require 'component/sidebar.php' ?>
                    <!-- End Sidebar -->
                </div>
                <!-- Content -->
                <div class="col">
                    <h1 class="mb-2">Data Produk</h1>
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
                        </ol>
                    </nav>
                    
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="bi me-2 bi-plus-lg"></i>
                            Tambah
                    </button>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Status Produk</th>
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
                                <td><?php echo $data ['nama_kategori']; ?></td>
                                <td><?php echo $data ['nama_produk']; ?></td>
                                <td>Rp. <?php echo number_format($data['harga_produk']); ?></td>
                                <td><?php echo ($data ['status_produk'] == 1)? 'Tersedia': 'Tidak Tersedia'; ?></td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $no ?>">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalHapus<?php echo $no ?>">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                              
                            
                            <!-- Modal tambah data produk -->
                            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kategori</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="proses/tambah_data_produk.php" method="post" >
                                            <div class="modal-body">
                                            <div class="mb-3">
                                            <label for="id_kat" class="col-form-label">Kategori</label>
                                                    <select class="form-control" name="kategori" required>
                                                <option value="">---Pilih---</option>
                                                <?php 
                                                $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
                                                while($r = mysqli_fetch_array($kategori)){
                                                ?>
                                                <option value="<?php echo $r['id_kategori']?>"><?php echo $r['nama_kategori']?></option>
                                                <?php } ?>
                                            </select>
                                                </div>
                                                <div class="mb-3">
                                                <label for="nama" class="col-form-label">Nama Produk</label>
                                                    <input type="text" class="form-control" id="nama" name="nm_pr" required>
                                                </div>
                                                <div class="mb-3">
                                                <label for="harga" class="col-form-label">Harga</label>
                                                    <input type="text" class="form-control" id="harga" name="harga" required>
                                                </div>
                                                <div class="mb-3">
                                                <label for="status" class="col-form-label">Status</label>
                                                    <select class="form-control" name="status" required>
                                                     <option value="">---Pilih---</option>
                                                     <option value="1">Tersedia</option>
                                                     <option value="2">Tidak Tersedia</option> 
                                                    </select>
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
                            <!-- Akhir modal tambah data produk -->

                              <!--Awal Modal Edit Data produk-->
                              <div class="modal fade" id="exampleModal<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kategori</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="proses/ubah_data_produk.php">
                                            <input type="hidden" name="id_prd" value="<?php echo $data['id_produk']?>">
                                            <div class="modal-body">
                                            <div class="mb-3">
                                            <label for="id_kat" class="col-form-label">Kategori</label>
                                                    <select class="form-control" name="kat" >
                                                <option value="">---Pilih---</option>
                                                <?php 
                                                $kategori = mysqli_query($conn, "SELECT * FROM tb_kategori ORDER BY id_kategori DESC");
                                                while($r = mysqli_fetch_array($kategori)){
                                                ?>
                                                <option value="<?php echo $r['id_kategori']?>"><?php echo $r['nama_kategori']?></option>
                                                <?php } ?>
                                            </select>
                                                </div>
                                                       
                                                 <div class="mb-3">
                                                <label for="nama" class="col-form-label">Nama Produk</label>
                                                    <input type="text" class="form-control" id="nama" name="nama_pr" value="<?php echo $data['nama_produk'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                <label for="harga" class="col-form-label">Harga</label>
                                                    <input type="text" class="form-control" id="harga" name="harga_pr" value="<?php echo $data['harga_produk'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                <label for="status" class="col-form-label">Status</label>
                                                    <select class="form-control" name="status_pr">
                                                     <option value="">---Pilih---</option>
                                                     <option value="1">Tersedia</option>
                                                     <option value="2">Tidak Tersedia</option> 
                                                    </select>
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
                            <!--Akhir Modal Edit Data kategori-->
                 
                              <!--Awal Modal Hapus Data Produk-->
                              <div class="modal fade" id="ModalHapus<?php echo $no ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Kategori</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="POST" action="proses/hapus_data_produk.php">
                                            <input type="hidden" name="id_prod" value="<?php echo $data['id_produk']?>">
                                            <div class="modal-body">
                                                Apakah anda yakin akan menghapus data "<?php echo $data ['nama_produk'] ?>"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--Akhir Modal Hapus Data Produk-->

                            <?php
                            } ?>
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