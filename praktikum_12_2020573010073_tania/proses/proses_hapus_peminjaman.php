<?php 
    require "koneksi.php";

    $idPinjam = $_POST['id_pinjam'];

    $sql = mysqli_query($conn, "DELETE FROM tb_peminjaman WHERE id_peminjaman = $idPinjam");
    if ( $sql ) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location = '../peminjaman';
              </script>";
    }
    else {
        echo "<script>
                alert('Data gagal dihapus');
                window.location = '../peminjaman';
              </script>";
    }
?>