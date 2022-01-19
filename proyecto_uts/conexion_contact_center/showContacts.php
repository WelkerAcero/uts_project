<?php
require_once("../Controllers/contact_centerControllers.php");
?>

<div class="row">
    <div class="col-sm-12">
        <h2 style="font-size:22px;">Lista de Contact Center</h2>
        <table class="table table-hover table-condensed table-bordered">
            <caption>
                <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                    Agregar nuevo
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </caption>
            <thead>
                <tr>
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>NOMBRE</b></td>
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>EMAIL</b></td>
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>CELULAR</b></td>
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>FECHA DEL REGISTRO</b></td>
                    
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>EDITAR</b></td>
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>ELIMINAR</b></td>
                </tr>
            </thead>
            <tbody>
                <?php

                if (isset($_SESSION['consulta'])) {
                    if ($_SESSION['consulta'] > 0) {
                        $idp = $_SESSION['consulta'];
                        $sql = "SELECT * FROM contact_center WHERE contact_id='$idp'";
                    } else {
                        $sql = "SELECT * FROM contact_center";
                    }
                } else {
                    $sql = "SELECT * FROM contact_center";
                }

                //se crea una instancia
                $student = new ContactCenterController();
                //se llama a la función localizada en el controller read() y se guardar en la varibale
                $listado = $student->read();

                //se realiza el while y se recorren los registros y se guarda en $value
                foreach($listado as $value){

                ?>
                    <!--se IMPRIME LAS FILAS Y COLUMNAAS CON LOS DATOS DE LA CONSULTA-->
                    <tr>
                        <td style="text-align: center;"><?= $value["contact_name"]; ?></td>
                        <td style="text-align: center;"><?= $value["contact_email"]; ?></td>
                        <td style="text-align: center;"><?= $value["contact_cellphone"]; ?></td>
                        <td style="text-align: center;"><?= $value["recorded_date"]; ?></td>
                        <td>
                            <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?= $datos ?>')">

                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?= $value['contact_id'] ?>')">
                            </button>
                        </td>
                    </tr>
                <?php
                } //cierre del ciclo while
                ?>
            </tbody>
        </table>
    </div>
</div>
