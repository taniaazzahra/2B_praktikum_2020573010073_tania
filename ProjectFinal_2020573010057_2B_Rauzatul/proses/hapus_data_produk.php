<?php
    require "koneksi.php";
    
    $id_pro = $_POST['id_prod'];
    $sql = mysqli_query($conn, "DELETE from tb_produk WHERE id_produk= '$id_pro'");

        if($sql) {
            echo "<script>
            alert('Data berhasil dihapus');
            window.location = '../dataproduk'</script>";
        } else{
            echo "<script>
            alert('Data gagal dihapus');
            window.location = '../dataproduk'</script>";
        }
    
