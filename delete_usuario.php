<?php

include("db.php");

$id=$_GET["id"];

$sql="DELETE FROM personal WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: usuario.php");
}else{

}

?>