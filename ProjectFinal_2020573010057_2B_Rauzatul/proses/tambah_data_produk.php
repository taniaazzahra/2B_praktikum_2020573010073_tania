<?php 
    require 'koneksi.php';
    require 'session.php';

    $nama_kategori = ($_POST['kategori']);
    $nama_produk = ($_POST['nm_pr']);
    $harga_produk = ($_POST['harga']);
    $status_produk = ($_POST['status']);

   
            $insert = mysqli_query($conn, "INSERT INTO tb_produk 
            VALUES (null, '$nama_kategori' ,'$nama_produk', '$harga_produk', '$status_produk', null)");
              if ( $insert ) {
                echo "<script>
                alert('Data berhasil ditambahkan');
                window.location = '../dataproduk';
                </script>";
                }
                else {
                    echo "<script>
                    alert('Data gagal ditambahkan');
                    window.location = '../dataproduk';
                    </script>";
                }
    
?>

