<?php
    require "proses/koneksi.php";

    //enkripsi inputan password lama
    $password_lama = md5($_POST['pass_lama']);

    //memanggil email
    $email = $_POST['email'];

    //menguji apakah password lama sesuai
    $tampil = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' AND PASSWORD = '$password_lama'");
    $data = mysqli_fetch_array($tampil);

    //apabila data ditemukan, maka password sesuai
    if($data){
        //uji password baru dan konfirmasi password sama
        $password_baru = $_POST['pass_baru'];
        $konfirmasi_password = $_POST['konfir_pass'];

        if($password_baru == $konfirmasi_password){
            //proses mengganti password
            //enkripsi password baru
            $pass_ok = md5($konfirmasi_password);
            $ubah = mysqli_query($conn, "UPDATE tb_user set password = '$pass_ok' WHERE id = '$data[id]'");

            if($ubah){
                echo "<script>alert('Password anda berhasil diubah');
                window.location = 'setting'</script>";
            }
        }
        else {
            echo "<script>alert('Maaf, password baru dan konfirmasi password tidak sama!');
            window.location = 'setting'</script>";
        }
    }
    else {
        echo "<script>alert('Maaf, password lama anda tidak sesuai!');
        window.location = 'setting'</script>";
    }
?>
