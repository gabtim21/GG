<?php 

require_once("funciones.php");

 ?>
<?php 
$conexion = new Mongo("");
    $db = $conexion->GG;
    $collection = $db->usuario;


 ?>
 <?php 
 
        $email = $_POST['inputEmail'];
        $upass = $_POST['inputPassword'];
        $criteria = array("email"=> $email);
        $query = $collection->findOne($criteria);
        //var_dump($query);
        if(empty($query)){
            echo "Email no esta registrado.";
            echo"<script type=\"text/javascript\">alert('Email no esta registrado'); window.location='login.php';</script>";
        }
        else{
            
                $pass = $query["password"];
                if(password_verify($upass,$pass)){
                    $var = setsession($email);
//                    echo"<pre>";   
//                    print_r($_SESSION);
                  
                    
                    if($var){
                        
                    header("Location: index.php");
                    }
                    else{
                        echo "Some error";
                    }
                }
                else{
                   echo"<script type=\"text/javascript\">alert('Password incorrecto'); window.location='login.php';</script>";
                }
                
            
        
        }

 		

  ?>