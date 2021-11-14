<?php
//print_r($_POST)

$txtID = (isset($_POST['txtID'])) ? $_POST['txtID'] : "";
$txtTexto = (isset($_POST['txtTexto'])) ? $_POST['txtTexto'] : "";
$txtFoto = (isset($_FILES['txtFoto']["name"])) ? $_FILES['txtFoto']["name"] : "";
$fecha_publicacion = (isset($_POST['fecha']))  ? $_POST['fecha'] : "";


$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

$error = array();

$accionAgregar = "";
$accionModificar = $accionEliminar = $accionCancelar = "disabled";
$mostrarModal = false;

include("../../conexion/conexion.php");
$con = new Conexion();
$pdo = $con->conectarseMetodo_2(); //$pdo guarda la conexion. Luego $pdo procesa el metodo conectar 2
                                   //$pdo es usado de ahora en adelante para sentencias prepareSQL

switch ($accion) {
    case "btnAgregar":

        if ($txtTexto == "") {
            $error['Texto'] = "Escribe información";
        }
        if (count($error) > 0) {
            $mostrarModal = true;
            break;
        }
        
        $sentencia = $pdo->prepare("INSERT INTO proyeccion(Texto,Foto,Fecha) 
        VALUES(:Texto,:Foto,'$fecha_publicacion')");

        $sentencia->bindParam(':Texto', $txtTexto);

        $Fecha = new DateTime();
        $nombreArchivo = ($txtFoto != "") ? $Fecha->getTimestamp() . "_" . $_FILES["txtFoto"]["name"] : "imagen.png";

        $tmpFoto = $_FILES["txtFoto"]["tmp_name"];

        if ($tmpFoto != "") {
            move_uploaded_file($tmpFoto, "../Imagenes/" . $nombreArchivo);
        }

        $sentencia->bindParam(':Foto', $nombreArchivo);
        $sentencia->execute();
        header('Location:index.php');
        break;

    case "btnModificar":

        $sentencia = $pdo->prepare("UPDATE proyeccion SET
        Texto=:Texto WHERE id=:id");

        $sentencia->bindParam(':Texto', $txtTexto);
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();

        $Fecha = new DateTime();
        $nombreArchivo = ($txtFoto != "") ? $Fecha->getTimestamp() . "_" . $_FILES["txtFoto"]["name"] : "imagen.png";

        $tmpFoto = $_FILES["txtFoto"]["tmp_name"];

        if ($tmpFoto != "") {
            move_uploaded_file($tmpFoto, "../Imagenes/" . $nombreArchivo);

            $sentencia = $pdo->prepare("SELECT Foto FROM proyeccion WHERE id=:id");
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
            $empleado = $sentencia->fetch(PDO::FETCH_LAZY);
            print_r($empleado);

            if (isset($empleado["Foto"])) {
                if (file_exists("../Imagenes/" . $empleado["Foto"])) {
                    if ($empleado["Foto"] != "imagen.jpg") {
                        unlink("../Imagenes/" . $empleado["Foto"]);
                    }
                }
            }

            $sentencia = $pdo->prepare("UPDATE proyeccion SET Foto=:Foto WHERE id=:id");

            $sentencia->bindParam(':Foto', $txtFoto);
            $sentencia->bindParam(':id', $txtID);
            $sentencia->execute();
        }

        header('Location:index.php');

        echo $txtID;
        echo "Presionaste Modificar";
        break;

    case "btnEliminar":
        $sentencia = $pdo->prepare("SELECT Foto FROM proyeccion WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        $empleado = $sentencia->fetch(PDO::FETCH_LAZY);
        print_r($empleado);

        if (isset($empleado["Foto"]) && ($empleado['Foto'] != "imagen.jpg")) {
            if (file_exists("../Imagenes/" . $empleado["Foto"])) {

                unlink("../Imagenes/" . $empleado["Foto"]);
            }
        }
        $sentencia = $pdo->prepare("DELETE FROM proyeccion WHERE id=:id");

        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        header('Location:index.php');

        echo $txtID;
        echo "Presionaste Eliminar";
        break;
    case "btnCancelar":
        header('Location:index.php');
        break;
    case "Seleccionar":
        $accionAgregar = "disabled";
        $accionModificar = $accionEliminar = $accionCancelar = "";
        $mostrarModal = true;

        $sentencia = $pdo->prepare("SELECT * FROM proyeccion WHERE id=:id");
        $sentencia->bindParam(':id', $txtID);
        $sentencia->execute();
        $empleado = $sentencia->fetch(PDO::FETCH_LAZY);

        $txtTexto = $empleado['Texto'];
        $txtFoto = $empleado['Foto'];
        break;
}

$sentencia = $pdo->prepare("SELECT * FROM `proyeccion`");
$sentencia->execute();
$listaproyeccion = $sentencia->fetchAll(PDO::FETCH_ASSOC);

//print_r($listaproyeccion);
