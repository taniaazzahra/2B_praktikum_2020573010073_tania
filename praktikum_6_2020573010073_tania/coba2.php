<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi database MySQL</title>
</head>
<body>
    <h1>Koneksi database dengan MySQL_fetch_Array</h1>
    <?php
    $conn=mysqli_connect ("localhost", "root", "", "db_saya");
    $hasil = mysqli_query($conn, "SELECT * FROM Liga");
    while ($row = mysqli_fetch_array($hasil)) {
        echo "Liga " . $row["Negara"];
        echo " Mempunyai " .$row[2];
        echo " Wakil di liga champion <br> ";
    }
    ?>
</body>
</html>