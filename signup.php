<!DOCTYPE html>
<html lang="es">

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BIENVENIDOS</title>

        <!-- CSS -->
      
       
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <link href="font-awesome/css/form-elements.css" rel="stylesheet">
        <link href="font-awesome/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="login.php">Iniciar Sesión</a>
            </div>
           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    
	<!--Sign up-->
	<div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>GOOD GAME</h1>
                            <div class="description">
                              <p>
                                 <a href="#">
                                 <strong></strong></a>
                              </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Registrate</h3>
                                </div>        
                            </div>
                        <div class="form-bottom">
                            <form role="form" action="signup_action.php" method="post" class="login-form">
                                <div class="form-group has-icon-left form-control-name">
                                    <label class="sr-only" for="inputName">Nombre</label>
                                        <input type="text" name="inputName" placeholder="Usuario..." class=" form-control" id="inputName" autocomplete="off">
                                </div>
                                <div class="form-group has-icon-left form-control-email">
                                    <label class="sr-only" for="inputEmail">Email</label>
                                        <input type="text" name="inputEmail" placeholder="Email..." class=" form-control" id="inputEmail" autocomplete="off">
                                </div>
                                <div class="form-group has-icon-left form-control-password">
                                    <label class="sr-only" for="inputPassword">Password</label>
                                        <input type="password" name="inputPassword" placeholder="Password..." class=" form-control" id="inputPassword" autocomplete="off">
                                </div>
                                <button type="submit" class="btn">Registrarse</button>
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    
	 <!-- Footer -->
       <div class="container">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Emp. GG creado el 2017</p>
                </div>
            </div>
        </footer>

    </div>

<!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/funciones.js"></script>
        <script src="js/login.js"></script>
</body>

</html>