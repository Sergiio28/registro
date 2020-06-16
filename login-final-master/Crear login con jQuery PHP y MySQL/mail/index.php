<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <link href="../dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="../assets/css/sticky-footer-navbar.css" rel="stylesheet">
<script type='text/javascript' src='../js/jquery.js'></script>
<script type='text/javascript' src='../js/jquery.form.js'></script>
<link rel="stylesheet" type="text/css" href="../css/main.css" /> -->
  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Panel de control</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>   -->
            <li class="nav-item ">
              <a class="nav-link" href="../database2.php">Acceso base de datos</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="mail/index.php">Contacto</a>
            </li> 
                  
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            
            <a class="btn btn-danger" href="../CerrarSesion.php">Cerrar Sesión</a>
          </form>
        </div>
      </nav>
    </header>
<body>
<div class="container card " style="width: 50%;margin-top: 70px;padding-top: 10px;padding-bottom: 10px;">
  <form method="POST" action="send.php" class="w-50"> 
  <div class="form-group">
    <label for="email">Tu email</label>
    <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Introduce tu email">
    <small id="emailHelp" class="form-text text-muted">No compartiremos tu informacion de contacto con nadie</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Asunto</label>
    <input required type="text" name="subject" class="form-control" id="subject" placeholder="Asunto">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea type="textarea" required class="form-control" id="message" name="message" rows="3" placeholder="Escribe un mensaje..."></textarea>
  </div>
  
  
  <button type="submit" class="btn btn-primary mt-2">Enviar</button>
</form>
</div>
	

   <!-- <form method="POST" action="send.php">
     <div class="form-group">
      <label for="subject">Asunto:
    <input type="text" name="subject" id="subject" name="subject" class="form-control">
  </label>
    </div>
  
  <br>
  <div class="form-group">
    <label for="email">Email destinatario:
    <input type="email" name="email" id="email" class="form-control">
  </label>
  </div>
  
  <br>
  <div class="form-group">
    <label for="message">Mensaje:
    <textarea name="message" id="message" rows="8" cols="20"></textarea>
  </label>
  </div>
  
  <br>
  <input type="submit" value="Send">
</form> -->
  
	

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <!-- <script src="../assets/js/vendor/popper.min.js"></script> -->
    <script src="../dist/js/bootstrap.min.js"></script>
</body>
</html>


