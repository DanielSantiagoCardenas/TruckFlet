<?php

$contrasena = "tfP/_k@*kkXMoc!O";
$usuario = "admin";
$nombreBaseDeDatos = "truckflet";

try {
    $base_de_datos = new PDO("mysql:host=localhost;dbname=$nombreBaseDeDatos", $usuario, $contrasena);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Se conecto con Éxito ";
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

//PDO la mejor clase para conectar al servidor mas veloz
//Msqli otra clase de php 