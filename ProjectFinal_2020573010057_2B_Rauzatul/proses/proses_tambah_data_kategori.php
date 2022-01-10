<?php 
    require 'koneksi.php';
    require 'session.php';

    $kodeKate = htmlspecialchars($_POST['kd_kate']);
    $namaKate = htmlspecialchars($_POST['nm_kate']);

    if ( empty($namaKate) || $namaKate == "" ) {
        echo "<script>
                alert('Nama kategori tidak boleh kosong!');
                window.location = '../datakategori';
              </script>";
    } else {
        $sql = mysqli_query($conn, "INSERT INTO tb_kategori (id_kategori, nama_kategori)
                                    VALUES ('$kodeKate', '$namaKate')");
        if ( $sql ) {
            echo "<script>
                    alert('Data berhasil ditambahkan');
                    window.location = '../datakategori';
                  </script>";
        }
        else {
            echo "<script>
                    alert('Data gagal ditambahkan');
                    window.location = '../datakategori';
                  </script>";
        }
    }
?>