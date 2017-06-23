<?php
require('conection.php');
require_once("Datos/GameDatos.php");
require_once("Modelos/Game.php");

$id_game=leerParam("id_game","");

$objGame = new Game;
$objGame->id_game=$id_game;


?>


<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success">
		    <strong>EXITOOO!</strong> El Game se guardo.
		</div>
    </div>
</div>