<?php
    require "koneksi.php";

    $kd_brg = $_POST['kode_barang'];
    $nm_brg = $_POST['nama_barang'];
    $ket_brg = $_POST['keterangan'];
    $stok_brg = $_POST['stok'];

    if(empty($nm_brg) || $nm_brg==""){
        echo "<script>alert('Nama barang tidak boleh kosong!');
        window.location = '../databarang'</script>";
    } else{
        $sql = mysqli_query($conn, "UPDATE tb_barang SET nama_barang = '$nm_brg', keterangan = '$ket_brg', stok = '$stok_brg' 
        WHERE kode_barang = '$kd_brg'");

        if($sql) {
            echo "<script>alert('Data berhasil diubah');
            window.location = '../databarang'</script>";
        } else{
            echo "<script>alert('Data gagal diubah');
            window.location = '../databarang'</script>";
        }
    }