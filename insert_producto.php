<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO producto VALUES('$id','$nombre','$categoria','$cantidad')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: productos.php");
}else{

}

?>