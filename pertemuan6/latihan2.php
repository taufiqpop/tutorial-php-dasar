<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<?php
// Array Assosiatif
// definisinya sama seperti array, kecuali
// key nya adalah string yg dibuat sendiri
    $mahasiswa = [
        [
            "nim" => "L200190085",
            "nama" => "Taufiq Pop",
            "jurusan" => "Informatika",
            "email" => "taufiqpop52@gmail.com",
            "gambar" => "Pop.jpg"
        ],
        [
            "email" => "lalapo19@gmail.com",
            "nama" => "Lala Dwi Alfiyah",
            "nim" => "L100190174",
            "jurusan" => "Ilmu Komunikasi",
            "nilai" => [80, 90, 75],
            "gambar" => "KID.jpg"
        ]
    ];
?>
<?php echo $mahasiswa[1]["nilai"][2]; ?></li>
<h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs): ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" height="100px" width="100px" alt="">
            </li>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NIM : <?php echo $mhs["nim"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>