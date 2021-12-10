<?php require("../../../conexion/conexion.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../layouts/plantilla.php'); ?>
    <link rel="stylesheet" href="../../css/style_programas.css">
    <title>Programas</title>
</head>

<body>

    <div class="contenedor">
        <header class="header">
            <?php require_once("../layouts/headerMenu.php"); ?>
        </header>

        <div class="contenido" id="fondo-proyeccion-texto1">
            <br>
            <h2 style="text-align:center;"><b>Programas UTS</b></h2>
            <p style="text-align:justify; font-size:20px; padding:20px; margin-bottom:-50px;">
                Esta área está encargada de brindar información de la lista de programas
                disponibles. Estos programas informarán a los alumnos sobre los servicios
                que se brindan, desarrollando Webinars que tendrán una vi4 sta prevía de las
                fecha y hora que se realizará, no5mbre de los organizadores y el respectivo
                enlace para ingresar.
            </p>
            <br><br>
            <div>
                <h1 class="tituloLista">
                    Lista de programas
                </h1>
            </div>
        </div>

        <?php
        $connect = new Conexion();
        $listacursos = $connect->leer_curso();
        ?>

        <div class="programas">

            <?php foreach ($listacursos as $project) { ?>

                <div class="lista_programas">

                    <h5 class="programa_titulo"><b><?= $project['course_title'] ?></b></h5>

                    <img id="programa_imagen" style="" class="img-thumbnail" src="../../../Sistema/Imagenes/<?= $project['Foto']; ?>" />

                    <div class="ir_al_programa">
                        <form class="contenedor_boton" action="<?= $project['course_link'];?>" method="POST">
                            <button class="botonPrograma" type="submit" name="">Ir al sitio</button>
                        </form>
                    </div>

                    <p class="programa_descripcion"><?= $project['Texto'] ?></p>
                    <hr>
                    <ul>
                        <li>
                            <p class="programa_tiempo">Tiempo del curso: <?= $project['course_time'] ?></p>
                        </li>
                    </ul>

                    <ul>
                        <li>
                            <p class="programa_inicio">Fecha de inicio: <?= $project['course_dateStarts'] ?></p>
                        </li>
                    </ul>
                    <hr>
                    <p class="programa_observacion">Observaciones: <?= $project['course_observation'] ?></p>

                    <p class="programa_fecha">Publicado el: <?= $project['Fecha'] ?></p>
                   
                </div>

            <?php } ?>

        </div>

        <!--Contenido 2-->

        <div class="contenido_2" id="fondo-proyeccion-texto2">
            <h2 style="text-align:center;padding:10px;"><b>TEXTO</b></h2>
            <div style="padding:20px;">
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Officia minus quia delectus adipisci, atque odio non ea
                    dolores aliquam asperiores aspernatur dignissimos libero
                    sunt sint? Quod velit odit consequatur culpa?
                </P>
            </div>
        </div>

        <footer class="footerProgramas">
            <?php include_once("../layouts/footerDone.php"); ?>
        </footer>

    </div>

</body>

</html>