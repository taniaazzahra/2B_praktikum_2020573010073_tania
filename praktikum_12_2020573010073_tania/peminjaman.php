<?php
require "proses/koneksi.php";
require "proses/session.php";

$sql = mysqli_query($conn, "SELECT * FROM tb_peminjaman pnj
                            LEFT JOIN tb_barang brg ON pnj.barang = brg.kode_barang
                            LEFT JOIN tb_user u ON pnj.user = u.id
                            LEFT JOIN tb_matakuliah mk ON pnj.matakuliah = mk.id_mk
                            WHERE email = '$_SESSION[email]'
                   ");

$select = mysqli_query($conn, "SELECT * FROM tb_peminjaman pnj
                                RIGHT JOIN tb_barang brg ON pnj.barang = brg.kode_barang
                                LEFT JOIN tb_mahasiswa mhs ON pnj.user = mhs.id_user
                      ");
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

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <title>Sistem Informasi Peminjaman Barang Jurusan TIK</title>
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
                <h1 class="mb-2">Peminjaman Barang</h1>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Peminjaman</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div>
                        <button type="button" class="btn btn-primary me-md-1" data-bs-toggle="modal" data-bs-target="#addModal">
                            <i class="fa-regular fa-plus me-1"></i>
                            Tambah
                        </button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#listpeminjaman">
                            <i class="fa-regular fa-list-check me-1"></i>
                            List Peminjaman
                        </button>
                    </div>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Cari barang..." aria-label="Search" autofocus>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Waktu Peminjaman</th>
                                <th scope="col">Waktu Pengembalian</th>
                                <th scope="col">Matakuliah</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $num = 1;
                            while ($data = mysqli_fetch_assoc($sql)) :
                            ?>
                                <tr>
                                    <td scope="row"><?= $num; ?></td>
                                    <td><?= $data['kode_barang']; ?></td>
                                    <td><?= $data['nama_barang']; ?></td>
                                    <td><?= $data['keterangan']; ?></td>
                                    <td><?= $data['stok']; ?></td>
                                    <td>
                                        <?= $data['waktu_peminjaman'] ?>
                                    </td>
                                    <td>
                                        <?= $data['waktu_pengembalian'] ?>
                                    </td>
                                    <td>
                                        <?= $data['nm_matakuliah'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($data['status'] == 1) {
                                            $bg = "warning text-dark";
                                            $status = "Pending";
                                        } elseif ($data['status'] == 2) {
                                            $bg = "success";
                                            $status = "Disetujui";
                                        } elseif ($data['status'] == 3) {
                                            $bg = "danger";
                                            $status = "Ditolak";
                                        } elseif ($data['status'] == 4) {
                                            $bg = "info text-dark";
                                            $status = "Dikembalikan";
                                        } else {
                                            $bg = "secondary";
                                            $status = "None";
                                        }
                                        ?>
                                        <span class="badge bg-<?= $bg ?>"><?= $status ?></span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary fa-regular fa-ellipsis-vertical" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <li>
                                                    <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#editModal<?= $num ?>">
                                                        <i class="fa-regular fa-pen-to-square me-2"></i>
                                                        Edit
                                                    </button>
                                                </li>
                                                <li>
                                                    <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $num ?>">
                                                        <i class="fa-regular fa-trash-can me-2"></i>
                                                        Hapus
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal edit peminjaman -->
                                <div class="modal fade" id="editModal<?= $num ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Peminjaman</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="proses/proses_ubah_peminjaman.php" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_pinjam" value="<?= $data['id_peminjaman'] ?>">
                                                    <div class="mb-3">
                                                        <label for="barang" class="col-form-label">Nama Barang</label>
                                                        <select class="form-select" aria-label="Default select example" id="barang" name="barang">
                                                            <?php
                                                            $query1 = mysqli_query($conn, "SELECT * FROM tb_barang");
                                                            while ($record_brg1 = mysqli_fetch_assoc($query1)) :
                                                                if ($record_brg1['kode_barang'] == $data['kode_barang']) :
                                                            ?>
                                                                    <option value="<?= $record_brg1['kode_barang'] ?>" selected>
                                                                        <?= $record_brg1['kode_barang'] . " - " . $record_brg1['nama_barang'] ?>
                                                                    </option>
                                                                <?php else : ?>
                                                                    <option value="<?= $record_brg1['kode_barang'] ?>">
                                                                        <?= $record_brg1['kode_barang'] . " - " . $record_brg1['nama_barang'] ?>
                                                                    </option>
                                                            <?php
                                                                endif;
                                                            endwhile;
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="matakuliah" class="col-form-label">Matakuliah</label>
                                                        <select class="form-select" aria-label="Default select example" id="matakuliah" name="matakuliah">
                                                            <?php
                                                            $query = mysqli_query($conn, "SELECT * FROM tb_matakuliah");
                                                            while ($record_mk = mysqli_fetch_assoc($query)) :
                                                                if ($record_mk['id_mk'] == $data['id_mk']) :
                                                            ?>
                                                                    <option value="<?= $record_mk['id_mk'] ?>" selected>
                                                                        <?= $record_mk['nm_matakuliah'] . " - " . $record_mk['nm_matakuliah'] ?>
                                                                    </option>
                                                                <?php else : ?>
                                                                    <option value="<?= $record_mk['id_mk'] ?>">
                                                                        <?= $record_mk['id_mk'] . " - " . $record_mk['nm_matakuliah'] ?>
                                                                    </option>
                                                            <?php
                                                                endif;
                                                            endwhile
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="wkt_kembali" class="col-form-label">Waktu Pengembalian</label>
                                                        <input class="form-control" type="datetime-local" name="wkt_kembali" id="wkt_kembali">
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
                                <!-- akhir modal edit peminjaman -->

                                <!-- Modal hapus peminjaman -->
                                <div class="modal fade" id="deleteModal<?= $num ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Peminjaman</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="proses/proses_hapus_peminjaman.php" method="post">
                                                <input type="hidden" name="id_pinjam" value="<?= $data['id_peminjaman'] ?>">
                                                <div class="modal-body">
                                                    <p>Apakah anda yakin ingin menghapus peminjaman <?= $data['nama_barang'] ?>?</p>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- akhir modal hapus peminjaman -->
                            <?php
                                $num++;
                            endwhile;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Content -->
        </div>

        <!-- Footer -->
        <?php require 'component/footer.php' ?>
        <!-- End Footer -->

        <!-- Modal tambah peminjaman -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Peminjaman</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="proses/proses_tambah_peminjaman.php" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="barang" class="col-form-label">Nama Barang</label>
                                <select class="form-select" aria-label="Default select example" id="barang" name="barang">
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM tb_barang");
                                    while ($record_brg = mysqli_fetch_assoc($query)) :
                                    ?>
                                        <option value="<?= $record_brg['kode_barang'] ?>">
                                            <?= $record_brg['kode_barang'] . " - " . $record_brg['nama_barang'] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="matakuliah" class="col-form-label">Matakuliah</label>
                                <select class="form-select" aria-label="Default select example" id="matakuliah" name="matakuliah">
                                    <?php
                                    $query = mysqli_query($conn, "SELECT * FROM tb_matakuliah");
                                    while ($record_mk = mysqli_fetch_assoc($query)) :
                                    ?>
                                        <option value="<?= $record_mk['id_mk'] ?>">
                                            <?= $record_mk['id_mk'] . " - " . $record_mk['nama_mk'] ?>
                                        </option>
                                    <?php endwhile ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="wkt_kembali" class="col-form-label">Waktu Pengembalian</label>
                                <input class="form-control" type="datetime-local" name="wkt_kembali" id="wkt_kembali">
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
        <!-- akhir modal tambah peminjaman -->

        <!-- Modal list peminjaman -->
        <div class="modal fade" id="listpeminjaman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">List Peminjaman Barang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Peminjam</th>
                                    <th scope="col">Waktu Peminjaman</th>
                                    <th scope="col">Waktu Pengembalian</th>
                                    <th scope="col">Matakuliah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 1;
                                while ($data = mysqli_fetch_assoc($select)) :
                                ?>
                                    <tr>
                                        <td scope="row"><?= $num; ?></td>
                                        <td><?= $data['kode_barang']; ?></td>
                                        <td><?= $data['nama_barang']; ?></td>
                                        <td><?= $data['keterangan']; ?></td>
                                        <td><?= $data['stok']; ?></td>
                                        <td>
                                            <?php
                                            if ($data['status'] == 1 || $data['status'] == 2) {
                                                echo "<b>Dipinjam</b>";
                                            } elseif ($data['status'] == 3 || $data['status'] == 4) {
                                                echo "<b>Tersedia</b>";
                                            } else {
                                                echo "";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?= $data['nim'] . "<br>"; ?>
                                            <?= $data['nama'] . "<br>"; ?>
                                            <?= $data['kelas'] . "<br>"; ?>
                                            <?= $data['prodi']; ?>
                                        </td>
                                        <td><?= $data['waktu_peminjaman']; ?></td>
                                        <td><?= $data['waktu_pengembalian']; ?></td>
                                        <td><?= $data['matakuliah']; ?></td>
                                    </tr>
                                <?php
                                    $num++;
                                endwhile;
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir modal list peminjaman -->
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>