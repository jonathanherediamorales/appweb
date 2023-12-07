<?php
include("cabecera.php");
include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM producto WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Editar PRODUCTOS</title>

</head>

<body>
    <div class="form">
        <div class="row g-3">
            <form action="edit_producto.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <div class="row g-3">
                    <div class="col">
                        <label type="text" class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" value="<?= $row['nombre'] ?>" autocomplete="off" required>
                    </div>
                    <div class="col">
                        <label type="text" class="form-label">Categoria</label>
                        <select name="categoria" class="form-control" value="<?= $row['categoria'] ?>" required>
                            <option value="">selecciona una opcion</option>
                            <option value="alimento">alimento</option>
                            <option value="comida">comida</option>
                            <option value="suplementos">suplementos</option>
                        </select>
                    </div>
                    <div class="col">
                        <label type="text" class="form-label">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" placeholder="cantidad" aria-label="cantidad" value="<?= $row['cantidad'] ?>" autocomplete="off" required>
                    </div>
                </div>

                <input type="submit" value="Actualizar">
            </form>
        </div>
</body>

</html>