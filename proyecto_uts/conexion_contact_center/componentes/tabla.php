<?php
session_start();
require_once "../php/conexion.php";
$conexion = conexion();

?>
<div class="row">
	<div class="col-sm-12">
		<h2 style="font-size:22px;">Lista de contactos</h2>
		<caption>
			<button class="btn btn-primary col-sm-2" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>
		<table class="table table-hover table-condensed table-bordered">

			<tr>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>NOMBRE</b></td>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>EMAIL</b></td>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>CELULAR</b></td>

				<td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>EDITAR</b></td>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center;"><b>ELIMINAR</b></td>
			</tr>

			<?php

			if (isset($_SESSION['consulta'])) {
				if ($_SESSION['consulta'] > 0) {
					$idp = $_SESSION['consulta'];
					$sql = "SELECT * from contact_center where contact_id='$idp'";
				} else {
					$sql = "SELECT * from contact_center";
				}
			} else {
				$sql = "SELECT * from contact_center";
			}

			$result = mysqli_query($conexion, $sql);
			while ($ver = mysqli_fetch_row($result)) {

				$datos = $ver[0] . "||" . $ver[1] . "||" . $ver[2] . "||" . $ver[3];

			?>

				<tr>
					<td><?php echo $ver[1] ?></td>
					<td><?php echo $ver[2] ?></td>
					<td><?php echo $ver[3] ?></td>
					<td>
						<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">

						</button>
					</td>
					<td>
						<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						</button>
					</td>
				</tr>

			<?php
			}
			?>

		</table>
	</div>
</div>