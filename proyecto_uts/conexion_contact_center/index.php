<div style="margin-top:-55px">
    <?php
    require("../php-login/index.php");
    ?>
</div>
<?php

unset($_SESSION['consulta']);

?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Listado de contactos</title>
    <link rel="stylesheet" type="text/css" href="../librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="../librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="../librerias/select2/css/select2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <script src="../librerias/jquery-3.6.0.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="../librerias/bootstrap/js/bootstrap.js"></script>
    <script src="../librerias/alertifyjs/alertify.js"></script>
    <script src="../librerias/select2/js/select2.js"></script>

</head>

<body style="font-size:15px">

    <figure class="imagenlogo">
        <img src="../img/uts.png" width="220px" height="170px" style="margin-top: 20px; margin-left:80px; margin-bottom:-110px;">
    </figure>

    <article class="accesos" style="margin-left:1155px; margin-top:20px;">

        <a class="btn btn-success" style="font-size:15px;" href="../adminPage.php">
            Ir átras
            <a>
    </article>

    <div class="container">

        <div id="buscador"></div>

        <div id="tabla" style="margin-top:0px"></div>

    </div>

    <!-- Modal para registros nuevos -->

    <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agrega nuevo contacto</h4>
                </div>
                <div class="modal-body">
                    <label>Nombre</label>
                    <input type="text" name="" id="contact_name" class="form-control input-sm">
                    <label>Email</label>
                    <input type="text" name="" id="contact_email" class="form-control input-sm">
                    <label>Celular</label>
                    <input type="number" name="" id="contact_cellphone" class="form-control input-sm">
                    <label>Fecha</label>
                    <input type="text" id="recorded_date" value="<?= date('Y-m-d') ?>" readonly class="form-control input-sm">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
                        Agregar
                    </button>

                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Modal para edicion de datos -->

    <div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
                </div>
                <div class="modal-body">
                    <input type="text" hidden="" id="idpersona" name="">
                    <label>Nombre</label>
                    <input type="text" name="" id="contact_nameUpdate" class="form-control input-sm">
                    <label>Email</label>
                    <input type="text" name="" id="contact_emailUpdate" class="form-control input-sm">
                    <label>Celular</label>
                    <input type="number" name="" id="contact_cellphoneUpdate" class="form-control input-sm">
                    <label>Fecha</label>
                    <input type="text" id="recorded_dateUpdate" value="<?= date('Y-m-d'); ?>" readonly class="form-control input-sm">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
                </div>

            </div>
        </div>
    </div>

</body>

</html>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla').load('componentes/tabla.php');
        $('#buscador').load('componentes/buscador.php');
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#guardarnuevo').click(function() {
            contact_name = $('#contact_name').val();
            contact_email = $('#contact_email').val();
            contact_cellphone = $('#contact_cellphone').val();
            recorded_date = $('#recorded_date').val();
            agregardatos(contact_name, contact_email, contact_cellphone, recorded_date);
        });



        $('#actualizadatos').click(function() {
            actualizaDatos();
        });

    });
</script>