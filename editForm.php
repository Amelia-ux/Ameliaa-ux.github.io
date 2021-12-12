<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include "koneksi_form.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM peserta WHERE id='$id' ";
        $result = mysqli_query($connect, $query);
    ?>
    <form action="prosesEdit.php" method="GET">
        <table>
            <?php
                while($row=mysqli_fetch_array($result)){
            ?>   
            <div class="dashboard">
                <div class="form">
                    <div class="wrap">
                            <label>ID</label>
                            <input type="text" name="id" value="<?php echo
                            $row['id']; ?>">
                            <span class="focus-input"></span>
                        </div>
                        <div class="wrap">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo
                            $row['username']; ?>">
                            <span class="focus-input"></span>
                        </div>
                        <div class="wrap">
                            <label>Name</label>
                            <input type="text" name="nama" value="<?php echo
                            $row['nama']; ?>">
                            <span class="focus-input"></span>
                        </div>
                        <div class="wrap">
                            <label>E-mail</label>
                            <input type="text" name="email" value="<?php echo
                            $row['email']; ?>">
                            <span class="focus-input"></span>
                        </div>
                        <div class="wrap">
                            <label>Address</label>
                            <input type="text" name="alamat" value="<?php echo
                            $row['alamat']; ?>">
                            <span class="focus-input"></span>
                        </div>
                            <button class="btn" type="submit" name="kirim" >Change</button>
                    </div>
                    <div class="image">
                        <img src="img/edit.jpg" class="img" alt=""/>
                </div>
            </div>
            
            <?php  
                }
            ?>
            </table>
        </form>
</body>
</html>