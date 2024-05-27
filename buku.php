<?php
include_once("./connect.php");

$squery = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>

<body>

    <h1>Daftar Buku</h1>
    
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>action</td>
        </tr>
        <?php while ($buku = mysqli_fetch_assoc($squery)) { ?>
        <tr>
            <td><?php echo $buku["nama"]; ?></td>
            <td><?php echo $buku["ISBN"]; ?></td>
            <td><?php echo $buku["unit"]; ?></td>
            <td>
                <a href=<?php echo "edit-buku.php?id= " . $buku["id"] ?>>Edit</a></td>
                <a href=<?php echo "delete-buku.php?id= " . $buku["id"] ?>>HAPUS</a></td>
        </tr>
        <?php } ?>
    </table>
     <br>
     <a href="./tambah-buku.php"> tamba data buku</a>
     <br>
    <a href="./index.php">kembali kc halman utama </a>

</body>
</html>
