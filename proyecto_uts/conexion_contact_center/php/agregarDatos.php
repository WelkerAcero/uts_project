<?php

require_once "conexion.php";

$conexion = conexion();
$a = strtolower($_POST['contact_name']);
$a2 = ucwords($a);

$b = strtolower($_POST['contact_email']);

$c = $_POST['contact_cellphone'];


$sql = "INSERT INTO contact_center (contact_name,contact_email,contact_cellphone)
								VALUES ('$a2','$b','$c')";
echo $result = mysqli_query($conexion, $sql);
