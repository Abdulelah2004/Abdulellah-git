<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circumference Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label>Radius:</label>
        <input type="text" name="radius" required>
        <input type="submit" value="Calculate Circumference">
    </form>

</body>
</html>
<?php
    $radius = $_POST["radius"];
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 3);
    
    echo "<p>The circumference of the circle is: " . htmlspecialchars($circumference) . "</p>";
    ?>
    