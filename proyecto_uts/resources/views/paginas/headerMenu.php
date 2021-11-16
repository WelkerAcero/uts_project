<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../css/style_HeaderFooter.css">
    <title>Extension UTS</title>
    <?php include('../layouts/plantilla.php')?>
</head>

<body>
    <div class="contenedor-padre">

        <!-- ================================================================ SECCIÓN MENÚ ====================================================================== -->
        <header class="headerMenu">

            <div class="contenedor-menu">

                <div class="nav-bar" id="btnMenu"><i class="fas fa-bars" style="margin-left: 10px;"></i> Portafolio de servicios
                    <nav class="main-nav" id="menu_nav">
                        <ul class="menu" id="menu" style="font-size:10px;">
                            <li class="menu__item"><a href="presentacion.php" class="menu__link">Presentación</a></li>
                            <li class="menu__item"><a href="educacion.php" class="menu__link">Educación Continua</a></li>
                            <li class="menu__item"><a href="proyeccion.php" class="menu__link">Proyección Social</a></li>
                            <li class="menu__item"><a href="https://cafe.uts.edu.co/" target="_blank" class="menu__link">Proyectos de Emprendimiento</a></li>
                            <li class="menu__item"><a href="https://www.uts.edu.co/sitio/graduados/" target="_blank" class="menu__link">Área de Graduados</a></li>
                        </ul>
                    </nav>
                </div>

                <style>
                .nav-tabs .nav-item{
                    font-size: 27px;
                }
                </style>

                <img class="logouts" src="../../img/Logo-UTS-1.png" height="150px">

                <a class="contenedor-login" href="../../../php-login/login.php" style="text-decoration:none;">
                    <img class="icono-login" src="../../img/login.png" height="50px">
                    <br>
                    <h4>Admin</h4>
                </a>

            </div>

        </header>

    </div>
</body>

</html>