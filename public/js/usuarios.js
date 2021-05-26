$(document).ready(iniciar);

function iniciar(){
	$("#btn-registrar").off('click').on('click',ingresar_usuario);

	listar_usuarios();
}

function ingresar_usuario(e){
	e.preventDefault(); //evita que el boton submit envie el form
	
	$.ajax({
		type: "POST",
		data: $("#form_registrar_user").serialize(),
		url: url_base+"registrar-usuario-admin",

		success:function(data){
			var data = JSON.parse(data);
			if(data.estado){
				Swal.fire(
							'Usuario Ingresado con Exito',
							data.mensaje,
							'success'
							);
			}
			else{
				Swal.fire(
							'Usuario no ingresado',
							data.mensaje,
							'error'
							);
			};
		},
			error: function (x, r, e) {
            console.log(x);
            console.log(r);
            console.log(e);
        }
	});
	
}

function listar_usuarios()
{

	$.ajax({
		type:'POST',
		url: url_base+'listar-usuarios',
		success:function(data){
			var respuesta = JSON.parse(data);
			if (respuesta.estado) {
				console.log(respuesta.datos);
				$.each(respuesta.datos, function(key,val){
					var fila = ` <tr>
									<td>`+val.num_documento+`</td>
									<td>`+val.nombre+" "+val.apellido+`</td>
									<td>`+val.telefono+`</td>
									<td>`+val.correo+`</td>
									<td>
										<div class="btn-group" role="group" aria-label="Basic example">
											<button type="button" class="btn btn-primary ver" data-num_id="`+val.id_user+`" data-toggle="modal" data-target="#modal_ver_mas">
												<i class="fas fa-eye"></i>
											</button>

											<button type="button" class="btn btn-success editar" data-num_id="`+val.id_user+`" data-toggle="modal" data-target="#modal_editar">
												<i class="fas fa-edit"></i>
											</button>

											<button type="button" class="btn btn-danger eliminar" data-num_id="`+val.id_user+`">
												<i class="fas fa-trash-alt"></i>
											</button>
											
										</div>
									</td>
								</tr>`;
					$("#lista_usuarios").append(fila);
				});
				$(".ver").off("click").on("click", buscar_usuario);
				$(".editar").off("click").on("click", editar_usuario);
				$(".eliminar").off("click").on("click", eliminar);
				
			}else{
				Swal.fire(
					'Usuarios no Registrados',
					'Actualmente no existen usuarios activos registrados',
					'error'
				);
			}
		},
			error: function (x, r, e) {
            console.log(x);
            console.log(r);
            console.log(e);
        }
	});
}

function buscar_usuario()
{
	var id_usuario = $(this).data('num_id');
	var id_json = { 'id_usuario': id_usuario };

	$.ajax({
		type: 'POST',
		data: id_json,
		url: url_base+'usuario',
		success:function(data){
			var respuesta = JSON.parse(data);
			console.log(respuesta);
			var datos = `<ul class="list-group list-group-flush">
	                        <li class="list-group-item">Codigo: `+ id_usuario +`</li>
	                        <li class="list-group-item">No.Documento: `+ respuesta.datos[0].num_documento +`</li>
	                        <li class="list-group-item">Nombres: `+ respuesta.datos[0].nombre +`</li>
	                        <li class="list-group-item">Apellidos: `+ respuesta.datos[0].apellido +`</li>
	                        <li class="list-group-item">Telefono: `+ respuesta.datos[0].telefono +`</li>
	                        <li class="list-group-item">Correo: `+ respuesta.datos[0].correo +`</li>
	                        <li class="list-group-item">Rol: `+ respuesta.datos[0].rol +`</li>
	                        <li class="list-group-item">Estado: `+ respuesta.datos[0].estado +`</li>
	                        <li class="list-group-item">Fecha Registro: `+ respuesta.datos[0].fecha_registro +`</li>
                    	</ul>`;

            $("#info_usuario").html(datos);
		},
		error: function (x, r, e) {
            console.log(x);
            console.log(r);
            console.log(e);
        }
	});
	
}

function editar_usuario()
{
	var id_usuario = $(this).data('num_id');
	var id_json = { 'id_usuario': id_usuario };

	$.ajax({
		type: 'POST',
		data: id_json,
		url: url_base+'usuario',
		success:function(data){
			var respuesta = JSON.parse(data);
			console.log(respuesta);
			
			var nombre = respuesta.datos[0].nombre;
			var apellido = respuesta.datos[0].apellido;
			var telefono = respuesta.datos[0].telefono;
			var correo = respuesta.datos[0].correo;
			var rol = respuesta.datos[0].rol;
			var num_documento = respuesta.datos[0].num_documento;

			$("#codigo").val(id_usuario);
			$("#nombres_editar").val(nombre);
			$("#apellidos_editar").val(apellido);
			$("#telefono_editar").val(telefono);
			$("#email_editar").val(correo);
			$("#rol_editar").val(rol);
			$("#id_doc_editar").val(num_documento);

			$("#editar").off("click").on("click", actualizar_usuario);
            
		},
		error: function (x, r, e) {
            console.log(x);
            console.log(r);
            console.log(e);
        }
	});

}

function actualizar_usuario()
{

	$.ajax({
		type: 'POST',
		data: $("#form_editar").serialize(),
		url: url_base+'editar-usuario',
		success:function(data){
			var respuesta = JSON.parse(data);
			console.log(respuesta);

			if (data) {
				Swal.fire(
					'Todo ok',
					'Actualizado con exito',
					'success'
				);
			} else{
				Swal.fire(
					'No ok',
					'No se actualizo',
					'error'
				);
			}
		},
		error: function (x, r, e) {
            console.log(x);
            console.log(r);
            console.log(e);
        }
	});

}

function eliminar()
{
	Swal.fire({
		  title: '¿Quieres eliminar el usuario ?',
		  icon: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Eliminar',
		  cancelButtonText: 'No'
		}).then((result) => {
		  if (result.isConfirmed) {
		    var id_usuario = $(this).data("num_id");
		    var id_json = {'id_usuario': id_usuario};

		    $.ajax({
		    	type: 'POST',
		    	data: id_json,
		    	url: url_base+'eliminar-usuario',
		    	success:function(data){
		    	if (data){
					Swal.fire({
					  icon: 'success',
					  title: 'Eliminado Con Éxito',
					});
				}else{
					Swal.fire(
					  'El usuario no se pudo Eliminar',
					  'Fallo, intente de nuevo !',
					  'error'
					);
				};
		    },
		    	error:function(x, r, e){
		    		console.log(x);
		    		console.log(r);
		    		console.log(e);
		    	}

		    });
		  }
		});
}