<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
  
   <link rel="stylesheet" href="css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="css/alertify.css" type="text/css">
    <link rel="stylesheet" href="css/alertify.min.css"  type="text/css">
    <link rel="stylesheet" href="css/font-awesome.css"  type="text/css">
     <link rel="stylesheet" href="themes/default.min.css"  type="text/css">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
     <script src ="js/alertify.js"></script>
     <script src="moment.js"></script>
<script src ="js/alertify.min.js"></script>
   <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <style type="text/css">
    .bordito-r{border-right: 1px solid black;}
    .bordito-b{border-bottom: 1px solid black;}
    .bordino{border-top: 1px solid black;}
    
  </style>
  </head>
  <body>
  <?php
  
 
 ?>
<div class="container">
<div class="row">
<div class="col-12">
<?php
session_start();
 $usuario="";
 $igle ="";
$usuario= $_SESSION['usuario'];

$igle = $_SESSION['igle'];
if($igle=='Y'){
 echo'<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
    <li class="nav-item ">
        <a class="nav-link" href="homeAdmin.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active ">
        <a class="nav-link" href="seleccionIglesia.php">Seleccionar Iglesia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Usuarios.php">Agregar Usuarios</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="agregar_iglesia.php">Agregar Parroquias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Catalogo.php">Catalogo</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="agregarCuentas.php">Agregar Cuentas</a>
      </li>
       
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Partidas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Partidas.php">Crear Partida</a>
          <a class="dropdown-item" href="PartidasCalculadas.php">Crear Partida Calculada</a>
          <a class="dropdown-item" href="partidasEspeciales.php">Crear Partida Especial</a>
          <a class="dropdown-item" href="detallePartidas.php">Ver Partidas</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reportes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="mayorizacion.php">Mayorizacion</a>
          <a class="dropdown-item" href="Balance.php">Balance</a>
          <a class="dropdown-item" href="EstadoResultado.php">Balance y Estado de Resultado</a>

        </div>
      </li>
       <li class="nav-item">
       <a class="nav-link" href="bienvenido.php">Salir</a>
      </li>
      
   
    </ul>
  </div>
  </div>
</nav>';

}else{

  echo' <nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="seleccionIglesia.php">seleccionar Iglesia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Usuarios.php">Agregar Usuarios</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="agregar_iglesia.php">Agregar Parroquias</a>
      </li>
      
   
    </ul>
  </div>
  </div>
</nav>';
}
  ?>
 

</div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-12 col-md-12">
<div class="card card-info">
<div class="card-header">Seleccione una Iglesia</div>
<div class="card-body">
<form method=post action=seleccionIglesia.php>
  <div class="row">
     
<div class="col-12 col-md-12 form-group">
     <div class="form-group">
            <label for="recipient-name" class="col-form-label">Iglesias</label>
             <select class="form-control js-example-basic-single" name="txtIglesia">
              <?php
                $conn=mysqli_connect('127.0.0.1','root','','diosesis');

$sql="select Iglesia from iglesias;";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
  
while ($row = $result->fetch_row()){

  echo"<option>$row[0]</option>";

} 

}

$conn->close();



              ?>
  
</select>
     
          </div>
    
</div>
  
  <button onclick="Abono()" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
   <i class="fa fa-circle-thin fa-stack-2x"></i>
  <i class="fa fa-plus fa-stack-1x"></i>
</span> Seleccionar </button>
 
</div>
<div class="row">
  
  </div>
</div>
</div>
</div>
</div>
</div>
<?php
if($_POST){
  
 $conn=mysqli_connect('127.0.0.1','root','','diosesis');
$iglesia=$_POST['txtIglesia'];
$sql="call select_Iglesia('".$iglesia."')";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
  
while ($row = $result->fetch_row()){

  $usuario=$row[0];
 $_SESSION['usuario']=$usuario;
 if($usuario){
  $_SESSION['igle']='Y';
  header("Location:homeAdmin.php");
 }
} 

}

$conn->close();

}
?>


</body>
 <script src ="js/jquery-3.2.1.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
  <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

			
</html> 