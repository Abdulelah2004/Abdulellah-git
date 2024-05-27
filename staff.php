<?php
include_once("./connect.php");

$squery = mysqli_query($db, "SELECT * FROM staff");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar staff</title>
</head>
<body>
    <h1>daftar staff</h1>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>telepon</td>
            <td>Email</td>
            <td>action</td>
        </tr>
        <?php while ($staff = mysqli_fetch_assoc($squery)) { ?>
        <tr>
            <td><?php echo $staff["nama"]; ?></td>
            <td><?php echo $staff["telepon"]; ?></td>
            <td><?php echo $staff["Email"]; ?></td>
            <td><a href=<?php echo "edit-staff.php?id= " . $staff["id"] ?>>Edit</a></td>
            <a href=<?php echo "delete-staff.php?id= " . $staff["id"] ?>>HAPUS</a></td>
        </tr>
        <?php } ?>
    </table>
     <br>
     <a href="./tambah-staff.php">tembah data staff</a>
     <br>
     <a href="./index.php">kembali kc halman utama </a>
</body>
</html>