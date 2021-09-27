<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-widht, intial-scale=1.0">
        <title>Document</title>
    </head>
<body>
    <?php
    $skr = date("d/m/Y");
    echo "Sekarang adalah $skr <br>";
    $waktu = date("h:i:s A"); //A menunjukkan AM atau PM
    echo "Jam menunjukkan pukul : $waktu";
    ?>
</body>
</html>