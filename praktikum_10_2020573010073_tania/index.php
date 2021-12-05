<?php
    if(empty($_GET['x'])){
        echo "<script>window.location = 'home'</script>";
    }
    elseif($_GET['x']=='home'){
        require "home.php";
    }
    elseif($_GET['x']=='databarang'){
        require "data_barang.php";
    }
    elseif($_GET['x']=='peminjaman'){
        require "data_peminjaman.php";
    }
    elseif($_GET['x']=='mahasiswa'){
        require "data_mahasiswa.php";
    }
    elseif($_GET['x']=='profile'){
        require "profile.php";
    }
    elseif($_GET['x']=='setting'){
        require "setting.php";
    }
    else{
        echo "<script>window.location = 'home'</script>";
    }
?>
