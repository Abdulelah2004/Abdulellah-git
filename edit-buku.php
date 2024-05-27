<?php
include_once("./connect.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
$buku = mysqli_fetch_assoc($query_get_data);

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $ISBN = $_POST["ISBN"];
    $unit = $_POST["unit"];
    
    $squery = mysqli_query($db, "UPDATE buku SET nama ='$nama' , 
    ISBN='$ISBN' , Unit='$Unit' WHERE id=$id ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit Buku</title>
</head>
<body>
    <h1>Form edit Data Buku</h1>

    <form action="" method="post">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku['nama']?>" type="text" name="nama" id="nama">
        
        <br>
        <br>

        <label for="ISBN">ISBN</label>
        <input value="<?php echo $buku['ISBN']?>" type="text" name="ISBN" id="ISBN">
        <br><br>

        <label for="unit">Unit</label>
        <input value="<?php echo $buku['Unit']?>" type="number" name="unit" id="unit">
        <br><br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="./buku.php">kembali ke halman buku
    </a>
</body>
</html>
