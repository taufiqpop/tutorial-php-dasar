<?php
    session_start();
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require 'functions.php';

    // pagination
    // konfigurasi
    $jumlahDataPerHalaman = 3;
    $jumlahData = count(query("SELECT * FROM games"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    // ternary (pengganti if else)
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    
    $games = query("SELECT * FROM games ORDER BY id ASC LIMIT $awalData, $jumlahDataPerHalaman");

    // tombol cari ditekan
    if(isset($_POST["cari"])){
        $games = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Games</title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Games</a>
    <br><br>

    <!-- tombol cari di tekan -->
    <form action="" method="POST">
        <input type="text" name="keyword" size="50" placeholder="input your search.." autocomplete="off" autofocus>
        <button type="submit" name="cari">Search!</button>
    </form>
    <br>
    
    <!-- navigasi -->
    <?php if($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif; ?>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Tipe</th>
            <th>Platform</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($games as $row): ?>
        <tr style="text-align: center;">
            <td><?= $i?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah ingin menghapus?');">Delete</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["genre"]; ?></td>
            <td><?= $row["tipe"]; ?></td>
            <td><?= $row["platform"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>