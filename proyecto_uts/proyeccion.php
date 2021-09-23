<?php


require("Sistema/conexion/conexion.php");
require("Sistema/procesoInsertProyeccion.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleProyeccionSocial.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Proyeccion</title>
</head>

<body>

    <div class="contenedor">
        <header class="header">
            <?php require "headerMenu.php"; ?>
        </header>

        <div class="contenido" id="fondo-proyeccion-texto1">
            <br>
            <h2 style="text-align:center;"><b>Área de Proyección Social Comunitaria</b></h2>
            <p style="text-align:justify; font-size:20px; padding:20px; margin-bottom:-50px;">
                Esta área está encargada de ejecutar proyectos sociales que contribuyan a la solución de necesidades
                del entorno
                mediante la interacción con la comunidad promoviendo, regulando y orientando estratégicamente la
                prestación de servicios
                sociales de carácter comunitario que ofrece la institución, desde sus programas académicos,
                facultades, departamentos y
                dependencias, en concordancia con los ámbitos de acción de las Unidades Tecnológicas de Santander.
            </p>
        </div>
        <style>
            #fondo-proyeccion-texto1 {
                background: url("img/fondo-info2.jpg");
                background-size: cover;
            }
        </style>
        <div class="carrusel" style="box-shadow: 3px 3px 6px black, 7px 7px 6px green;">
            <br>
            <h1 style="margin-bottom:-10px; text-align:center;"><u>Algunos proyectos ejecutados</u></h1>
            <?php
            require "carrusel.php";
            ?>
        </div>

        <!--Contenido 2-->

        <div class="contenido_2" id="fondo-proyeccion-texto2">
            <h2 style="text-align:center;padding:10px;"><b>Objetivos</b></h2>
            <div style="padding:20px;">
                <h4 style="text-align:justify;"><i class="far fa-caret-square-right"></i>
                    Ejecutar proyectos sociales que contribuyan a la solución de necesidades del entorno mediante la
                    interacción con la comunidad. </h4>
                <h4 style="text-align:justify;"><i class="far fa-caret-square-right"></i>
                    Intervenir en los Proyectos Sociales de Nivel Territorial.</h4>
                <h4 style="text-align:justify;"><i class="far fa-caret-square-right"></i>
                    Participar activamente en la formulación de soluciones a las necesidades del sector productivo y de la
                    comunidad con sentido social y solidario.</h4>
            </div>
        </div>
        <style>
            #fondo-proyeccion-texto2 {
                background: url("img/fondo_3pestana.jpg");
                background-size: cover;
            }
        </style>

        <aside class="sidebar">
            <h1 style="
          background: linear-gradient(green,rgb(0, 255, 115));
          -webkit-background-clip: text;
          color: transparent;">Visita nuestras instalaciones</h1>
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15836.720457168101!2d-73.1235992!3d7.1051139!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f50c91e41f0ac6e!2sUnidades%20Tecnol%C3%B3gicas%20de%20Santander!5e0!3m2!1ses-419!2sco!4v1621896294882!5m2!1ses-419!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            <img class="uts-imagen-calidad" src="img/uts-vision.jpg" width="100%">
        </aside>



        <div class="imagen-1">

            <?php
            $i = 1;
            foreach ($listaproyeccion as $project) { ?>
                <div class="row">
                    <div class="table-responsive-lg">
                        <table class="">
                            <thead class="thead-dark">
                                <tr>

                                </tr>
                            </thead>
                            <h2 style="margin:10px 40px">Proyecto ejecutado <?php echo $i++;?>  <p><?php echo $project['Fecha']?></p></h2>
                            <tr style="border-top:2px solid black; border-bottom:2px solid black; padding:0px -40px">
                                <td><img style="margin:20px 40px" class="img-thumbnail" width="100%" src="Sistema/Imagenes/<?php echo $project['Foto']; ?>" /></td>
                                <td width="60%">
                                    <h5 style="padding:60px; text-align:justify;"><?php echo $project['Texto']; ?></h5>
                                </td>

                            </tr>

                        </table>

                    </div>
                    <br><br>
                </div>
            <?php } ?>
        </div>


        <footer class="footer">
            <?php require "footerDone.php"; ?>
        </footer>

    </div>
</body>

</html>