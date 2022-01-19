

function agregardatos(contact_name, contact_email, contact_cellphone, recorded_date) {
	cadena = "contact_name=" + contact_name +
		"&contact_email=" + contact_email +
		"&contact_cellphone=" + contact_cellphone +
		"&recorded_date=" + recorded_date;

	$.ajax({
		type: "POST",
		url: "php/agregarDatos.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tabla.php');
				$('#buscador').load('componentes/buscador.php');
				alertify.success("Agregado con éxito :)");
			} else {
				alertify.error("Falló el servidor :(");
			}
		}
	});

}

function agregaform(datos) {

	d = datos.split('||');

	$('#idpersona').val(d[0]);
	$('#contact_nameUpdate').val(d[1]);
	$('#contact_emailUpdate').val(d[2]);
	$('#contact_cellphoneUpdate').val(d[3]);
	$('#recorded_dateUpdate').val(d[4]);


}

function actualizaDatos() {

	contact_id = $('#idpersona').val();
	contact_name = $('#contact_nameUpdate').val();
	contact_email = $('#contact_emailUpdate').val();
	contact_cellphone = $('#contact_cellphoneUpdate').val();

	cadena = "contact_id=" + contact_id +
		"&contact_name=" + contact_name +
		"&contact_email=" + contact_email +
		"&contact_cellphone=" + contact_cellphone;
	
	$.ajax({
		type: "POST",
		url: "php/actualizaDatos.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tabla.php');
				$('#buscador').load('componentes/buscador.php');
				alertify.success("Actualizado con exito :)");
			} else {
				alertify.error("Falló el servidor :(");
			}
		}
	});

}

function preguntarSiNo(id) {
	alertify.confirm('Eliminar Datos', '¿Está seguro de eliminar este registro?',
		function () { eliminarDatos(id) }
		, function () { alertify.error('Se canceló') });
}

function eliminarDatos(id) {

	cadena = "id=" + id;

	$.ajax({
		type: "POST",
		url: "php/eliminarDatos.php",
		data: cadena,
		success: function (r) {
			if (r == 1) {
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Eliminado con éxito!");
			} else {
				alertify.error("Falló el servidor :( ");
			}
		}
	});
}