<?php  

$conexion = new Mongo("");
$db = $conexion->GG->usuarios;

$usuario = $_POST["inputName"];
$email = $_POST["inputEmail"];
$pass = $_POST["inputPassword"];

$registrar = array( "usuario" => $usuario, "email"=>$email, "password"=>$pass );

$db->insert( $registrar );   
header("Location:login.html");

?>