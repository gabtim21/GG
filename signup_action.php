<?php 

//require_once("conection.php");
require_once("funciones.php");
?>

<?php 
$conexion = new Mongo("");
	$db = $conexion->GG;
	$collection = $db->usuario;

$usuario = $_POST["inputName"];
$email = $_POST["inputEmail"];
$temp = $_POST["inputPassword"];
$options = array('cost' => 10);
$pass = password_hash($temp, PASSWORD_BCRYPT, $options);

$registrar = array( "usuario" => $usuario, "email"=>$email, "password"=>$pass );

$query = verificaremail($email);
$query1 = verificarusuario($usuario);
 
 if($query && $query1){
            registrar($registrar);
            header("Location: login.php");
            }
       else{
      	echo"<script type=\"text/javascript\">alert('Este Usuario o EMAIL ya se encuentra registrado, utilice otro'); window.location='signup.php';</script>";
       }

 ?>