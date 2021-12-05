<?php 
    $conn = mysqli_connect("localhost", "root", "", "sipbar") or die ("koneksi gagal"); 
    $hasil = mysqli_query ($conn, "select* from tb_user");
?>
