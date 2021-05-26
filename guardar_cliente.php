<?php

include_once "conexion.php";

$nombres = $_POST['nombres_cliente'];
$apellidos = $_POST['apellidos_cliente'];
$identificacion = $_POST['identificacion_cliente'];
$email = $_POST['email_cliente'];
$telefono = $_POST['telefono_cliente'];
$password = $_POST['password_cliente'];
$licencia_categoria = $_POST['licencia_cliente'];
$estado = $_POST['estado_cliente'];
$tipo = $_POST['tipo_cliente'];

$registrar_cliente = $base_de_datos->prepare("INSERT INTO registro (id_registro, nombres, apellidos, identificacion, email, telefono, password, licencia_categoria, estado, tipo) VALUES (?,?,?,?,?,?,?,?,?,?");

$resultado_cliente = $registrar_cliente->execute([$nombres, $apellidos, $identificacion, $email, $telefono, $password, $licencia_cliente, $estado, $tipo]);

// if ($resultado_cliente === true) {
//     # Redireccionar al index
// 	# header("Location: listar_mascotas.php");
// 	$ultimoId = $base_de_datos->lastInsertId();
// 	$datos = array("estado" => "OK", 
// 					"mensaje" => "Te registrarte con Exito con exito",
// 					"id" => $ultimoId
// 				);
// } else {
// 	$datos = array("estado" => "ERROR", 
// 					"mensaje" => "Algo salió mal. Por favor intentelo nuevamente"
// 					);
// }

// echo json_encode($datos);


?>


