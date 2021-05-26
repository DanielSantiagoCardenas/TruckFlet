$(document).ready(iniciar);

function iniciar() {
	$("#tipo_mov").change(get_categorias);
	$("#guardar_mov").off().on('click', guardar);
}

function get_categorias(){
	var tipo = {'tipo_cate': $("#tipo_mov").val()};

	$.ajax({
		type:'POST',
		data: tipo,
		url: url_base+'categorias',
		data: tipo,
		success:function(data){
			var respuesta = JSON.parse(data);
			console.log(respuesta);
			
			if (respuesta.estado) {
				$('#cate_mov').html('');
				$.each(respuesta.datos, function(key,val){
					var option = `<option value="`+val.id_categoria+`">`+val.nombre+`</option>`;
					$("#cate_mov").append(option);
				});
			}else{
				alert("no hay categorias");
			}
		},
		error:function(x, r, e){
			console.log(x);
			console.log(r);
			console.log(e);
		}

	});


}

function guardar()
{
	$.ajax({
		type:'POST',
		data: $("#form_guardar_mov").serialize(),
		url: url_base+'guardar-movimiento',
		success:function(data){
			var respuesta = JSON.parse(data);
			console.log(respuesta);
			
			if (respuesta.estado) {
				alert("almacenado con exito");
			}else{
				alert("hay problemas");
			}
		},
		error:function(x, r, e){
			console.log(x);
			console.log(r);
			console.log(e);
		}

	});
}