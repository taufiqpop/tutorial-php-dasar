<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'functions.php';

    // ambil data di URL
    $id = $_GET["id"];
    // var_dump($id);

    // query data mahasiswa berdasarkan id
    $game = query("SELECT * FROM games WHERE id = $id")[0];
    // var_dump($game["nama"]);

    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        // cek apakah data berhasil diubah atau tidak
        if(ubah($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Diubah!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Games</title>
</head>
<body>
    <h1>Edit Data Games</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $game["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $game["platform"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $game["nama"]; ?>" required>
            </li>
            <li>
                <label for="genre">Genre : </label>
                <input type="text" name="genre" id="genre" value="<?= $game["genre"]; ?>" required>
            </li>
            <li>
                <label for="tipe">Tipe : </label>
                <input type="text" name="tipe" id="tipe" value="<?= $game["tipe"]; ?>" required>
            </li>
            <li>
                <label for="platform">Platform : </label>
                <img src="img/<?= $game['platform']; ?> alt="">
                <input type="file" name="platform" id="platform">
            </li>
            <li>
                <button type="submit" name="submit">Konfirmasi Edit!</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Back</a>
</body>
</html>