<?php 
// cek apakah tidak ada data di $_GET
// function isset => untuk mengecek apakah sebuah variabel sudah dibuat atau belum
if( !isset($_GET["name"]) ||
    !isset($_GET["genre"]) ||
    !isset($_GET["type"]) ||
    !isset($_GET["platform"]) ||
    !isset($_GET["poster"])
    ){
    // rediret (memindahkan user dari sebuah halaman ke halaman lain)
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Games</title>
</head>
<body>
    <ul>
        <img src="img/<?= $_GET["poster"]; ?>" height="200px" width="200px" alt="">
        <li>Nama : <?= $_GET["name"]; ?></li>
        <li>Genre : <?= $_GET["genre"]; ?></li>
        <li>Type : <?= $_GET["type"]; ?></li>
        <li>Platform : <?= $_GET["platform"]; ?></li>
    </ul>


    <a href="latihan1.php">Back</a>
</body>
</html>