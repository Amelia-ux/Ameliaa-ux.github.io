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

    $sql = "INSERT INTO peserta VALUES('001', 'Wildan Sanjaya','wildan@mail.com',
            'Malang')";
    if(mysqli_query($connect, $sql)){
        echo "Record berhasil ditambahkan";
    }else{
        echo "Record gagal ditambahkan <br>" .mysqli_error($connect);
    }

    mysqli_close($connect);
?>