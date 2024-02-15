<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM games");

// Error Check
// if (!$result){
//     echo mysqli_error($conn);
// }

// ambil data (fetch) dari object result
// ada 4 cara :
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array assosiatif
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while($game = mysqli_fetch_assoc($result)){
//     var_dump($game);
// }


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
        <?php while($row = mysqli_fetch_assoc($result)): ?>
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
        <?php endwhile; ?>
    </table>
</body>
</html>