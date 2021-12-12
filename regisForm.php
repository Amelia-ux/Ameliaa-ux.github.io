<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <div class="form">
            <h1>Registration Form</h1>
            <form method="get" action="insertProses.php">
                <div class="wrap">
                    <label>ID</label>
                    <input type="text" name="id">
                    <span class="focus-input"></span>
                </div>
                <div class="wrap">
                    <label>Username</label>
                    <input type="text" name="username">
                    <span class="focus-input"></span>
                </div>
                <div class="wrap">
                    <label>Name</label>
                    <input type="text" name="nama">
                    <span class="focus-input"></span>
                </div>
                <div class="wrap">
                    <label>E-mail</label>
                    <input type="text" name="email">
                    <span class="focus-input"></span>
                </div>
                <div class="wrap">
                    <label>Address</label>
                    <input type="text" name="alamat">
                    <span class="focus-input"></span>
                </div>
                    <button class="btn" type="submit" name="kirim" >Register</button>
            </form>
        </div>
        <div class="image">
            <img src="img/register.jpg" class="img" alt=""/>
        </div>
    </div>
    <?php
    ?>
</body>
</html>