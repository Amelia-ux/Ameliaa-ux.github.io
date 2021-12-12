<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "koneksi_form.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $alamat = $_GET['alamat'];

    $query = "UPDATE peserta SET nama='$nama', email='$email', 
            alamat='$alamat' WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if($result){
    ?>
    <div class="result">
        <h1>Data Changed Successfully!</h1>
    <a class="btn" href="homeAdmin.php">Show Data On Table</a>
    </div>
<?php
    }else{
        echo "Gagal update data " .mysqli_error($connect);
    }
?>
</body>
</html>