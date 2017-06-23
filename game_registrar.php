<?php require_once("header.php"); 
require_once("conection.php");
require_once("Datos/GameDatos.php");



?>
 <div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Games
                <small>Registrar Games</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form role="form" method="POST" action="game_grabar.php">
                <input hidden="YES" name="accion" value="crear">
                <fieldset class="form-group">
                    <label for="nom_game">Nombre del Game:</label>
                    <input class="form-control" placeholder="Escriba el game:" required="required" name="nom_game" id="nom_game">
                </fieldset>
                <button type="submit" class="btn btn-secondary">Guardar</button>
                <button type="reset" class="btn btn-secondary">Borrar Contenido</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>