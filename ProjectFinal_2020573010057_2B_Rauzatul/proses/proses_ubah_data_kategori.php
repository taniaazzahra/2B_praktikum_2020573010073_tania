<?php
    require "koneksi.php";

    $id_kat = $_POST['id_kategori'];
    $nama_kat = $_POST['nm_kategori'];

    if(empty($nama_kat) || $nama_kat==""){
        echo "<script>
        alert('Nama kategori tidak boleh kosong!');
        window.location = '../datakategori'</script>";
    } else{
        $sql = mysqli_query($conn, "UPDATE tb_kategori SET nama_kategori = '$nama_kat'
        WHERE id_kategori = '$id_kat'");

        if($sql) {
            echo "<script>
            alert('Data berhasil diubah');
            window.location = '../datakategori'</script>";
        } else{
            echo "<script>alert('Data gagal diubah');
            window.location = '../datakategori'</script>";
        }
    }