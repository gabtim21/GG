<?php require_once("header.php");

require_once("Datos/GameDatos.php");
$objGameDatos = new GameDatos();

    
?>
 <div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Games
                <small>GG</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="game_registrar.php">Registrar Game</a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Games Registrados</h2>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Id del Game</th>
                            <th>Nombre del Game</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
 
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->
<?php require_once("footer.php"); ?>