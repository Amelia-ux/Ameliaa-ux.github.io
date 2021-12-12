<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "form_registrasi";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    if($connect){
        echo "Koneksi dengan MySQL berhasil <br>";
    }else{
        echo "Koneksi dengan MySQL gagal; " .mysqli_connect_error();
    }

    $sql = "CREATE TABLE peserta(
        id CHAR(8) NOT NULL PRIMARY KEY,
        nama VARCHAR(30),
        email VARCHAR(30) NOT NULL,
        alamat VARCHAR(50) NOT NULL
    )";
    if(mysqli_query($connect, $sql)){
        echo "Tabel peserta berhasil dibuat";
    }else{
        echo "Tabel peserta gagal dibuat <br>" .mysqli_error($connect);
    }

    mysqli_close($connect);
?>