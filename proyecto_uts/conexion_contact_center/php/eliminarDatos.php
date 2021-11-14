
<?php
require_once "../../conexion/conexion.php";
$con = new Conexion();
$conexion = $con->conectar();

$id = $_POST['id'];
$sql = "DELETE FROM contact_center WHERE contact_id='$id'";
echo $result = mysqli_query($conexion, $sql);
?>