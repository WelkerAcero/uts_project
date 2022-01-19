<?php
require_once "../../Controllers/contact_centerController.php";
//Al entrar a esta carpeta, esta linea 'conexion();' salta error,
//pero de igual forma sigue funcionando el actualizar correctamente.
$model = new ContactCenterController();

$contact_data = array(
	'contact_id' =>  $_POST['contact_id'],
	"contact_name" => $_POST['contact_name'],
	"contact_email" => $_POST['contact_email'],
	"contact_cellphone" =>  $_POST['contact_cellphone'],
);

$model->update($contact_data);