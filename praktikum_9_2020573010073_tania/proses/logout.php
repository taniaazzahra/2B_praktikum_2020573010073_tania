<?php 
    session_start();
    if ( isset($_SESSION['email']) ) {
        session_destroy();
        header("Location: ../auth/login.php");
        exit;
    } elseif ( !isset($_SESSION['email']) ) {
        header("Location: ../auth/login.php");
        exit;
    }
?>