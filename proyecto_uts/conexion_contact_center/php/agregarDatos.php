<?php

require_once "../../conexion/conexion.php";

$con = new Conexion();
$conexion = $con->conectar();

$a = strtolower($_POST['contact_name']);
$a2 = ucwords($a);
$b = strtolower($_POST['contact_email']);
$c = $_POST['contact_cellphone'];
$date = $_POST['recorded_date'];


$sql = "INSERT INTO contact_center (contact_name, contact_email, contact_cellphone, recorded_date)
								VALUES ('$a2','$b','$c','$date')";
echo $result = mysqli_query($conexion, $sql);
