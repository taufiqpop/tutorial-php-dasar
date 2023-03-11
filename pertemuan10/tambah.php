<?php
    require 'functions.php';
    // cek apakah tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        // cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>
<!DOCtipe html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Games</title>
</head>
<body>
    <h1>Tambah Data Games</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input tipe="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="genre">Genre : </label>
                <input tipe="text" name="genre" id="genre" required>
            </li>
            <li>
                <label for="tipe">tipe : </label>
                <input tipe="text" name="tipe" id="tipe" required>
            </li>
            <li>
                <label for="platform">Platform : </label>
                <input tipe="text" name="platform" id="platform" required>
            </li>
            <li>
                <button tipe="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    <a href="index.php">Back</a>
</body>
</html>