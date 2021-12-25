<?php
    require "koneksi.php";
    require "session.php";

    $idPinjam = $_POST['id_pinjam'];
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
            $select1 = mysqli_query($conn,"SELECT * FROM tb_peminjaman WHERE barang = $barang AND status IN (1,2)");
            $hasil1 = mysqli_fetch_assoc($select1);

            if (!$hasil1) {
                $input = mysqli_query($conn, "UPDATE tb_peminjaman SET
                                                barang = $barang,
                                                user = $idUser,
                                                matakuliah = '$matakuliah',
                                                waktu_pengembalian = '$wkt_kembali'
                                            WHERE id_peminjaman = $idPinjam
                                    ");
                if ($input) {
                    echo "<script>
                        alert('Barang yang dipinjam berhasil diubah!');
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