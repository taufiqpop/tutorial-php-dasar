<?php
    // Connect to database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;

        $nama = htmlspecialchars($data["nama"]);
        $genre = htmlspecialchars($data["genre"]);
        $tipe = htmlspecialchars($data["tipe"]);
        $platform = htmlspecialchars($data["platform"]);

        $query = "INSERT INTO games VALUES
                    ('', '$nama', '$genre', '$tipe', '$platform')
                ";
        mysqli_query($conn, "$query");

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM games WHERE id = $id");
        
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;

        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $genre = htmlspecialchars($data["genre"]);
        $tipe = htmlspecialchars($data["tipe"]);
        $platform = htmlspecialchars($data["platform"]);

        $query = "UPDATE games SET
                    nama = '$nama',
                    genre = '$genre',
                    tipe = '$tipe',
                    platform = '$platform'
                WHERE  id = $id
                ";
        mysqli_query($conn, "$query");

        return mysqli_affected_rows($conn);
    }
?>