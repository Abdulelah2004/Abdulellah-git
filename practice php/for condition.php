<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="5.php"  method="post">
     <label for="">input the numer you want to count <br> </label>
     <input type="text"  name="counter">
     <input type="submit" value="start">

    </form>
</body>
</html>
<?php
$counter = $_POST["counter"];

for($i= 0 ; $i< $counter; $i++)

echo $i . "<br>";

?>