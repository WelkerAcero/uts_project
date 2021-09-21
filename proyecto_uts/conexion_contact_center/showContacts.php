<?php
include('conexion.php');
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
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>Email</b></td>
                    <td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>CELULAR</b></td>

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
                $student = new conexion();
                //se llama a la función leer_proveedor() y se guardar en la varibale
                $listado = $student->leer_contact();

                //se realiza el while y se recorren los registros y se guarda en $row
                while ($ver = mysqli_fetch_row($listado)) {
                    //se descomponen los campos de la tabla y se guanda en variables
                    $datos = $ver[0] . "||" . $ver[1] . "||" . $ver[2] . "||" . $ver[3];

                ?>
                    <!--se IMPRIME LAS FILAS Y COLUMNAAS CON LOS DATOS DE LA CONSULTA-->
                    <tr>
                        <td><?php echo $ver[1]; ?></td>
                        <td><?php echo $ver[2]; ?></td>
                        <td><?php echo $ver[3]; ?></td>
                        <td>
                            <button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">

                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
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