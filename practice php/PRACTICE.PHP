<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="PRACTICE.PHP" method="get">
        <label for="">quantity: </label>
        <input type="text" name="quantity" id="">
        <input type="submit" value="total">
    </form>
    
    <?php
    /*
    $item = "pizza";
    $price = 7.99;
    $quantity = $_GET ["quantity"];

    $total = $item * $price;

    echo "You have ordered 1 item with the price of {$price}";
    echo "your total is {$total}";
    */
    ?>

    <?php
    $item = "pizza";
    $price = 7.99;
    $quantity = $_GET["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered 1 item with the price of {$price} <br>";
    echo " Your total is {$total}";
    ?>
</body>
</html>
