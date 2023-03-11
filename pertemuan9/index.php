<?php
    require 'functions.php';
    $games = query("SELECT * FROM games");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Nama</th>
            <th>Genre</th>
            <th>Type</th>
            <th>Platform</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($games as $row): ?>
        <tr style="text-align: center;">
            <td><?= $i?></td>
            <td>
                <a href="">Edit</a> |
                <a href="">Delete</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["genre"]; ?></td>
            <td><?= $row["type"]; ?></td>
            <td><?= $row["platform"]; ?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>