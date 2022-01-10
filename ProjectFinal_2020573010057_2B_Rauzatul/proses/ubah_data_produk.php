<?php
    require "koneksi.php";

    $id_prd = $_POST['id_prd'];
    $nm_kategori = ($_POST['kat']);
    $nm_produk = ($_POST['nama_pr']);
    $hrg_produk = ($_POST['harga_pr']);
    $st_produk = ($_POST['status_pr']);

        $sql = mysqli_query($conn, "UPDATE tb_produk SET nama_kategori = '$nm_kategori', nama_produk = '$nm_produk',
        harga_produk = '$hrg_produk', status_produk = '$st_produk'
        WHERE id_produk = '$id_prd'");

        if($sql) {
            echo "<script>
            alert('Data berhasil diubah');
            window.location = '../dataproduk'</script>";
        } else{
            echo "<script>alert('Data gagal diubah');
            window.location = '../dataproduk'</script>";
        }

    