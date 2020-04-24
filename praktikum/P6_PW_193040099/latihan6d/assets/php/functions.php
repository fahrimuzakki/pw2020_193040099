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
?>