<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari database</title>
</head>
<body>
    <?php
    $kolom=$_POST['kolom'];
    $cari=$_POST['cari'];
    $conn=mysqli_connect("localhost", "root", "", "db_saya");
    $hasil=mysqli_query($conn,"SELECT * FROM bukutamu where $kolom like '%$cari'");
    $jumlah=mysqli_num_rows($hasil);
    echo "<br>";
    echo "Ditemukan: $jumlah";
    echo "<br>";
    while($baris=mysqli_fetch_array($hasil))
    {
        echo "Nama : ";
        echo $baris[0];
        echo "<br>";
        echo "Email :";
        echo $baris[1];
        echo "<br>";
        echo "Komentar :";
        echo $baris[2];
    }
    ?>
</body>
</html>