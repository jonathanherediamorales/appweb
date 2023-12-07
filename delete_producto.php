<?php

include("db.php");

$id=$_GET["id"];

$sql="DELETE FROM producto WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: productos.php");
}else{

}

?>