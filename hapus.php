<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "koneksi_form.php";

    $id = $_GET['id'];
    $query = "DELETE FROM peserta WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if($result){
    ?>
    <div class="result">
        <h1>Delete Succesfully!</h1>
        <a  class="btn" href="homeAdmin.php">Show Data On Table</a>
    </div>
<?php
    }else{
        echo "Data gagal dihapus <br>" .mysqli_error($connect);
    }
?>
</body>
</html>