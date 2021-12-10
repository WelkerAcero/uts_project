<?php
//print_r($_POST)
$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtTitulo = (isset($_POST['txtTitulo'])) ? $_POST['txtTitulo'] : "";
$txtDescripcion = (isset($_POST['txtDescripcion'])) ? $_POST['txtDescripcion'] : "";
$txtFoto = (isset($_FILES['txtFoto']["name"])) ? $_FILES['txtFoto']["name"] : "";
$txtDuracion = (isset($_POST['txtDuracion'])) ? $_POST['txtDuracion'] : "";
$txtFechaInicio = (isset($_POST['txtFechaInicio'])) ? $_POST['txtFechaInicio'] : "";
$txtObservaciones = (isset($_POST['txtObservaciones'])) ? $_POST['txtObservaciones'] : "";
$txtLink = (isset($_POST['txtLink'])) ? $_POST['txtLink'] : "";
$fecha_publicacion = (isset($_POST['fecha']))  ? $_POST['fecha'] : "";


$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

$error = array();

$accionAgregar = "";
$accionModificar = $accionEliminar = $accionCancelar = "disabled";
$mostrarModal = false;

include("../../../conexion/conexion.php");
$con = new Conexion();
$pdo = $con->conectarseMetodo_2(); //$pdo guarda la conexion. Luego $pdo procesa el metodo conectar 2
//$pdo es usado de ahora en adelante para sentencias prepareSQL

switch ($accion) {
    case "btnAgregar":

        if ($txtTitulo == "") {
            $error['Texto'] = "Escribe el título";
        }
        if (count($error) > 0) {
            $mostrarModal = true;
            break;
        }

        $sentencia = $pdo->prepare("INSERT INTO cursos(course_title,Texto,Foto,course_time,course_dateStarts,course_observation,course_link,Fecha) 
        VALUES(:Title,:Descripcion,:Foto,:Duracion,:FechaInicio,:Observaciones,:Link,:fechaPublicacion)");

        $sentencia->bindParam(':Title', $txtTitulo, PDO::PARAM_STR);
        $sentencia->bindParam(':Descripcion', $txtDescripcion, PDO::PARAM_STR);
        $sentencia->bindParam(':Duracion', $txtDuracion, PDO::PARAM_STR);
        $sentencia->bindParam(':FechaInicio', $txtFechaInicio, PDO::PARAM_STR);
        $sentencia->bindParam(':Observaciones', $txtObservaciones, PDO::PARAM_STR);
        $sentencia->bindParam(':Link', $txtLink, PDO::PARAM_STR);
        $sentencia->bindParam(':fechaPublicacion', $fecha_publicacion, PDO::PARAM_STR);

        $Fecha = new DateTime();
        $nombreArchivo = ($txtFoto != "") ? $Fecha->getTimestamp() . "_" . $_FILES["txtFoto"]["name"] : "imagen.png";

        $tmpFoto = $_FILES["txtFoto"]["tmp_name"];

        if ($tmpFoto != "") {
            move_uploaded_file($tmpFoto, "../../../Sistema/Imagenes/" . $nombreArchivo);
        }

        $sentencia->bindParam(':Foto', $nombreArchivo);
        $sentencia->execute();
        header('Location: crudCursos.php');
        break;

    case "btnModificar":

        $sentencia = $pdo->prepare("UPDATE cursos SET course_title=:Title,
                                                        Texto=:Descripcion,
                                                        course_time=:Duracion,
                                                        course_dateStarts=:FechaInicio,
                                                        course_observation=:Observaciones,
                                                        course_link=:Link,
                                                        Fecha=:fechaPublicacion 
                                                        WHERE id=:id");

        $sentencia->bindParam(':Title', $txtTitulo, PDO::PARAM_STR);
        $sentencia->bindParam(':Descripcion', $txtDescripcion, PDO::PARAM_STR);
        $sentencia->bindParam(':Duracion', $txtDuracion, PDO::PARAM_STR);
        $sentencia->bindParam(':FechaInicio', $txtFechaInicio, PDO::PARAM_STR);
        $sentencia->bindParam(':Observaciones', $txtObservaciones, PDO::PARAM_STR);
        $sentencia->bindParam(':Link', $txtLink, PDO::PARAM_STR);
        $sentencia->bindParam(':fechaPublicacion', $fecha_publicacion, PDO::PARAM_STR);
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();

        $Fecha = new DateTime();
        $nombreArchivo = ($txtFoto != "") ? $Fecha->getTimestamp() . "_" . $_FILES["txtFoto"]["name"] : "imagen.png";

        $tmpFoto = $_FILES["txtFoto"]["tmp_name"];

        if ($tmpFoto != "") {
            move_uploaded_file($tmpFoto, "../../../Sistema/Imagenes/" . $nombreArchivo);

            $sentencia = $pdo->prepare("SELECT Foto FROM cursos WHERE id=:id");
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia->fetch(PDO::FETCH_LAZY);
            print_r($empleado);

            if (isset($empleado["Foto"])) {

                if (file_exists("../../../Sistema/Imagenes/" . $empleado["Foto"])) {

                    if ($empleado["Foto"] != "imagen.jpg") {

                        unlink("../../../Sistema/Imagenes/" . $empleado["Foto"]);
                    }
                }
            }

            $sentencia = $pdo->prepare("UPDATE cursos SET Foto=:Foto WHERE id=:id");

            $sentencia->bindParam(':Foto', $nombreArchivo);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
        }

        header('Location: crudCursos.php');

        echo $txtID;
        echo "Presionaste Modificar";
        break;

    case "btnEliminar":

        $sentencia = $pdo->prepare("SELECT Foto FROM cursos WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        $empleado = $sentencia->fetch(PDO::FETCH_LAZY);
        print_r($empleado);

        if (isset($empleado["Foto"]) && ($empleado['Foto'] != "imagen.jpg")) {
            if (file_exists("../../../Sistema/Imagenes/" . $empleado["Foto"])) {

                unlink("../../../Sistema/Imagenes/" . $empleado["Foto"]);
            }
        }
        $sentencia = $pdo->prepare("DELETE FROM cursos WHERE id=:id");

        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        header('Location: crudCursos.php');

        echo $txtID;
        echo "Presionaste Eliminar";
        break;
    case "btnCancelar":
        header('Location: crudCursos.php');
        break;
    case "Seleccionar":
        $accionAgregar = "disabled";
        $accionModificar = $accionEliminar = $accionCancelar = "";
        $mostrarModal = true;

        $sentencia = $pdo->prepare("SELECT * FROM cursos WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        $empleado = $sentencia->fetch(PDO::FETCH_LAZY);

        $txtTitulo = $empleado['course_title'];
        $txtFoto = $empleado['Foto'];
        $txtDescripcion = $empleado['Texto'];
        $txtDuracion = $empleado['course_time'];
        $txtFechaInicio = $empleado['course_dateStarts'];
        $txtObservaciones = $empleado['course_observation'];
        $txtLink = $empleado['course_link'];

        break;
}

$sentencia = $pdo->prepare("SELECT * FROM `cursos`");
$sentencia->execute();
$listacursos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listacursos);
