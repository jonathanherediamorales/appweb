<?php
include("cabecera.php");
include("connection.php");
$con = connection();

$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);
?>
