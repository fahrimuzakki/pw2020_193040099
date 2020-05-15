<?php

    function koneksi() 
    {
        $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
        mysqli_select_db($conn, "tubes_193040099") or die("Database Salah!");

        return $conn;
    }

    function query($sql)
    {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result))
        {
            $rows[] = $row;
        }
        return $rows;   
    }

    //fungsi untuk menambahkan data didalam database
    function tambah($data)
    {
        $conn = koneksi();

        $Gambar = htmlspecialchars($data['Gambar']);
        $AlatMusik = htmlspecialchars($data['AlatMusik']);
        $Merk = htmlspecialchars($data['Merk']);
        $AlamatToko = htmlspecialchars($data['AlamatToko']);
        $Harga = htmlspecialchars($data['Harga']);

        $query = "INSERT INTO alatmusik
                  VALUES
                  ('', '$Gambar', '$AlatMusik', '$Merk', '$AlamatToko', '$Harga')";

                  mysqli_query($conn, $query);
                  return mysqli_affected_rows($conn);
    }

    //fungsi untuk menghapus data dalam database
    function hapus($id)
    {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM alatmusik WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    //fungsi untuk mengubah data dalam database
    function ubah($data)
    {
         $conn = koneksi(); 

        $id = htmlspecialchars($data['id']);
        $Gambar = htmlspecialchars($data['Gambar']);
        $AlatMusik = htmlspecialchars($data['AlatMusik']);
        $Merk = htmlspecialchars($data['Merk']);
        $AlamatToko = htmlspecialchars($data['AlamatToko']);
        $Harga = htmlspecialchars($data['Harga']);

        $query = "UPDATE alatmusik
                        SET
                        Gambar = '$Gambar',
                        AlatMusik = '$AlatMusik',
                        Merk = '$Merk',
                        AlamatToko = '$AlamatToko',
                        Harga = '$Harga'
                        WHERE id = '$id' ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    //fungsi untuk mencari data
    function cari($keyword) {
        $query = "SELECT * FROM alatmusik
                    WHERE
                    AlatMusik LIKE '%$keyword%' OR
                    Merk Like '%$keyword%' OR
                    AlamatToko Like '%$keyword%' Or
                    Harga LIKE '%$keyword%'
                    ";
    
                    return query($query);
    }

    //fungsi registrasi
    function registrasi($data)
    {
        $conn = koneksi();
        $username = strtolower(stripcslashes($data['username']));
        $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah add atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
            return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
    }
    
?>