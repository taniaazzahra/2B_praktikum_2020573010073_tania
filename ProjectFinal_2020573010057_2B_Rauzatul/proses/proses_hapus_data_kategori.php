<?php
    require "koneksi.php";
    
    $kd_kategori = $_POST['kode_kategori'];
    $sql = mysqli_query($conn, "DELETE from tb_kategori WHERE id_kategori= '$kd_kategori'");

        if($sql) {
            echo "<script>
            alert('Data berhasil dihapus');
            window.location = '../datakategori'</script>";
        } else{
            echo "<script>
            alert('Data gagal dihapus');
            window.location = '../datakategori'</script>";
        }
    
