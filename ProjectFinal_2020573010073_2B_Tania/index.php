<?php
    if(empty($_GET['x'])){
        echo "<script>window.location = 'home'</script>";
    }
    elseif($_GET['x']=='home'){
        require "home.php";
    }
    elseif($_GET['x']=='menu'){
        require "menu.php";
    }
    elseif($_GET['x']=='datamenu'){
        require "data_menu.php";
    }
    elseif($_GET['x']=='transaksi'){
        require "data_transaksi.php";
    }
    elseif($_GET['x']=='orderan'){
        require "data_orderan.php";
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
