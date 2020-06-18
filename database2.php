<?php include("db/dbconect.php");?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Base de datos</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  

    <!--  extension responsive  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <link href="Login/dist/css/styles.css" rel="stylesheet" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
<script>
$(function(){
  //Mensaje
    var message_status = $("#status");
    $("td[contenteditable=true]").blur(function(){
        var rownumber = $(this).attr("id");
        var value = $(this).text();
        $.post('proceso.php' , rownumber + "=" + value, function(data){
            if(data != '')
      {
        message_status.show();
        message_status.html(data);
        //hide the message
        setTimeout(function(){message_status.html("Registro Actualizado Correctamente");},2000);
      } else {
        //message_status().html = data;
      }




        });
    });
});
</script>
<style>
#status { padding:10px; background:#88C4FF; color:#000; font-weight:bold; font-size:12px; margin-bottom:10px; display:none; width:90%; }
</style>
</head>
<body>
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Tus datos de usuario</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >
         
          <ul class="navbar-nav mr-auto">
        
            <li class="nav-item ">
              <a class="nav-link" href="database2.php">Acceso base de datos</a>
            </li> 
            <li class="nav-item ">
              <a class="nav-link" href="Panel/index.php">Panel de control</a>
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
                        <a class="dropdown-item" href="PanelControl.php">Mi cuenta</a><a class="dropdown-item" href="#">Actividad</a>
                        <div class="dropdown-divider"></div>
                         <form class="form-inline mt-2 mt-md-0 ml-3">
            
            <a class="btn btn-danger" href="CerrarSesion.php">Cerrar Sesión</a>
          </form>
                    </div>
                </li>
            </ul>
        </nav>
<div class="container pt-5 mt-5">

<h3>Editar Base de Datos</h3>
</div>
<div class="container">

<?php
$sql = "SELECT * FROM `usuarios_detalles`";
$consulta = mysqli_query($con, $sql);
if($consulta->num_rows === 0) {
  echo "No hay resultados <br><br><br>";
} else {
?>

<div class="row">
<div id="status"></div>      
<table class="table table-striped" id="tabledit" style="width: 1024px;">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Celular</th>
      </tr>
    </thead>
    <tbody>
<?php
$rownumber=0;
while($rowedit = mysqli_fetch_array($consulta)){
$rownumber++;
$nom = $rowedit["Nombres"];
$ape = $rowedit["Apellidos"];
$ciu = $rowedit["Ciudad"];
$cel = $rowedit["Cel"];
?>
<tr>
  <td scope="row"><?php echo $rownumber; ?></td>
  <td id="Nombres:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $nom; ?></td>
  <td id="Apellidos:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $ape; ?></td>
  <td id="Ciudad:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $ciu; ?></td>
  <td id="Cel:<?php echo $rownumber; ?>" contenteditable="true"><?php echo $cel; ?></td>
</tr>
<?php
}
?>    
    </tbody>
 </table>
</div>
<?php }?>
</div>
<!--  
        
       Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
    <!-- extension responsive -->
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    

      
    <script>
    $(document).ready(function() {
        $('#tabledit').DataTable({
            responsive: true
        });
    } );  
    
    </script>
</body>
</html>