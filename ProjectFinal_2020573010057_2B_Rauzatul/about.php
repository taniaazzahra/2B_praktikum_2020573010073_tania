<?php
require "proses/session.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
    <title>Nuyaaa.id</title>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>
    <!-- Navbar -->
    <?php require 'component/header.php' ?>
    <!-- End Navbar -->
    <!-- Sidebar -->
    <div class="container-fluid alert-success">
        <div class="row">
            <div class="col col-md-3">
                <?php require 'component/sidebar.php' ?>
            </div>
            <!--konten-->
            <div class="col">
                <div class="container">
                    <a>
                        <center><img src="assets/img/nuya.jpeg" class="d-block img-fluid" width="200px" style="margin-top: 30px;"></center>
                        <h4><center style="margin-top: 30px; border-bottom: 1px solid; padding-bottom: 10px;"><strong>TENTANG NUYAAA.ID</strong></center></h4>
                        <p style="margin-top: 30px;"><center>Belanja Online Pakaian, Aksesoris dan Produk Kecantikan Anda HANYA disini !<br>
                            Nuyaaa.id adalah situs belanja online fesyen dan kecantikan tertrusted di Indonesia. Nuyaaa.id menyediakan brand lokal dan internasional yang 
                            terus bertambah untuk customer di seluruh Indonesia. Nuyaaaid menawarkan kombinasi produk fesyen dan 
                            kecantikan terkini untuk setiap gaya personal yang beragam.<br><br>
                            Kami menyediakan produk berkualitas terbaik untuk wanita dan pria, bervariasi dari pakaian, aksesori, tas, 
                            dan kecantikan. Komitmen kami adalah memberikan pengalaman belanja online yang menyenangkan, mudah, 
                            dan terpercaya untuk memuaskan pelanggan dengan koleksi baru dan penawaran spesial setiap harinya, serta beragam keuntungan
                             seperti kemudahan pengembalian produk hingga 14 hari setelah barang diterima.</p><center><br>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Akhir Kategori -->
    </div>

    <!---akhir konten--->
    <!---footer----->
    <?php
    require "component/footer.php"
    ?>
    <!-- End Sidebar -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>