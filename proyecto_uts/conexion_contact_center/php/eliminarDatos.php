
<?php
require_once "conexion.php";
$conexion = conexion();

$id = $_POST['id'];
$sql = "DELETE FROM contact_center WHERE contact_id='$id'";
echo $result = mysqli_query($conexion, $sql);
?>