<?php
    session_start();

    if ( !isset($_SESSION['email']) ) {
        header("Location: auth/login.php");
        exit;
    }
?>