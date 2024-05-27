<?php
include_once("./connect.php");

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $Email = $_POST["Email"];
    
    $squery = mysqli_query($db, "INSERT INTO staff VALUES (
        NULL, '$nama' , $telp' , $Email
    )");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah staff</title>
</head>
<body>
    <h1>Form Tambah Data Buku</h1>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br><br>

        <label for="telp">telp</label>
        <input type="text" name="telp" id="telp">
        <br><br>

        <label for="Email">Unit</label>
        <input type="number" name="Email" id="Email">
        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
