<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Abdulelah.php" method="post">
     <label for="coutry">put your country</label>  <br>
     <input type="text" name="country" > <br>
     <br>
     <input type="submit" name="submit" id="">
    </form>
</body>
</html>

<?php
$capitals = array ("Yemen" => "Sana'a" , "Palestine" => "Jerusalem", "Egypt" => "Cairo", "Saudi"=> "Riyadh");

$capital = $capitals[$_POST["country"]];
echo "the capitalbb  is {$capital}";


?>