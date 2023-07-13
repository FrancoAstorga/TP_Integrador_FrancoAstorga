<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Codo a Codo 4.0</title>
    <link rel="shortcut icon" href="img/codoacodo.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="TotalPagar.js"></script>
    <script defer src="activePage.js"></script>
    <!--le indicas al navegador que no ejecute el script hasta que se haya cargado todo el contenido de la página.-->
</head>


<body>

    <?php include('header.html'); ?>


    <div class="container_tickets">

        <div class="ticket ticket_border_1">
            <h4>Estudiante</h4>
            <p>Tienen un descuento</p>
            <p>80%</p>
            <p>*presentar documentación</p>
        </div>
        <div class="ticket ticket_border_1">
            <h4>Trainee</h4>
            <p>Tienen un descuento</p>
            <p>50%</p>
            <p>*presentar documentación</p>
        </div>
        <div class="ticket ticket_border_2">
            <h4>Junior</h4>
            <p>Tienen un descuento</p>
            <p>15%</p>
            <p>*presentar documentación</p>
        </div>

    </div>


    <main>
        <!--Lo ponemos para usar la funcion reset -->
        <form action="datos.php" method="post">

            <!--formulario-->
            <div class="title_ventas">
                <h6>Venta</h6>
                <h1>VALOR DE TICKET $200</h1>
                <div class="form_ventas">
                    <input type="text" placeholder="Nombre" name="name" required>
                    <input type="text" placeholder="Apellido" name="lastName">
                </div>

                <input type="email" placeholder="Correo" id="boton_ancho" name="email" required>

            </div>

            <div class="selection_form">
                <div class="selection_inputs">
                    <h5>Cantidad</h5>
                    <input id="cantidad" type="text" placeholder="Cantidad" name="cantidad" required>
                </div>
                <div class="selection_inputs">
                    <h5>Categoria</h5>
                    <select id="categoria" class="selection_select" name="categoria">
                        <option value="option1">Estudiante</option>
                        <option value="option2">Trainee</option>
                        <option value="option3">Junior</option>
                    </select>

                </div>

            </div>

            <div class="confirmacion_venta">
                <div id="total_pago"> Total a Pagar: </div>
                <input type="hidden" name="totalPagar" id="totalPago">
                <div class="botones_finales mb-3">
                    <button type="reset">Borrar</button>
                    <button type="submit" id="resumen">Resumen</button>

                </div>

                <a href="datos.php"><button type="button" class="btn btn-success">Ver tickets comprados</button></a>
            </div>

        </form>
    </main>


</body>


<?php include 'footer.html';?>


</html>