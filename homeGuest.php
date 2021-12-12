<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>All Participant</title>
</head>
<body>
    <h2>Participant</h2>
    <table>
        <tr style="text-align:center; font-weight:bold; background-color:#2F4F4F; color:white">
            <th>ID</th>
            <th>Name</th>            
            <th>Email</th>
            <th>Address</th>
        </tr>
        <?php
            include "koneksi_form.php";

            $query = "SELECT * FROM peserta";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["nama"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["alamat"] ?></td>
        <?php
                }
            }else{
        ?>
            <tr>
				<td colspan="6" align="center";>Data Kosong</td>
			</tr>
        <?php
            }
        ?>
    </table>
        <br><br>
        <a class="btn" href="index.html">Log Out</a>
</body>
</html>