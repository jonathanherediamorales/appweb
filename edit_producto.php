<?php

include('connection.php');
$con = connection();

$id=$_POST['id'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$cantidad = $_POST['cantidad'];

$sql= "UPDATE producto SET nombre='$nombre', categoria='$categoria', cantidad='$cantidad' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header('Location: productos.php');
}else{

}

?>