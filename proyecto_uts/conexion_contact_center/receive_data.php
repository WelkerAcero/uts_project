<?php
include("../conexion/conexion.php");
//se crea una nueva instancia
$student = new Conexion();
//isset() para comprobar si una variable está definida -- !empty si no viene null
if (isset($_POST) && !empty($_POST)) {

    //se llama la función insertar y se le pasan los parámetros del formulario
    $res = $student->insertar_contact(
        $_POST['name'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['date'],
    );

    //si el resultado es true o 1, quiere decir que insertó en la base de datos
    if ($res) {
        //se configura el mensaje
        echo '<script type="text/javascript">
alert("Información insertada Correctamente");
window.location.href="/proyecto_uts/resources/views/paginas/educacion.php";
</script>';

    } else {
        echo '<script type="text/javascript">
alert("Error: No se pudo insertar el registro");
</script>';
    }
}
?>