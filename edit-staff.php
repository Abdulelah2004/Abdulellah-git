<?php
include_once("./connect.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $Email = $_POST["Email"];
    
    $squery = mysqli_query($db, "UPDATE staff SET nama ='$nama' , 
    telp='$telp' , Email='$Email' WHERE id=$id ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit staff</title>
</head>
<body>
    <h1>Form edit Data Buku</h1>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama']?>" type="text" name="nama" id="nama">
        
        <br>
        <br>

        <label for="telp">telp</label>
        <input value="<?php echo $staff['ISBN']?>" type="text" name="ISBN" id="ISBN">
        <br><br>

        <label for="Email">Email</label>
        <input value="<?php echo $staff['Unit']?>" type="email" name="unit" id="unit">
        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="./staff.php">kembali ke halman staff </a>
</body>
</html>
