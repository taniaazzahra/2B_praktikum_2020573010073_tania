<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu untuk database MySQL</title>
</head>
<body>
    <h1>Simpan Buku Tamu MySQL</h1>
    <?php
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $komentar = $_POST["komentar"];
    $conn=mysqli_connect("localhost", "root", "", "db_saya");
    echo "Nama      : $nama <br>";
    echo "Email     : $email <br>";
    echo "Komentar : $komentar <br>";
    $sqlstr="insert into bukutamu (Nama,Email,Komentar) values ('$nama','$email','$komentar')";
    $hasil = mysqli_query($conn,$sqlstr);
    echo "Simpan bukutamu berhasil dilakukan";
    ?>
</body>
</html>