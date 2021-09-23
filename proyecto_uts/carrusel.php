<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carrusel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>Carousel</title>

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
                        <img src="img/img-proyeccion-1.png" class="d-block w-100 img1" height="350px">
                        <div id="size-carrusel1" class="carousel-caption d-md-block">
                            <div>
                                <h1 class="titulo">
                                    Capacitación a los tenderos de Bucaramanga y su área metropolitana en el conocimiento, manejo y aplicabilidad de instrumentos y herramientas fiscales, contables, tributarias, presupuestales y crediticias que les permitan garantizar su operatividad y afrontar con éxito los retos que imponen los elevados niveles de competencia que caracterizan a las economías contemporáneas. 127 Personas Beneficiadas.
                                </h1>
                            </div>

                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/img-proyeccion-2.png" class="d-block w-100 img1" height="350px">
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