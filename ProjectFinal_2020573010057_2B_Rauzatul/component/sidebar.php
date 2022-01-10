<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 400px;">
    <ul class="nav nav-pills flex-column mb-auto">
        <?php if ( $row['level'] == 'admin' ) : ?>
        <li class="nav-item">
            <a href="home" class="nav-link link-dark
            <?php if($_GET['x'] == "home") echo "active"; ?>" aria-current="page">
                <i class="bi me-2 bi-speedometer2"></i>
                Dashboard
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'admin' ) : ?>
        <li class="nav-item">
            <a href="datakategori" class="nav-link link-dark
            <?php if($_GET['x'] == "kategori") echo "active"; ?>" aria-current="page">
                <i class="bi me-2 bi-briefcase"></i>
                Data Kategori
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'admin' ) : ?>
        <li class="nav-item">
            <a href="dataproduk" class="nav-link link-dark
            <?php if($_GET['x'] == "dataproduk") echo "active"; ?>">
                <i class="bi me-2 bi-briefcase"></i>
                Data Produk
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'user' ) : ?>
        <li class="nav-item">
            <a href="homeuser" class="nav-link link-dark
            <?php if($_GET['x'] == "homeuser") echo "active"; ?>" aria-current="page">
            <i class="bi bi-house"></i>
               Home
            </a>
        </li>

        <?php if ( $row['level'] == 'user' ) : ?>
        <li class="nav-item">
            <a href="produk" class="nav-link link-dark
            <?php if($_GET['x'] == "produk") echo "active"; ?>" aria-current="page">
                <i class="bi bi-bucket"></i>
               Produk
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'user' ) : ?>
        <li class="nav-item">
            <a href="about" class="nav-link link-dark
            <?php if($_GET['x'] == "about") echo "active"; ?>" aria-current="page">
            <i class="bi bi-clipboard"></i>
               About
            </a>
        </li>
        <?php endif; ?>

        <?php endif; ?>
    </ul>
</div>