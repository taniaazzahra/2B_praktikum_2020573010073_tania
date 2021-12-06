<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px">
    <ul class="nav nav-pills flex-column mb-auto">
        <?php if ( $row['level'] == 'admin' || $row['level'] == 'mahasiswa' || $row['level'] == 'adm') : ?>
        <li class="nav-item">
            <a href="home" class="nav-link link-dark
            <?php if($_GET['x'] == "home") echo "active"; ?>" aria-current="page">
                <i class="bi me-2 bi-speedometer2"></i>
                Dashboard
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'admin' ) : ?>
        <li>
            <a href="databarang" class="nav-link link-dark
            <?php if($_GET['x'] == "barang") echo "active"; ?>">
                <i class="bi me-2 bi-briefcase"></i>
                Data Barang
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'admin' ) : ?>
        <li>
            <a href="mahasiswa" class="nav-link link-dark
            <?php if($_GET['x'] == "mhs") echo "active"; ?>">
                <i class="bi me-2 bi-people"></i>
                Data Mahasiswa
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'admin' || $row['level'] == 'mahasiswa' ) : ?>
        <li>
            <a href="peminjaman" class="nav-link link-dark
            <?php if($_GET['x'] == "pinjam") echo "active"; ?>">
                <i class="bi me-2 bi-grid"></i>
                Data Peminjaman
            </a>
        </li>
        <?php endif; ?>
    </ul>
</div>