<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../layouts/plantilla.php');?>
    <link rel="stylesheet" href="../../css/AdminPage.css">
    <title>Admin selection</title>
</head>

<body>
    <div style="margin-top:-55px">
        <?php
        require("../../../php-login/index.php");
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
            <a href="crudProyeccion.php">
                <img class="img" src="../../img/proyeccionCapture.PNG" width="300px" height="300px">
                <figcaption>Proyeccion web page</figcaption>
            </a>
        </div>

        <div class="contenido_linea_2">
            <br>
            <br>
            <h3>Registros de Contact_center</h3>
            <a href="../../../conexion_contact_center/index.php">
                <img class="img2" src="../../img/Contact_Center.png" width="400px">
                <figcaption>Registros contact center</figcaption>
            </a>
        </div>

    </section>

</body>

</html>