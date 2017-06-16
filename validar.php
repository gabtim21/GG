<?php 

$usuario = $_POST["inputUser"];
$pass = $_POST["inputpassword"];

if (empty($usuario) || empty($pass)) {
	header("Location: login.html");
	exit();
}

$conexion = new Mongo("");
$db = $conexion->GG->usuarios;

 ?>