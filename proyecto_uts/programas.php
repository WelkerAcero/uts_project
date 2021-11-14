<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_programas.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Programas</title>
</head>

<body>

    <div class="contenedor">
        <header class="header">
            <?php require "headerMenu.php";?>
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
        </div>

        <div class="programas">
            <h1 style="margin-bottom:-10px; text-align:center;">
                Lista de programas
            </h1>
            <div style="margin-top:20px;">
                <table class="table vertical-align: middle table-responsive">
                    <thead>
                        <tr>
                            <th>Programa 1</th>
                            <th>Programa 2</th>
                        </tr>
                    </thead>

                    <tbody class="">
                        <td>Texto programa 1</td>
                        <td>Texto programa 2</td>
                    </tbody>
                </table>
            </div>
            
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

        <aside class="sidebar">
            <h1>Sidebar</h1>
            <img src="img/5cursos.PNG" width="300px" height="300px" alt="">
        </aside>

        <div class="imagen_1">
            <h1>Imagen 1</h1>
        </div>

        <div class="imagen_2">
            <h1>Imagen 2</h1>
        </div>


        <footer class="footer">
            <?php require "footerDone.php";?>
        </footer>

    </div>

</body>

</html>