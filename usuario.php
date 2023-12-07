
<?php
include("cabecera.php");
include("db.php");

$sql = "SELECT * FROM personal";
$query = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="form">
    <h2>Usuario Registrados</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">usuario</th>
          <th scope="col">NombreCompleto</th>
          <th scope="col">password</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php while ($row = mysqli_fetch_array($query)) : ?>
        <tr>
          <th><?= $row['id'] ?></th>
          <th><?= $row['usuario'] ?></th>
          <th><?= $row['NombreCompleto'] ?></th>
          <th><?= $row['password'] ?></th>
          <th><a href="delete_usuario.php?id=<?= $row['id'] ?>">Eliminar</a></th>

        </tr>
      <?php endwhile; ?>
      </tr>
      </tbody>
    </table>
</body>

</html>
