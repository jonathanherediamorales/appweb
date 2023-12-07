<?php
include("cabecera.php");
include("connection.php");
$con = connection();

$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <div class="form">
    <h1>Agregar Productos</h1>
    <p></p>
    <form action="insert_producto.php" method="POST">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">
      <div class="row g-3">
        <div class="col">
          <label type="text" class="form-label">Nombre</label>
          <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" autocomplete="off" required>
        </div>
        <div class="col">
          <label type="text" class="form-label">Categoria</label>
          <select name="categoria" class="form-control" required>
            <option value=""></option>
            <option value="alimento">alimento</option>
            <option value="comida">comida</option>
            <option value="suplementos">suplementos</option>


          </select>
        </div>
        <div class="col">
          <label type="text" class="form-label">Cantidad</label>
          <input type="text" name="cantidad" class="form-control" placeholder="cantidad" aria-label="cantidad" autocomplete="off" required>
        </div>
      </div>
      <input type="submit" value="Agregar">
  </div>
</body>

</html>