<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px">
    <ul class="nav nav-pills flex-column mb-auto">
        <?php if ( $row['level'] == 'admin' || $row['level'] == 'customer') : ?>
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
            <a href="datamenu" class="nav-link link-dark
            <?php if($_GET['x'] == "datamenu") echo "active"; ?>">
                <i class="bi me-2 bi-journal"></i>
                Data Menu
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'customer' ) : ?>
        <li>
            <a href="menu" class="nav-link link-dark
            <?php if($_GET['x'] == "menu") echo "active"; ?>">
                <i class="bi me-2 bi-journal"></i>
                Menu
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'admin' ) : ?>
        <li>
            <a href="orderan" class="nav-link link-dark
            <?php if($_GET['x'] == "orderan") echo "active"; ?>">
            <i class="bi me-2 bi-cart"></i>
                Orderan
            </a>
        </li>
        <?php endif; ?>

        <?php if ( $row['level'] == 'admin' ) : ?>
        <li>
            <a href="transaksi" class="nav-link link-dark
            <?php if($_GET['x'] == "transaksi") echo "active"; ?>">
                <i class="bi me-2 bi-cash-coin"></i>
                Transaksi
            </a>
        </li>
        <?php endif; ?>
    </ul>
</div>