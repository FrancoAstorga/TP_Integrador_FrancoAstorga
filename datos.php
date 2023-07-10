<?php
include('recursos.php');

if (isset($_POST['email'])){ //ya que el mail es obligatorio ponerlo solo si se envia agarramos los datos
    $nombre = $_POST['name'];
    $apellido = $_POST['lastName'];
    $correo = $_POST['email'];
    $cantidad = $_POST['cantidad'];
    $total = $_POST['totalPagar'];

    $categoria = $_POST['categoria'];

    if ($categoria == "option1") {
        $categoria = "Estudiante";
    } else if ($categoria = "option2") {
        $categoria = "Trainee";
    } else if ($categoria = "option3") {
        $categoria = "Junior";
    }

    $cons->insertarVenta($nombre, $apellido, $correo, $cantidad, $categoria, $total);


}

/* 
echo '<script> console.log("'.$nombre.'");</script>';
echo '<script> console.log("'.$apellido.'");</script>';
echo '<script> console.log("'.$correo.'");</script>';
echo '<script> console.log("'.$cantidad.'");</script>';
echo '<script> console.log("'.$categoria.'");</script>';
echo '<script> console.log("'.$total.'");</script>';
*/




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="bg-primary">
    <div class="container-fluid bg-warning">
            <a href="comprarTickets.html"><button type="button" class="btn btn-primary">Volver Atrás</button></a>
    <?php
    $datos = $cons->traerVentas();
    if (count($datos) > 0) {
    ?>

        <table class="table table-dark table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($datos); $i++) { ?>
                    <tr>
                        <td><?php echo $datos[$i]['nombre']; ?></td>
                        <td><?php echo $datos[$i]['apellido']; ?></td>
                        <td><?php echo $datos[$i]['correo']; ?></td>
                        <td><?php echo $datos[$i]['cantidad']; ?></td>
                        <td><?php echo $datos[$i]['categoria']; ?></td>
                        <td><?php echo $datos[$i]['total']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    
    <?php } else { ?>

        <h1>ERROR 404</h1>

    <?php } ?>
    </div>

</body>

</html>