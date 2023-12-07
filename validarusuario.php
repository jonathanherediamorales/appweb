<?php

include('db.php');

$id = null;
$usuario = $_POST['usuario'];
$NombreCompleto = $_POST['NombreCompleto'];
$password = $_POST['password'];

$sql = "INSERT INTO personal VALUES('$id','$usuario','$NombreCompleto','$password')";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: login.html");
}else{

}




?>