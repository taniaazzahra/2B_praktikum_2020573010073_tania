<?php
    if ( !isset($_GET['x'] ) ) {
        echo "<script> window.location = 'home' </script>";
    }
    elseif ( $_GET['x'] == 'home' ) {
        require "home.php";
    }
    elseif ( $_GET['x'] == 'dataproduk' ) {
        require "data_produk.php";
    }
    elseif ( $_GET['x'] == 'datakategori' ) {
        require "data_kategori.php";
    }
    elseif ( $_GET['x'] == 'profile' ) {
        require "profile.php";
    }
    elseif ( $_GET['x'] == 'setting' ) {
        require "setting.php";
    }
    elseif ( $_GET['x'] == 'produk' ) {
        require "produk.php";
    }
    elseif ( $_GET['x'] == 'homeuser' ) {
        require "home_users.php";
    }
    elseif ( $_GET['x'] == 'about' ) {
        require "about.php";
    }
    else{
        echo "<script>window.location = 'home'</script>";
    }     
?>