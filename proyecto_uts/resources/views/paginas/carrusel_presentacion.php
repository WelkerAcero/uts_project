<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="../../css/style_carrusel.css">
    <?php include('../layouts/plantilla.php');?>
    <title>Carrusel_presentacion</title>
</head>

<body>
    <div class="contenedor-dad">
        <section id="slider" class="contenedor-slider section2">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="../../img/slider1.jpg" class="d-block w-100 img1" height="700px">
                        <div class="carousel-caption">
                            <div class="texto-1slider">
                                <h1 class="extension">
                                    <i class="fas fa-quote-left"></i>
                                    El Grupo de Trabajo de Extensión Institucional se constituye en la unidad encargada primordialmente de canalizar los esfuerzos e iniciativas Institucionales que desde la academia se orienten al mejoramiento de la calidad de vida de nuestras comunidades y la solución de problemas del entorno desde múltiples perspectivas.
                                    <i class="fas fa-quote-right"></i>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="../../img/fondo.jpg" class="d-block w-100 img1" height="700px">
                        <div class="carousel-caption d-md-block">
                            <img src="../../img/chicos.png" width="300px">
                            <div class="texto-2slider">
                                <h1> OBJETIVOS </h1>
                                <h2><i class="fas fa-check-circle"></i> Formular y ejecutar planes, programas y proyectos institucionales de proyección social, en concordancia con los ámbitos de acción de las Unidades Tecnológicas de Santander.</h2>
                                <h2><i class="fas fa-check-circle"></i> Gestionar convenios interinstitucionales para el desarrollo de los programas, proyectos y prácticas en empresas, o Instituciones para el desarrollo de funciones de soporte profesional y el desarrollo de proyectos específicos que resuelvan problemas en las comunidades.</h2>
                                <h2><i class="fas fa-check-circle"></i> Generar una Cultura Emprendedora la cual tiene como objetivo formar el pensamiento emprendedor y empresarial en la comunidad académica de la UTS como sustento de una cultura emprendedora institucional.</h2>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="../../img/contacto.jpg" class="d-block w-100 img1" height="700px">
                        <div class="carousel-caption d-md-block">
                            <div class="contacto-extension" style="color: black; text-align: justify;  margin-top: -600px;">
                                <h1> CONTACTO </h1>
                                <br>
                                <h2><b>Coordinador Grupo de Trabajo de Extensión<br>Institucional</b></h2>
                                <h2>Ismael Enrique Ibáñez Peñuela</h2>
                                <br>
                                <h2><i class="fas fa-angle-double-right"></i><b> Teléfono:</b> 6917700 Ext: 1224 – 1225</h2>
                                <h2><i class="fas fa-angle-double-right"></i><b> E-mail:</b> extension@correo.uts.edu.co</h2>
                                <h2><i class="fas fa-angle-double-right"></i><b> Fan Page:</b><a id="fan-page" style="text-decoration: none; color:black;" href="https://www.facebook.com/GRADUADOSUTSOFICIAL/?fref=ts"><span> Extensión y Proyección Social</span></a></h2>
                                <br>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="fas fa-arrow-alt-circle-left fa-3x" style="color: black;" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="fas fa-arrow-alt-circle-right fa-3x" style="color: black;" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
    </div>
</body>

</html>