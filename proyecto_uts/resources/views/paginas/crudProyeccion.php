<?php
require_once('../../../Sistema/proyeccion/proceso.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD PROYECCIÓN</title>
    <?php include('../layouts/plantilla.php'); ?>
</head>

<body>
    <!--Bienvenida. Indica el username del admin en la cabezera de la página. Siempre y
    cuando se haya loggeado-->
    <div class="bienvenida" style="margin:-25px">
        <?php
        include_once("../../../php-login/index.php");
        ?>
    </div>

    <a href="adminPage.php">
        <i class="far fa-arrow-alt-circle-left fa-5x" style="color:yellow; margin-top:-100px; color:white; margin-left: 30px;">
        </i>
    </a>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Información</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <input type="hidden" required name="txtID" value="<?php echo $txtID; ?>" placeholder="" id="txt1" require="">
                                <label for="">Texto:</label>
                                <input type="text" class="form-control <?php echo (isset($error['Texto'])) ? "is-invalid" : ""; ?>" name="txtTexto" value="<?=$txtTexto; ?>" placeholder="" id="txt2" require="">
                                <div class="invalid-feedback">
                                    <?php echo (isset($error['Texto'])) ? $error['Texto'] : ""; ?>
                                </div>
                                <br>

                                <label for="">Foto:</label>
                                <?php if ($txtFoto != "") { ?>
                                    <img class="img-thumbnail rounded mx-auto d-block" width="100px" src="../../../Sistema/Imagenes/<?=$txtFoto;?>" /><br>
                                    <br>
                                <?php } ?>
                                <input type="file" class="form-control" accept="image/*" name="txtFoto" value="<?= $txtFoto; ?>" placeholder="" id="txt3" require="">
                                
                                <br>
                                <br>

                                <label for="date">Fecha de publicación:</label><br>
                                <input type="text" name="fecha" value="<?=date('Y-m-d');?>" readonly="readonly"><br>
                            
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button value="btnAgregar" <?php echo $accionAgregar; ?> class="btn btn-success" type="submit" name="accion">Agregar</button>
                            <button value="btnModificar" <?php echo $accionModificar; ?> class="btn btn-warning" type="submit" name="accion">Modificar</button>
                            <button value="btnEliminar" onclick="return Confirmar('¿Realmente deseas borrar?');" <?php echo $accionEliminar; ?> class="btn btn-danger" type="submit" name="accion">Eliminar</button>
                            <button value="btnCancelar" <?php echo $accionCancelar; ?> class="btn btn-primary" type="submit" name="accion">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Agregar registro +
            </button>
            <br><br>

        </form>

        <div class="row">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Foto</th>
                        <th>Texto</th>
                        <th>Fecha de publicación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <?php foreach ($listaproyeccion as $project) { ?>
                    <tr>
                        <td><img class="img-thumbnail" width="100%" src="../../../Sistema/imagenes/<?= $project['Foto']; ?>" /></td>
                        <td><?php echo $project['Texto']; ?></td>
                        <td><?php echo $project['Fecha'];?></td>
                        <td>
                            <form action="" method="post">

                                <input type="hidden" name="txtID" value="<?php echo $project['ID']; ?>">

                                <input type="submit" value="Seleccionar" class="btn btn-info" name="accion">
                        <td><button value="btnEliminar" onclick="return Confirmar('¿Realmente deseas borrar?');" type="submit" class="btn btn-danger" name="accion">Eliminar</button></td>
                        </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>

        </div>
        <?php if ($mostrarModal) { ?>
            <script>
                $('#exampleModal').modal('show');
            </script>
        <?php } ?>

        <script>
            function Confirmar(Mensaje) {
                return (confirm(Mensaje)) ? true : false;
            }
        </script>
    </div>

</body>

</html>