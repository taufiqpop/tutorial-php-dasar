<?php
// Array Numerik
// Array yg index nya angka
    $mahasiswa = [
        ["Taufiq Pop", "L200190085", "Informatika", "taufiqpop52@gmail.com"],
        ["Lala Dwi Alfiyah", "L100190174", "Ilmu Komunikasi", "lalapo19@gmail.com"]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?php echo $mhs[0]; ?></li>
            <li>NIM : <?php echo $mhs[1]; ?></li>
            <li>Jurusan : <?php echo $mhs[2]; ?></li>
            <li>Email : <?php echo $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>