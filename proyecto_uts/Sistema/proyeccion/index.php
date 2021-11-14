<?php
require 'proceso.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   
    <title>CRUD PROYECCIÓN</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>

<body>
    <!--Bienvenida. Indica el username del admin en la cabezera de la página. Siempre y
    cuando se haya loggeado-->
    <div class="bienvenida" style="margin:-25px">
        <?php
        require("../../php-login/index.php");
        ?>
    </div>

    <a href="../../adminPage.php">
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
                                <input type="text" class="form-control <?php echo (isset($error['Texto'])) ? "is-invalid" : ""; ?>" name="txtTexto" value="<?php echo $txtTexto; ?>" placeholder="" id="txt2" require="">
                                <div class="invalid-feedback">
                                    <?php echo (isset($error['Texto'])) ? $error['Texto'] : ""; ?>
                                </div>
                                <br>

                                <label for="">Foto:</label>
                                <?php if ($txtFoto != "") { ?>
                                    <img class="img-thumbnail rounded mx-auto d-block" width="100px" src="../Imagenes/<?php echo $txtFoto; ?>" /><br>
                                    <br>
                                <?php } ?>
                                <input type="file" class="form-control" accept="image/*" name="txtFoto" value="<?php echo $txtFoto; ?>" placeholder="" id="txt3" require="">
                                
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
                        <td><img class="img-thumbnail" width="100%" src="../Imagenes/<?php echo $project['Foto']; ?>" /></td>
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