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

        // upload gambar
        $platform = upload();
        if(!$platform){
            return false;
        }

        $query = "INSERT INTO games VALUES
                    ('', '$nama', '$genre', '$tipe', '$platform')
                ";
        mysqli_query($conn, "$query");

        return mysqli_affected_rows($conn);
    }

    function upload(){
        $namaFile = $_FILES['platform']['name'];
        $ukuranFile = $_FILES['platform']['size'];
        $error = $_FILES['platform']['error'];
        $tmpName = $_FILES['platform']['tmp_name'];

        // cek apakah tidak ada gambar yg diupload
        if($error === 4){
            echo "<script>
                    alert('upload gambar terlebih dahulu!');
                </script>";
            return false;
        }

        // cek apakah yg diupload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
                    alert('yang anda upload bukan gambar!');
                </script>";
            return false;
        }

        // cek jika ukurannya terlalu besar
        if($ukuranFile > 1000000){
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                </script>";
            return false;
        }

        // lolos pengecekan, gambar siap diupload
        // generate nama gambar baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
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

        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah user pilih gambar baru atau tidak
        if($_FILES['platform']['error'] === 4){
            $platform = $gambarLama;
        } else{
            $platform = upload();
        }
        
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

    function cari($keyword){
        $query = "SELECT * FROM games
                    WHERE
                    nama LIKE '%$keyword%' OR
                    genre LIKE '%$keyword%' OR
                    tipe LIKE '%$keyword%' OR
                    platform LIKE '%$keyword%'
                ";
        return query($query);
    }

    function registrasi($data){
        global $conn;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        // cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)){
            echo "<script>
                    alert('username sudah terdaftar!')
                </script>";
            return false;
        }

        // cek konfirmasi password
        if($password !== $password2){
            echo "<script>
                    alert('konfirmasi password tidak sesuai')
                </script>";
            return false;
        }
        
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        // tambahkan user baru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }
?>