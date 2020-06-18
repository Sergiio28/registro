<?php
// Incluimos el archivo conexión
require_once('db/conexion.php');
require_once('db/clase.php');
// Instancia del objeto classe Login
$objLogin = new Login();

// Verificamos si esta logueado, caso contrario será redireccionado a la página de login
if (!$objLogin->verificar('index.php'))
    // Cerramos la verificacion
    exit;

// Selecionamos informacion del usuario desde MySQL
$query = mysqli_query($conectar,"SELECT * FROM usuario WHERE id_usuario = {$objLogin->getID()}");
$usuario = mysqli_fetch_object($query);
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Datos de Usuario</title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.form.js'></script>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link href="Login/dist/css/styles.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Tus datos de usuario</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
         
          <ul class="navbar-nav mr-auto">
        
            <li class="nav-item ">
              <a class="nav-link" href="database2.php">Acceso base de datos</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="mail/index.php">Contacto</a>
            </li> 
                  
          </ul>
         
        </div>

            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../../PanelControl.php">Mi cuenta</a><a class="dropdown-item" href="#">Actividad</a>
                        <div class="dropdown-divider"></div>
                         <form class="form-inline mt-2 mt-md-0 ml-3">
            
            <a class="btn btn-danger" href="CerrarSesion.php">Cerrar Sesión</a>
          </form>
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Begin page content -->

<div class="container">
 <h1 class="mt-5">Tus datos de usuario</h1>
 <hr>
<div class="row">
  <div class="col-12 col-md-6">
   <!-- Contenido --> 

        <p>Bienvenido<strong> <?php echo $objLogin->getNombres() ?></strong></p>

      <h4>Tus datos son:</h4>

        <ul>
          <li><strong>Nombre:</strong> <?php echo $objLogin->getNombres() ?></li>
           <li><strong>Usuario:</strong> <?php echo $objLogin->getLogin() ?></li>
            <li><strong>ID:</strong> <?php echo $objLogin->getID() ?></li>
           
            
        </ul>

        
<!-- Fin Contenido --> 
</div>
</div><!-- Fin row -->


</div><!-- Fin container -->
    <footer class="footer">
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>