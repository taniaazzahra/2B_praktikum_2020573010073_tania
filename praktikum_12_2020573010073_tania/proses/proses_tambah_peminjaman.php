<?php
    require "koneksi.php";
    require "session.php";

    $barang = $_POST['barang'];
    $matakuliah =  $_POST['matakuliah'];
    $wkt_kembali = $_POST['wkt_kembali'];

    if (empty($_POST['wkt_kembali'])) {
        echo "<script>
                alert('Waktu pengembalian harus diisi!');
                window.location = '../peminjaman';
            </script>";
    } else {
        $select = mysqli_query($conn, "SELECT id FROM tb_user WHERE email = '$_SESSION[email]'");
        $hasil = mysqli_fetch_assoc($select);
        $idUser = $hasil['id'];

        if ($hasil) {
            $select1 = mysqli_query($conn, "SELECT * FROM tb_peminjaman WHERE barang = $barang");
            $hasil1 = mysqli_fetch_assoc($select1);
            if (!$hasil1) {
                $input = mysqli_query($conn, "INSERT INTO tb_peminjaman
                                            (barang, user, status, matakuliah, waktu_pengembalian)
                                            VALUES ($barang, $idUser, 1, '$matakuliah', '$wkt_kembali')
                                    ");
                if ($input) {
                    echo "<script>
                        alert('Barang berhasil dipinjam!');
                        window.location = '../peminjaman';
                    </script>";
                }
            } else {
                echo "<script>
                        alert('Mohon maaf barang tersebut sudah dipinjam!');
                        window.location = '../peminjaman';
                    </script>";
            }
        }
    }
?>