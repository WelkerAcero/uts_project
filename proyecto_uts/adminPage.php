<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin selection</title>
    <link rel="stylesheet" href="css/AdminPage.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>
    <div style="margin-top:-55px">
        <?php
        require("php-login/index.php");
        ?>
    </div>

    <section class="contenedor">

        <h3 class="titulo">
            Páginas disponibles para editar

        </h3>

        <div class="contenido_linea_1">
            <br>
            <br>
            <h3>Página proyección</h3>
            <a href="Sistema/proyeccion/index.php">
                <img class="img" src="img/proyeccionCapture.PNG" width="300px" height="300px">
                <figcaption>Proyeccion web page</figcaption>
            </a>
        </div>

        <div class="contenido_linea_2">
            <br>
            <br>
            <h3>Registros de Contact_center</h3>
            <a href="conexion_contact_center/index.php">
                <img class="img2" src="img/Contact_Center.png" width="400px">
                <figcaption>Registros contact center</figcaption>
            </a>
        </div>

    </section>

</body>

</html>