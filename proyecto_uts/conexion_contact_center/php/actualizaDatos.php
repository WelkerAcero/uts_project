<?php
require_once "conexion.php";
$conexion = conexion();

$id = $_POST['contact_id'];
$a = $_POST['contact_name'];
$b = $_POST['contact_email'];
$c = $_POST['contact_cellphone'];

$sql = "UPDATE contact_center SET contact_name='$a',
								contact_email='$b',
								contact_cellphone='$c'
								WHERE contact_id='$id'";

echo $result = mysqli_query($conexion, $sql);
