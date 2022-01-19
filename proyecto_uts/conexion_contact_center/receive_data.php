<?php
include("../Controllers/contact_centerController.php");
//se crea una nueva instancia
$student = new ContactCenterController();

//isset() para comprobar si una variable está definida -- !empty si no viene null
if (isset($_POST) && !empty($_POST)) {
    $dataToString = "";
    $dataStored = [];
    $data = $student->read();
    $numOfData = count($data);
    foreach ($data as $key => $value) {
        $dataStored[] = implode(",", $value);
    }

    $dataToString = implode(",", $dataStored);

    $verification = strpos($dataToString, $_POST['email']);
    if ($verification !== false) {
        echo '<script type="text/javascript">
        alert("Error: Este email ya se encuentra registrado");
        window.location.href="../resources/views/paginas/educacion.php";
        </script>';
    } else {
        //se llama la función insertar y se le pasan los parámetros del formulario
        $student_data = array(
            "contact_id" => $numOfData+1,
            "contact_name" => $_POST['name'],
            "contact_email" => $_POST['email'],
            "contact_cellphone" => $_POST['phone'],
        );

        $res = $student->create($student_data);
    }
    
        //si el resultado es true o 1, quiere decir que insertó en la base de datos
        if ($res) {
            //se configura el mensaje
            echo '<script type="text/javascript">
        alert("Información insertada Correctamente");
        window.location.href="../resources/views/paginas/educacion.php";
        </script>';
        } else {
            echo '<script type="text/javascript">
        alert("Error: No se pudo insertar el registro");
        </script>';
        }
}

?>
