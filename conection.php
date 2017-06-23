<?php  

function leerParam($param, $default) {
     if ( isset($_POST["$param"] ) )
        return $_POST["$param"];
     if ( isset($_GET["$param"] ) )
        return $_GET["$param"];
     return $default;
 }

 function conexion() {
	$conexion = new Mongo("");
	$db = $conexion->selectDB("GG");
}
?>