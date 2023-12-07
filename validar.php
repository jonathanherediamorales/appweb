<?php

include('db.php');

$USUARIO = $_POST['usuario'];
$PASSWORD = $_POST['password'];


$consulta = "SELECT* FROM Personal where usuario = '$USUARIO' and password ='$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {
    header("location:index.php");
} else {
    include("login.html");
?>
   <center> <h1>ERROR DE AUTENTIFICACION</h1></center>
<?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>