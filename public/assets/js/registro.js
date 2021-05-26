$(document).ready(iniciar);

function iniciar(){
	$("#registro_cliente").off("click").on("click", guardar_cliente);
	$("#registro_conductor").off("click").on("click", guardar_conductor);
}

function guardar_cliente(){
	var nombres = $("nombres_cliente").val();
	var apellidos = $("apellidos_cliente").val();
	var identificacion = $("identificacion_cliente").val();
	var email = $("email_cliente").val();
	var telefono = $("telefono_cliente").val();
	var password = $("password_cliente").val();
	var licencia_categoria = $("licencia_cliente").val();
	var estado = $("estado_cliente").val();
	var tipo = $("tipo_cliente").val();

	var datos_cliente = {

							"nombres_cliente": nombres,
							"apellidos_cliente": apellidos,
							"identificacion_cliente": identificacion,
							"email_cliente": email,
							"telefono_cliente": telefono,
							"password_cliente": password,
							"licencia_cliente":licencia_categoria,
							"estado_cliente": estado,
							"tipo_cliente": tipo,

							};
	jQuery.ajax({
		type:"POST",
		data: datos_cliente, //los datos que quiero enviar 
		url:"guardar_cliente.php", //a donde quiero llevar los datos
		success:function(data){ //mensaje que llega del guardar
			var resultados = JSON.parse(data); //convertir JSON a JS						
}
