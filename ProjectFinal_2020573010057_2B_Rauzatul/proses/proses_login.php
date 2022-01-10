<?php 
    session_start();
    
    // koneksi ke database
    require 'koneksi.php';

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $hasil = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email' && password = '$password'");
    $row = mysqli_fetch_assoc($hasil);

    if ($hasil) {
        if ((isset($row['email']) && isset($row['password'])) && $row['email'] == $email && $row['password'] == $password) {
            $_SESSION['email'] = $row['email'];
            echo "<script> window.location = '../home' </script>";
        }
        else {
            echo "<script>
                        alert('Email atau password yang anda masukkan salah bro...!!');
                        window.location = '../auth/login.php';
                  </script>";
        }
    }
?>