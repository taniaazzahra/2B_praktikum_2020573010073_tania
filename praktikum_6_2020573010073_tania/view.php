<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_saya");
    $hasil = mysqli_query($conn, "SELECT * FROM bukutamu");
    $jumlah = mysqli_num_rows($hasil);
    echo "<center>Daftar Penjunjung</center>";
    echo "Jumlah pengungjung : $jumlah"; $a=1;
    while($baris = mysqli_fetch_array($hasil)) {
        echo "<br>";
        echo $a;
        echo "<br>";
        echo "nama : ";
        echo $baris[0];
        echo "<br>";
        echo "email : ";
        echo $baris[1];
        echo "<br>";
        echo "komentar :";
        echo $baris[2];
        $a++;
    }
    ?>
</body>
</html>