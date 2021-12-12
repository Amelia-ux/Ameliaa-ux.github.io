<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Report</title>
    <link rel="stylesheet" href="styleLogin.css">
</head>
<body>
<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM peserta WHERE username='$username' and password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == 1){
    ?>
        <div class="container">
            <div class="header">
                <h2>You have successfully logged in as Admin</h2>
            </div>
            <div class="main">
                <a class="btn" href="homeAdmin.php">HOME</a>
            </div>
        </div>
    <?php
    }else if($row['level'] == 2){?>
        <div class="container">
            <div class="header">
                <h2>You have successfully logged in as Guest</h2>
            </div>
            <div class="main">
                <a class="btn" href="homeGuest.php">HOME</a>
            </div>
        </div>
    <?php
    }else{?>
        <div class="container">
            <div class="header">
                <h2>You failed to login</h2>
            </div>
            <div class="main">
                <a class="btn" href="index.html">Back</a>
                <a class="btn" href="regisForm.php">Register</a>
            </div>
        </div>
        <?php
        echo mysqli_error($connect);
        }
        ?>
</body>
</html>
