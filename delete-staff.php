<?php
include_once("./connect.php");

$id = $_GET["id"];

$query = mysqli_query($db, "DELETE FROM staff WHERE id=$id");

header ("location : staff.php");