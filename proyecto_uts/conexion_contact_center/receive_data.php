<?php
include("conexion.php");
//se crea una nueva instancia
$student = new conexion();
//isset() para comprobar si una variable está definida -- !empty si no viene null
if (isset($_POST) && !empty($_POST)) {

    //se llama la función insertar y se le pasan los parámetros del formulario
    $res = $student->insertar_contact(
        $_POST['name'],
        $_POST['email'],
        $_POST['phone'],
    );

    //si el resultado es true o 1, quiere decir que insertó en la base de datos
    if ($res) {
        //se configura el mensaje
        echo '<script type="text/javascript">
alert("Información insertada Correctamente");
window.location.href="educacion.php";
</script>';
    } else {
        echo '<script type="text/javascript">
alert("Error: No se pudo insertar el registro");
</script>';
    }
}