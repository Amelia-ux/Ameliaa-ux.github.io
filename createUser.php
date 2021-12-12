<?php 
    $namaHost = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "form_registrasi"; 
    
    $connect = mysqli_connect($namaHost, $username, $password, $database); 
    
    $sql = "CREATE TABLE user( 
        id INT(5) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        username VARCHAR(50), 
        password VARCHAR(50), 
        level VARCHAR(5) NOT NULL)"; 
        
    if(mysqli_query($connect, $sql)){ 
        echo "Tabel user berhasil dibuat"; 
    }else{ 
        echo "Tabel user gagal dibuat <br>" .mysqli_error($connect);
    } mysqli_close($connect);