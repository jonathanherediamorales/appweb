<?php
include("cabecera.php");
include("connection.php");
$con = connection();
?>

<!DOCTYPE html>
<html lang="en">

<body>

  <div id="content">
    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 mb-3">
            <center>
              <h1>Productos</h1>
            </center>
            <a href="productos.php"><input class="btn btn-primary" type="button" value="Agregar producto"></a>
          </div>
          <div class="col-sm-12">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>

                  <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Categorias</th>
                    <th>Cantidad</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $categoria = $_GET['categoria'];
                  extract($_POST);
                  $sql = "SELECT * FROM producto WHERE categoria = '$categoria'";
                  $producto = mysqli_query($con, $sql);
                  if ($producto->num_rows > 0) {
                    foreach ($producto as $key => $row) {
                  ?>
                      <style>
                        .problema {
                          background-color: <?php echo $color ?>;
                          color: #000000;
                        }
                      </style>
                      <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['categoria'] ?></th>
                        <th><?= $row['cantidad'] ?></th>
                        <td>
                          <a href="update.php?id=<?php echo $row['id'] ?>">
                            <div">
                              Editar
            </div>
            </a>
            <a></a>
            <a href="delete_producto.php?id=<?php echo $row['id'] ?>">
              <div">
                Eliminar
          </div>
          </a>
          </td>
          </tr>


      <?php
      }
      } else 
      ?>
      <?php
      ?>

      <tr class="text-center">
        <td colspan="4">No existe registros</td>
      </tr>
      </tbody>

      </table>
        </div>
      </div>
  </div>
  </div>
  </section>


  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
        </div>
  </section>
  </div>

</html>