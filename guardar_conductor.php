<?php

include_once "conexion.php";

$nombres $_POST['nombres_conductor'];
$apellidos $_POST['apellidos_conductor'];
$identificacion $_POST['identificacion_conductor'];
$email $_POST['email_conductor'];
$telefono $_POST['telefono_conductor'];
$password $_POST['password_conductor'];
$licencia_categoria $_POST['licencia'];
$estado $_POST['estado_conductor'];
$tipo $_POST['tipo_conductor'];

$registrar_conductor = $base_de_datos->prepare("INSERT INTO registro (nombres_conductor, apellidos_conductor, identificacion_conductor, email_conductor, telefono_conductor, password_conductor, licencia, estado_conductor, tipo_conductor) VALUES (?,?,?,?,?,?,?,?,?);");

$resultado_conductor = $registrar_conductor->execute([$nombres, $apellidos, $identificacion, $email, $telefono, $password, $licencia_categoria, $estado, $tipo]);

?>