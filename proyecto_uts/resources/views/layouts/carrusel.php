<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('../layouts/plantilla.php')
    ?>
    <link rel="stylesheet" href="../../css/carrusel.css">
    <title>solo_carrusel</title>
</head>

<body>
    <br>
    <br>
    <div class="contenedor_dad">
        <section id="slider" class="contenedor-slider section2">


            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active" id="fondo_carrusel_proyeccion">
                        <img src="../../img/img-proyeccion-1.png" class="d-block w-100 img1" height="350px">
                        <div id="size-carrusel1" class="carousel-caption d-md-block">
                            <div>
                                <h1 class="titulo">
                                    Capacitación a los tenderos de Bucaramanga y su área metropolitana en el conocimiento, manejo y aplicabilidad de instrumentos y herramientas fiscales, contables, tributarias, presupuestales y crediticias que les permitan garantizar su operatividad y afrontar con éxito los retos que imponen los elevados niveles de competencia que caracterizan a las economías contemporáneas. 127 Personas Beneficiadas.
                                </h1>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="../../img/img-proyeccion-2.png" class="d-block w-100 img1" height="350px">
                        <div id="size-carrusel2" class="carousel-caption d-md-block">
                            <div>
                                <h1 class="titulo2">
                                    Estudio de la viabilidad de los métodos a utilizar en la transformación de los residuos orgánicos producidos en fincas agrícolas y porcícolas de la vereda Rosa Blanca y Agua Blanca, cerro la judía Floridablanca. 97 Personas beneficiadas. </h1>
                            </div>
                            <style>
                                .titulo {
                                    color: black;
                                    padding: 10px;
                                    font-size: 15px;
                                    width: 40%;
                                    text-align: justify;
                                }

                                .titulo2 {
                                    color: black;
                                    padding: 10px;
                                    font-size: 20px;
                                    width: 40%;
                                    text-align: justify;
                                }
                            </style>

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