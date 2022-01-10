<?php
    require "proses/koneksi.php";
    
    $hasil = mysqli_query($conn, "SELECT foto, level FROM tb_user WHERE email = '$_SESSION[email]'");
    $row = mysqli_fetch_assoc($hasil);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold ms-3" href="index.php">Nuyaaa.id</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="dropdown ms-auto me-5">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/<?= $row['foto']; ?>" alt="" width="32" height="32" class="rounded-circle mx-2" />
                    <strong><?= $_SESSION['email']; ?></strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="profile">Profile</a></li>
                    <li><a class="dropdown-item" href="setting.php">Settings</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="proses/logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>