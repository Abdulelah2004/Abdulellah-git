<?php
include_once("./connect.php");

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $ISBN = $_POST["ISBN"];
    $unit = $_POST["unit"];
    
    $squery = mysqli_query($db, "INSERT INTO buku VALUES (
        NULL, '$nama' , $ISBN' , $unit
    )");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
</head>
<body>
    <h1>Form Tambah Data Buku</h1>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br><br>

        <label for="ISBN">ISBN</label>
        <input type="text" name="ISBN" id="ISBN">
        <br><br>

        <label for="unit">Unit</label>
        <input type="number" name="unit" id="unit">
        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
