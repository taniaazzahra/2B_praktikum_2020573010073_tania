<?php
    session_start();
    if (empty($_SESSION['username'])) {
        echo "<script>window.location = 'sign-in/index.php'</script>";
    }
?>

<?php
    session_start(
        
    )
?>