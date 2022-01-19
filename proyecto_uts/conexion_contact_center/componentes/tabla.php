<?php
session_start();
require_once("../../Controllers/contact_centerController.php");
$con = new ContactCenterController();

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
				<td style="font-size: 15px; background-color:black; color: white; text-align: center; vertical-align:middle"><b>NOMBRE</b></td>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center; vertical-align:middle"><b>EMAIL</b></td>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center; vertical-align:middle"><b>CELULAR</b></td>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center; vertical-align:middle"><b>FECHA DEL REGISTRO</b></td>
				<td style="font-size: 15px; background-color:black; color: white; text-align: center; vertical-align:middle"><b>FECHA DE ÚLTIMA ACTUALIZACiÓN</b></td>

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

			$result = $con->read();
			foreach($result as $field => $ver) {

				$datos = $ver["contact_id"] . "||" . $ver["contact_name"] . "||" . $ver["contact_email"] . "||" . $ver["contact_cellphone"] . "||" . $ver["recorded_date"];

			?>

				<tr>
					<td style="text-align: center;"><?=  $ver["contact_name"];?></td>
					<td style="text-align: center;"><?=  $ver["contact_email"]; ?></td>
					<td style="text-align: center;"><?=  $ver["contact_cellphone"];  ?></td>
					<td style="text-align: center;"><?=  $ver["recorded_date"]; ?></td>
					<td style="text-align: center;"><?=  $ver["last_update"]; ?></td>

					
					<td>
						<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?= $datos ?>')">

						</button>
					</td>
					<td>
						<button class="btn btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?= $ver['contact_id'] ?>')">
						</button>
					</td>
				</tr>

			<?php
			}
			?>

		</table>
	</div>
</div>

