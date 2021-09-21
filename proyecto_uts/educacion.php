<!DOCTYPE html>
<html lang="es">

<head>
    <title>Extension UTS - Educacion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style_education.css">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</head>

<body>
    <div class="contenedor-padre-educacion">
        <!-- ================================================================ SECCIÓN MENÚ ====================================================================== -->
        <header class="header">
            <?php
            include("headerMenu.php")
            ?>
        </header>
        <!-- ================================================================ SECCIÓN OPCIONES EDUCACIÓN ====================================================================== -->
        <div class="educacion-menu">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-presentacion-tab" data-toggle="tab" href="#nav-presentacion" role="tab" aria-controls="nav-presentacion" aria-selected="true">Presentación</a>
                    <a class="nav-item nav-link" id="nav-educacion-tab" data-toggle="tab" href="#nav-educacion" role="tab" aria-controls="nav-educacion" aria-selected="false">Educación TIC</a>
                    <a class="nav-item nav-link" id="nav-cursos-tab" data-toggle="tab" href="#nav-cursos" role="tab" aria-controls="nav-cursos" aria-selected="false">Cursos corporativos</a>
                    <a class="nav-item nav-link" id="nav-programas-tab" data-toggle="tab" href="#nav-programas" role="tab" aria-controls="nav-programas" aria-selected="false">Programas</a>
                    <a class="nav-item nav-link" id="nav-basics-tab" data-toggle="tab" href="#nav-basics" role="tab" aria-controls="nav-basics" aria-selected="false">UTS - Basics</a>
                    <a class="nav-item nav-link" id="nav-contacto-tab" data-toggle="tab" href="#nav-contacto" role="tab" aria-controls="nav-contacto" aria-selected="false">Contacto</a>

                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <!-- ================================================================= PRIMER PESTAÑA ================================================================================= -->

                <div class="tab-pane fade show active" id="nav-presentacion" role="tabpanel" aria-labelledby="nav-presentacion-tab" style="width:100%;">

                    <div class="contenedor-dad-carrusel">
                        <section id="slider" class="contenedor-slider section2">
                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                </ol>

                                <div class="carousel-inner">

                                    <div class="carousel-item active">
                                        <img src="img/fondo1_carrusel.png" class="d-block w-100 img1" height="700px">
                                        <div class="carousel-caption d-md-block">
                                            <div class="slider_1">
                                                <h1 class="slider_1_h1">
                                                    <b>UNIDAD DE EDUCACIÓN CONTINUA</b>
                                                    <br><br>
                                                    Es el área encargada de diseñar y desarrollar la oferta de capacitación con el propósito de actualizar, profundizar, y mejorar los conocimientos adquiridos en los procesos formativos de las
                                                    diferentes comunidades y en los diferentes sectores económicos. 
                                                </h1>
                                                <img class="imagen-slider-ejecutivos" src="img/ejecutivos.png" style="border-radius:120px;" height="420px">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="img/programas.jpg" class="d-block w-100 img1" height="700px">
                                        <div class="carousel-caption d-md-block">
                                            <div class="contacto-educacion">
                                                <h1 class="h1-educacion" style="color:green;"> INFORMACIÓN </h1>
                                                <br>
                                                <h2 class="h2-educacion"><b> Teléfono:</b> 7-6917700 Extensiones: 1224 – 1225</h2>
                                                <h2 class="h2-educacion"><b> E-mail:</b> educacioncontinua@correo.uts.edu.co</h2>
                                                <h2 class="h2-educacion"><b> Fan Page:</b><a class="contacto-educacion-href" style=" text-decoration: none;" href="https://www.facebook.com/GRADUADOSUTSOFICIAL/?fref=ts"><span> Educación Continua</span></a></h2>

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

                    <div style="color:black;">
                        <br>
                        <h1 style="text-align:center;">OBJETIVOS</h1>
                        <hr style="border: 1px dashed green;">
                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <i id="icono-1-objetivo" class="fas fa-chalkboard-teacher fa-3x" style="color: #2471A3; background:black; border-radius:100px; padding:20px; width:8%;"></i>
                            <h2 class="objetivo-1" style="padding:11px; margin-left:20px; text-align: center; box-shadow: 0px 10px 48px #888888;">Oferta de cursos, seminarios, talleres, diplomados desde todos los programas académicos.</h2>
                        </div>
                        <br>
                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <i id="icono-2-objetivo" class="fas fa-flask fa-3x" style="color: #2471A3; background:black; border-radius:100px; padding:20px; width:8%;"></i>
                            <h2 class="objetivo-2" style="padding:11px; margin-left:20px; text-align: center; box-shadow: 0px 10px 48px #888888;">Contribuir a la actualización científica, técnica y humanística de los profesionales, líderes y de la comunidad en general.</h2>
                        </div>
                        <br>
                        <div style=" display:flex; align-items:center;">
                            <i id="icono-3-objetivo" class="fas fa-brain fa-3x" style="color: #2471A3; background:black; border-radius:100px; padding:20px; width:7%;"></i>
                            <h2 class="objetivo-3" style="padding:11px; margin-left:20px; text-align: center; box-shadow: 0px 10px 48px #888888;">Promover para toda la comunidad el desarrollo de conocimientos y destrezas específicas.</h2>
                        </div>

                        <br>
                    </div>

                    <div style="background:black; color:white; text-align:center;">
                        <br>
                        <h1>Programas de Educación Continua</h1>
                        <hr style="border: 2px dashed green;">
                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                            <h2 style="padding:0px 30px;">Congresos, Encuentros, Talleres, Simposios, Conferencias y Foros</h2>
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                        </div>
                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                            <h2 style="padding:0px 30px;">Cursos</h2>
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                        </div>
                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                            <h2 style="padding:0px 30px;">Diplomados</h2>
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                        </div>
                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                            <h2 style="padding:0px 30px;">Seminarios</h2>
                            <i class="fas fa-ellipsis-h fa-3x" style="color: green;"></i>
                        </div>
                        <br>
                    </div>

                </div>

                <!-- ================================================================= SEGUNDA PESTAÑA ================================================================================= -->

                <div class="tab-pane fade" id="nav-educacion" role="tabpanel" aria-labelledby="nav-educacion-tab" style="text-align:center; width:100%;">

                    <img src="img/5cursos.PNG" width=100%;>

                    <div class="contain">

                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <img class="pest2_1img" src="img/image-curso.png" width=350px; style="padding:30px;">
                            <h2 class="pest2_1texto" style="text-align: justify; color:black; padding:30px;"><b>Las Unidades Tecnológicas de Santander</b> en alianza con <b> Professional Board Group</b> informan a los estudiantes, docentes y graduados, que están abiertas las inscripciones para formarse con el <b>“PAQUETE DE 5 CURSOS EDUCACIÓN TIC”.</b>
                                <br><br>¡Aproveche esta oportunidad y acceda a la formación de manera gratuita y pague sólo por la certificación!
                            </h2>
                        </div>

                        <div style=" display:flex; justify-content:center; align-items:center;">
                            <h2 class="pest2_2texto" style="text-align: justify; color:black; padding:30px;">
                                <b>Generalidades de los cursos</b><br>
                                <br>
                                <b>Modalidad: </b>Online (encuentros virtuales con expertos).<br>
                                <b>Certifica:</b> UTS (Opción de certificación internacional ICDL).<br>
                                <b>Descripción del curso: </b> El curso está dirigido a docentes, estudiantes y graduados en cualquier área de la educación, que en su horizonte profesional esté el máximo aprovechamiento de las TIC en procesos de formación y quieran transformar su práctica pedagógica.
                            </h2>
                            <img class="pest2_2img" src="img/image-curso2.png" style="padding:30px;">
                        </div>

                        <div style="display:flex; flex-direction:row; justify-content:center; padding: 20px;">
                            <!-- ======================================= 1 CURSO =======================================-->
                            <div id="curso_1" class="card">
                                <div class=" card-body">
                                    <p class="card-text"><b>Curso: Introducción y conceptualización</b></p>
                                </div>
                                <img src="img/curso-1.PNG" class="card-img-top" alt="...">
                            </div>
                            <!-- ======================================= 2 CURSO =======================================-->
                            <div id="curso_2" class="card">
                                <div class="card-body">
                                    <p class="card-text"><b>Curso: Seguridad de la información</b></p>
                                </div>
                                <img src="img/curso-2.PNG" class="card-img-top" alt="...">
                            </div>
                            <!-- ======================================= 3 CURSO =======================================-->
                            <div id="curso_3" class="card">
                                <div class="card-body">
                                    <p class="card-text"><b>Curso: Ambientes virtuales de aprendizaje AVA</b></p>
                                </div>
                                <img src="img/curso-3.PNG" class="card-img-top" alt="...">
                            </div>
                        </div>

                        <div style="display:flex; flex-direction:row; justify-content:center; padding: 20px;">
                            <!-- ======================================= 4 CURSO =======================================-->

                            <div id="curso_4" class="card">
                                <div class="card-body">
                                    <p class="card-text"><b>Curso: Interacción y tecnologías digitales</b></p>
                                </div>
                                <img src="img/curso-4.PNG" class="card-img-top" alt="...">
                            </div>
                            <!-- ======================================= 5 CURSO =======================================-->
                            <div id="curso_5" class="card">
                                <div class="card-body">
                                    <p class="card-text"><b>Curso: Creación de contenidos digitales</b></p>
                                </div>
                                <img src="img/curso-5.PNG" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <br>
                        <a href="https://uts.tuaula.co/site/tic-para-docentes/" class="myButton" style="margin:20px;" target="_blank">¡Inscríbase ahora!</a>
                        <style>

                        </style>
                        <hr>
                    </div>
                    <style>
                        .contain {
                            background: url("img/fondobig.jpg")
                        }
                    </style>
                </div>

                <!-- ================================================================= TERCERA PESTAÑA ================================================================================= -->

                <div class="tab-pane fade" id="nav-cursos" role="tabpanel" aria-labelledby="nav-cursos-tab" style="text-align:center; width:100%;">

                    <img src="img/cursos-corporativos.png" width=100%;>

                    <div id="fondo3pestan">

                        <h2 id="pest3_1sec"><b>Las Unidades Tecnológicas de Santander</b> en alianza con <b>Professional Board Group</b> informan a toda la comunidad, que están abiertas las inscripciones para los cursos virtuales de:
                            <br>
                            <div id="pest3_1sec_cursos">
                                <i class="fas fa-hand-point-right"></i> LinkedIn<br>
                                <i class="fas fa-hand-point-right"></i> Aprende a Navegar por Internet<br>
                                <i class="fas fa-hand-point-right"></i> Marketing Digital <br>
                                <i class="fas fa-hand-point-right"></i> Herramientas para el Trabajo Colaborativo <br>
                                <i class="fas fa-hand-point-right"></i> Seguridad Digital <br>
                            </div>
                        </h2>
                    </div>

                    <div id="contain-cursos1">
                        <!-- ========================================================== CURSO LINKEDIN ====================================================================-->
                        <div id="curso-corporativo1" class="card">
                            <img class="card-img-top" src="img/curso-linkedin.PNG" alt="Card image cap" height="350px">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:justify;">Aprende cómo posicionar su empresa y encontrar contactos clave y oportunidades de negocio a través de una red social profesional, a ser parte de este curso que incluye acceso a la plataforma durante 6 meses, acompañamiento permanente para la solución de dudas, acceso a webinars, espacios de networking y certificación.</h5>
                                <p class="card-text" style="text-align:left;">
                                    <i class="fas fa-adjust"></i> Duración: 20 horas. <br>
                                    <i class="fas fa-adjust"></i> Modalidad: Online.<br>
                                    <i class="fas fa-adjust"></i> Certifica: UTS (opción de certificación internacional ICDL).<br>
                                    <i class="fas fa-adjust"></i> Inversión: $89.000 / 50 % de descuento para comunidad UTS.<br>
                                </p>
                                <a href="https://uts.tuaula.co/site/linkedin/" target=”_blank” class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                        <!-- ========================================================== CURSO NAVEGAR POR INTERNET ====================================================================-->
                        <div id="curso-corporativo2" class="card">
                            <img class="card-img-top" src="img/curso-navegar.PNG" alt="Card image cap" height="350px">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:justify;">Cree y mantenga su identidad digital, sacándole el mayor provecho de las herramientas de navegación y productividad online, para lograr excelentes resultados en su vida y trabajo con el curso “Aprende a navegar por internet” ofertado por las Unidades Tecnológicas de Santander en alianza con Professional Board Group.</h5>
                                <p class="card-text" style="text-align:left;">
                                    <i class="fas fa-adjust"></i> Duración: 20 horas. <br>
                                    <i class="fas fa-adjust"></i> Modalidad: Online.<br>
                                    <i class="fas fa-adjust"></i> Certifica: UTS (opción de certificación internacional ICDL).<br>
                                    <i class="fas fa-adjust"></i> Inversión: $89.000 / 50 % de descuento para comunidad UTS.<br>
                                </p>
                                <a href="https://uts.tuaula.co/site/aprende-a-navegar-por-internet/" target=”_blank” class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                        <!-- ========================================================== CURSO MARKETING DIGITAL ====================================================================-->
                        <div id="curso-corporativo3" class="card">
                            <img class="card-img-top" src="img/curso-marketing.PNG" alt="Card image cap" height="350px">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:justify;">En mundo avanza constantemente y con éste la importancia del uso de las plataformas digitales. Qué mejor que el Marketing Digital para impulsar ese nuevo emprendimiento, la marca personal o llegar a un nivel aún más alto.</h5>
                                <p class="card-text" style="text-align:left;">
                                    <br>
                                    <i class="fas fa-adjust"></i> Duración: 20 horas. <br>
                                    <i class="fas fa-adjust"></i> Modalidad: Online.<br>
                                    <i class="fas fa-adjust"></i> Certifica: UTS (opción de certificación internacional ICDL).<br>
                                    <i class="fas fa-adjust"></i> Inversión: $89.000 / 50 % de descuento para comunidad UTS.<br>
                                </p>
                                <br><br>
                                <a href="https://uts.tuaula.co/site/marketing-digital/" target=”_blank” class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                    </div>
                    <div id="contain-cursos2">
                        <!-- ========================================================== CURSO TRABAJO COLABORATIVO ====================================================================-->
                        <div id="curso-corporativo4" class="card">
                            <img class="card-img-top" src="img/curso-colaborativo.PNG" alt="Card image cap" height="350px">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:justify;">En este curso se desarrollarán los conceptos de colaboración en línea, procesos claves para trabajar en un entorno colaborativo y la utilización de herramientas y aplicaciones que conlleven a la mejora y el fortalecimiento de la innovación, productividad y rentabilidad empresarial.</h5>
                                <p class="card-text" style="text-align:left;">
                                    <i class="fas fa-adjust"></i> Duración: 20 horas. <br>
                                    <i class="fas fa-adjust"></i> Modalidad: Online.<br>
                                    <i class="fas fa-adjust"></i> Certifica: UTS (opción de certificación internacional ICDL).<br>
                                    <i class="fas fa-adjust"></i> Inversión: $89.000 / 50 % de descuento para comunidad UTS.<br>
                                </p>
                                <a href="https://uts.tuaula.co/site/herramientas-para-el-trabajo-colaborativo/" target=”_blank” class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                        <!-- ========================================================== CURSO SEGURIDAD DIGITAL ====================================================================-->
                        <div id="curso-corporativo5" class="card">
                            <img class="card-img-top" src="img/curso-seguridad.PNG" alt="Card image cap" height="350px">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:justify;">Aprenda a navegar por internet de forma segura, proteger sus dispositivos móviles de las redes de ciberdelincuentes, virus, intentos de robo, entre otros. Además, al terminar el curso se estará en capacidad de crear y restaurar copias de seguridad y datos de manera apropiada y segura.</h5>
                                <p class="card-text" style="text-align:left;">
                                    <i class="fas fa-adjust"></i> Duración: 20 horas. <br>
                                    <i class="fas fa-adjust"></i> Modalidad: Online.<br>
                                    <i class="fas fa-adjust"></i> Certifica: UTS (opción de certificación internacional ICDL).<br>
                                    <i class="fas fa-adjust"></i> Inversión: $89.000 / 50 % de descuento para comunidad UTS.<br>
                                </p>
                                <a href="https://uts.tuaula.co/site/seguridad-digital/" target=”_blank” class="btn btn-primary">Más información</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ================================================================= CUARTA PESTAÑA ================================================================================= -->

                <div class="tab-pane fade" id="nav-programas" role="tabpanel" aria-labelledby="nav-programas-tab" style="text-align:center; width:100%;">
                    <div class="contenedor-programas" style="display:flex; flex-direction:column;">
                        <div style="display:flex; flex-direction:row; margin:10px;">
                            <div style="margin:13px; padding-top:20px;">
                                <div>Webinar</div>
                                <a href="#"><button type="button" class="btn btn-primary">Acceder</button></a>
                            </div>
                            <div style="margin:13px; padding-top:20px;">
                                <div>Diplomados</div>
                                <a href="#"><button type="button" class="btn btn-primary">Acceder</button></a>
                            </div>
                            <div style="margin:13px; padding-top:20px;">
                                <div>Cursos</div>
                                <a href="#"><button type="button" class="btn btn-primary">Acceder</button></a>
                            </div>
                        </div>

                        <div>
                            <div style="margin:20px;">
                                <div>Podcast-Extiéndete</div>
                                <a href="#"><button type="button" class="btn btn-primary">Acceder</button></a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ================================================================= QUINTA PESTAÑA ============================================================================== -->

                <div class="tab-pane fade" id="nav-basics" role="tabpanel" aria-labelledby="nav-basics-tab">
                    <video width="100%" controls>
                        <source src="img/Video-Uts-Y-Basics-1.mp4" type="video/mp4">
                    </video>

                    <h1 id="fondo-basic">
                        <style>
                            #fondo-basic {
                                background: url("img/fondo-basic.jpg");
                                background-size: cover;
                            }
                        </style>
                        Las Unidades Tecnológicas de Santander en alianza con Basics traen para ti la primera Metodología Online que te enseña a buscar práctica empresarial o empleo. No importa si eres estudiante, si eres un profesional junior o si eres un profesional experimentado, Basics te puede ayudar con ese gran reto que se llama: conseguir empleo / práctica.
                    </h1>

                    <div style="text-align: justify;display:flex; flex-direction:row; justify-content:center; padding: 8px;">

                        <div id="fondo-info1" style="width:50%; padding: 20px;">
                            <h1 id="fondo-info1-h1-title"><b>Aprende a buscar empleo o práctica con el método Basics y sus tres estrategias: </b></h1>
                            <h1 id="fondo-info1-h1"><b><i class="far fa-check-circle"></i> Estrategia triángulo: Aprende a salir del montón</b><br>
                                Buscar empleo o práctica es sinónimo de saberse vender. En esta estrategia te enseñaremos a armar una propuesta de valor ganadora que te ayude a destacar frente a otros.</h1>
                            <h1 id="fondo-info1-h12"><b><i class="far fa-check-circle"></i> Estrategia Círculo: Aprende a ponerte en el radar de los reclutadores</b><br>
                                Una vez que te sepas vender y tengas tus herramientas de venta listas, el siguiente paso es aprender a ponerse en el radar de los reclutadores. Ayúdale a las empresas a saber que tú estás ahí.</h1>
                            <h1 id="fondo-info1-h13"><b><i class="far fa-check-circle"></i> Estrategia Cuadrado: Aprende a estar en el control de la situación</b><br>
                                En esta última estrategia te enseñamos a estar en control emocional y te protegemos de tu peor enemigo: tú mismo. No permitas que el estrés, la ansiedad y otras sensaciones negativas afecten tu productividad para buscar trabajo/práctica.</h1>
                        </div>

                        <div id="fondo-info2" style="width:50%;padding: 20px;">
                            <h1 class="fondo-info2-h1-title"><b>¿Deseas saber más?</b>
                                <h1 class="#fondo-info2-h1" style="font-size: 20px;">Si deseas conocer un poco más sobre la Metodología Basics<br>
                                    <b>Página web: </b><a href="https://basics.com.co/" target="_blank">www.basics.com.co</a> <br>
                                    Mira el <a href="https://www.youtube.com/watch?v=P9FiaInMAWE&t=1s" target="_blank">video corporativo</a>
                                </h1>
                                <br>
                                <h1 class="fondo-info2-h1-title">
                                    <b>Beneficios</b> <br>
                                    Gracias al convenio con Basics, todos los estudiantes y egresados de las Unidades Tecnológicas de Santander tienen un descuento de -40% en los Planes PRO de 1 mes, y -50% en los planes PRO de 2 meses.
                                </h1>
                                <br>
                                <h1 class="fondo-info2-h1-title">
                                    <b>¿Qué hacer si estás interesado?</b><br>
                                    Escríbenos a <b>extension@correo.uts.edu.co</b> o <b>info@basics.com.co</b><br>
                                    En respuesta a tu e-mail, te comunicaremos el cupón de descuento que podrás utilizar para adquirir tu Plan a través de
                                    <a href="https://basics.com.co/" target="_blank">www.basics.com.co</a> <br>
                                </h1>
                                <br>

                                <style>
                                    #fondo-info1 {
                                        background: url("img/fondo-info2.jpg");
                                        background-size: cover;
                                    }

                                    #fondo-info2 {
                                        background: url("img/fondo-info2.jpg");
                                        background-size: cover;
                                    }
                                </style>
                        </div>

                    </div>
                    <hr style="border: 2px dashed green;">
                </div>

                <!-- ================================================================= SEXTA PESTAÑA ================================================================================= -->

                <div class="tab-pane fade" id="nav-contacto" role="tabpanel" aria-labelledby="nav-contacto-tab">
                    <div id="fondo-imagen-contacto" class="container" style="padding:30px;">
                        <style>
                            #fondo-imagen-contacto {
                                background: url("img/fondo-contacto.jpg");
                                background-size: cover;
                            }
                        </style>
                        <?php

                        //trae los parametros POST definidosÑ $res = $student->insertar_client( $_POST['name'],$_POST['email'],$_POST['phone']...etc
                        //para evitar extender más el código y hacerlo más legible
                        include("conexion_contact_center/receive_data.php"); //=>Recibe los argumentos y son enviados a conexion_contac_center
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="well well-sm">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <h1 class="text-center"><u>CONTACT CENTER <b style="color:#96B933;">UTS</b></u></h1><br>
                                            <h2 class="text-center">Deja tus datos en el siguiente formulario y te contactamos:</h2><br>

                                            <div class="form-group" style="display:flex; justify-content:center; align-items:center;">
                                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon fa-3x"></i></span>
                                                <div class="col-md-9">
                                                    <b>Nombre: </b><input id="name" name="name" type="text" placeholder="Digitar nombre completo" required class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group" style="display:flex; justify-content:center; align-items:center;">
                                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-envelope bigicon fa-3x"></i></span>
                                                <div class="col-md-9">
                                                    <b> Email:</b><input id="email" name="email" type="text" placeholder="Digitar correo electrónico" required class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group" style="display:flex; justify-content:center; align-items:center;">
                                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon fa-3x"></i></span>
                                                <div class="col-md-9">
                                                    <b> Teléfono:</b><input id="phone" name="phone" type="text" placeholder="Digitar teléfono/celular" required class="form-control">
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-md-12 text-center">
                                                    <button type="submit" class="btn btn-primary btn-lg" style="box-shadow: 0px 10px 10px black;color:black;padding:11px 35px; font-size:24px;"><b>Enviar</b></button>
                                                </div>
                                            </div>
                                            <style>
                                                .bigicon {
                                                    font-size: 35px;
                                                    color: #36A0FF;
                                                }
                                            </style>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ================================================================ SECCIÓN FOOTER ====================================================================== -->

        <footer class="footer">
            <?php
            require("footerDone.php")
            ?>

        </footer>
    </div>
</body>

</html>