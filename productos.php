<?php
include("cabecera.php");
include("connection.php");
$con = connection();

$sql = "SELECT * FROM producto";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="CSS/style.css" rel="stylesheet">
  <title>productos</title>
</head>

<body>
  <div class="form" class="table table-dark table-hover">
    <h2>Productos Registrados</h2>
    <th><a href="agregar.php">agregar</a></th>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">categoria</th>
          <th scope="col">cantidad</th>
          <th scope="col">editar</th>
          <th scope="col">eliminar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php while ($row = mysqli_fetch_array($query)) : ?>
        <tr>
          <th><?= $row['id'] ?></th>
          <th><?= $row['nombre'] ?></th>
          <th><?= $row['categoria'] ?></th>
          <th><?= $row['cantidad'] ?></th>
          <th><a href="update.php?id=<?= $row['id'] ?>">Editar</a></th>
          <th><a href="delete_producto.php?id=<?= $row['id'] ?> class="users-table--delete">Eliminar</a></th>
        </tr>
      <?php endwhile; ?>
      </tr>
      </tbody>
    </table>
</body>
</html>