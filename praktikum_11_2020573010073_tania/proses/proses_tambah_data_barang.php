<?php 
    require 'koneksi.php';
    require 'session.php';

    $namaBarang = htmlspecialchars($_POST['nm_brg']);
    $keterangan = htmlspecialchars($_POST['ket']);
    $stok = $_POST['stok'];

    if ( empty($namaBarang) || $namaBarang == "" ) {
        echo "<script>
                alert('Nama tidak boleh kosong!');
                window.location = '../databarang';
              </script>";
    } else {
        $sql = mysqli_query($conn, "INSERT INTO tb_barang (nama_barang, keterangan, stok)
                                    VALUES ('$namaBarang', '$keterangan', $stok)");
        if ( $sql ) {
            echo "<script>
                    alert('Data berhasil ditambahkan');
                    window.location = '../databarang';
                  </script>";
        }
        else {
            echo "<script>
                    alert('Data gagal ditambahkan');
                    window.location = '../databarang';
                  </script>";
        }
    }
?>