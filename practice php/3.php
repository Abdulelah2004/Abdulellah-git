<?php
$Abdulelah = false;
$Aung = true;
$Ticket_price = null;


if ($Abdulelah && $Aung){
    $Ticket_price = 10;
}
else{
    $Ticket_price = 20;
}
echo "the ticket price is {$Ticket_price}\$";

?>