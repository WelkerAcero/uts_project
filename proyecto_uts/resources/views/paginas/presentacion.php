<!DOCTYPE html>
<html lang="es">

<head>
  <?php //include('../layouts/plantilla.php');?>
  <link rel="stylesheet" href="../../css/style_presentacion.css">
  <?php require("../layouts/plantillaLibrerias.php")?>
</head>

<body>
  <div class="contenedor_padre_presentacion">

    <!-- ================================================================ SECCIÓN MENÚ ====================================================================== -->
    <header class="header_presentacion">
      <?php
      require("../layouts/headerMenu.php");
      ?>
    </header>
    <!-- ================================================================ SECCIÓN CARRUSEL ====================================================================== -->
    <div class="carrusel">
      <div class="imagen-titulo-carrusel">
        <h1 style="font-size:50px;"><b>EXTENSIÓN</b></h1>
      </div>

      <?php
      require("../layouts/carrusel_presentacion.php")
      ?>
      <br>
    </div>
    <!-- ================================================================ SECCIÓN POLITICAS ====================================================================== -->
    <div class="politicas">
      <div style="display:flex; text-align:center; justify-content: space-evenly; border-style: dashed; padding:15px;">
            
        <div>
          <a style="text-decoration: none; color:black; font-size: 25px;" href="politicas/Politica_de_Extension.pdf" target="_blank">
            <span>
              <i class="far fa-file-pdf" style="color:red; font-size: 60px;">
              </i><br>
              Política de Extensión</span>
          </a>
        </div>

        <div>
          <a style="text-decoration: none; color:black; font-size: 25px;" href="politicas/PoliticaGraduados.pdf" target="_blank">
            <span>
              <i class="far fa-file-pdf" style="color:red; font-size: 60px;">
              </i><br>
              Política de Graduados</span>
          </a>
        </div>
      </div>
    </div>
    <!-- ================================================================ SECCIÓN OPCIONES EXTENSIÓN ====================================================================== -->
    <div class="desplegable_educacion">
      <div class="card" style="width: 18rem; box-shadow: 5px 10px 18px #888888;">
        <img class="card-img-top" src="../../img/estudiante.png" height="280px" alt="Card image cap">
        <div class="card-body">
          <button id="primerBoton" type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Es el área encargada de diseñar y desarrollar la oferta de capacitación con el propósito de actualizar, profundizar, y mejorar los conocimientos adquiridos en los procesos formativos de las diferentes comunidades y en los diferentes sectores económicos. Para validar la calidad de esta oferta la Unidad de Educación Continua se apoya en las dos decanaturas las cuales recogen multidisciplinariamente los distintos campos del saber (Socioeconómico y Empresariales y de las Ciencias Naturales e Ingenierías).">
            Educación continua <b>+</b></button>
        </div>
      </div>
    </div>

    <div class="desplegable_proyeccion">
      <div class="card" style="width: 18rem; box-shadow: 5px 10px 18px #888888;">
        <img class="card-img-top" src="../../img/proyeccion.jpg" height="280px" alt="Card image cap">
        <div class="card-body">
          <button id="segundoBoton" type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Esta área está encargada de ejecutar proyectos sociales que contribuyan a la solución de necesidades del 
          entorno mediante la interacción con la comunidad promoviendo, regulando y orientando estratégicamente la prestación de 
          servicios sociales de carácter comunitario que ofrece la institución, desde sus programas académicos, facultades, departamentos 
          y dependencias, en concordancia con los ámbitos de acción de las Unidades Tecnológicas de Santander.">
            Proyeccion social <b>+</b></button>
        </div>
      </div>
    </div>

    <div class="desplegable_emprendimiento">
      <div class="card" style="width: 18rem; box-shadow: 5px 10px 18px #888888;">
        <img class="card-img-top" src="../../img/emprendimiento.png" height="280px" alt="Card image cap">
        <div class="card-body">
          <button id="tercerBoton" type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="Esta área promueve la actitud emprendedora, mentalidad y cultural, mediante la unidad de emprendimiento y autogestión,
            coherente con la dinámica de la economía y la innovación social, impactando a la comunidad de la institución y sus aliados.">
            Área de emprendimiento <b>+</b></button>
        </div>
      </div>
    </div>

    <div class="desplegable_graduados">
      <div class="card" style="width: 18rem; box-shadow: 5px 10px 18px #888888;">
        <img class="card-img-top" src="../../img/graduado.png" height="280px" alt="Card image cap">
        <div class="card-body">
          <button id="cuartoBoton" type="button" class="btn btn-info" data-container="body" data-toggle="popover" data-placement="top" data-content="El objeto de esta área es facilitar la comunicación con los egresados – graduados y no graduados; con el fin de conocer
           su actual estado académico y profesional a través de estudios de seguimiento y estudios de impacto, encuentros virtuales y presenciales.">
            Área de graduados <b>+</b></button>
        </div>
      </div>
    </div>
    <!-- ================================================================ SECCIÓN FOOTER ====================================================================== -->

    <footer class="footer_presentacion">

      <?php
      require("../layouts/footerDone.php");
      ?>

    </footer>

  </div>

</body>

</html>