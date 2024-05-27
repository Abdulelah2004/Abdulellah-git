<?php
include_once("./connect.php");

$id = $_GET["id"];

$query = mysqli_query($db, "DELETE FROM buku WHERE id=$id");

header ("location : buku.php");