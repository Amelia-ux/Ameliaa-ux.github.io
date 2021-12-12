<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php
    include "koneksi_form.php";

    $id = $_GET['id'];
    $username = $_GET['username'];
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $alamat = $_GET['alamat'];

    $sql = "INSERT INTO peserta(id, username, nama, email, alamat)
            VALUE('$id', '$username', '$nama', '$email', '$alamat')";

    if(mysqli_query($connect, $sql)){
    ?>
    <div class="result">
        <h2>Data Added Successfully! </h2><br>
        
    <?php
    }else{
    ?>
        <h2>Data Failed to Add</h2><br> 
    <?php
    }
    mysqli_close($connect);
    ?>
        <a class="btn" href="regisForm.php">Back</a>
        <a class="btn" href="homeAdmin.php">Show Participant</a>
    </div>
</body>
</html>
