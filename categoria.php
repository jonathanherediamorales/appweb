<?php
include("cabecera.php");
include("connection.php");
$con = connection();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/bootstrap.min.css"
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col">
                <a class="catelectronico" href="productosCategoria.php?categoria=<?php echo 'alimento' ?>">
                    Alimento
                </a>
            </div>
            <div class="col">
                <a class="catcocina" href="productosCategoria.php?categoria=<?php echo 'suplementos' ?>">
                    Suplementos
                </a>
            </div>
            <div class="col">
                <a class="catfarmaceutico" href="productosCategoria.php?categoria=<?php echo 'medicamentos' ?>">
                    Medicamentos
                </a>
            </div>
        </div>
    </div>

    </div>
    </div>
</body>

</html>