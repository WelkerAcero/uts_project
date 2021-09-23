

<?php
function conexion()
{
	$servidor = "localhost";
	$usuario = "root";
	$password = "";
	$bd = "uts_project";

	$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

	return $conexion;
}

?>

 