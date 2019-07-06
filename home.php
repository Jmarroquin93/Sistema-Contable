
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css"  type="text/css">
  
   <link rel="stylesheet" href="css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="css/alertify.css" type="text/css">
    <link rel="stylesheet" href="css/alertify.min.css"  type="text/css">
     <link rel="stylesheet" href="themes/default.min.css"  type="text/css">
     <script src ="js/alertify.js"></script>
<script src ="js/alertify.min.js"></script>
   

  </head>
  <body>
<?php
 session_start();
 $usuario="";
$usuario= $_SESSION['usuario'];

if($usuario==""){

   header("Location:loginb.php");
  

}
 
 ?>
<div class="container">
<div class="row">
<div class="col-12">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Catalogo.php">Catalogo</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="agregarCuentas.php">Agregar Cuentas</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="estipendios.php">Estipendios</a>
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
</nav>
</div>
</div>
</div>


<div class="container">
<div class="row">
<div class="col-12 col-md-12">
<div align="center">
<img src="img/conta.jpg" class="img-fluid">
<br><br>
</div>
</div>
</div>

</div>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
      <div class="card">
        
        <div class="card-body">
        <p align="center"><img class="card-img-top" src="images/accounting.png" alt="Card image cap"></p>
        <hr />
        <h5 class="card-title">Balance Inicial</h5>
        <p class="card-text">Aqui Puedes ver cual es tu Balance Inicial</p>
        <a href="Balance.php" class="btn btn-primary">Ir a Balance Inicial</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
      <div class="card">
        <div class="card-body">
        <p align="center"><img class="card-img-top" src="images/budget.png" alt="Card image cap"></p>  
        <hr />
        <h5 class="card-title">Estado de Resultados</h5>
        <p class="card-text"> calcula tu estado de resultado aqui</p>
        <a href="EstadoResultado.php" class="btn btn-primary">Ir a Estado de Resultado</a>
        </div>
      </div>
    </div>
     <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
      <div class="card">
        <div class="card-body">
        <p align="center"><img class="card-img-top" src="images/budget.png" alt="Card image cap"></p>  
        <hr />
        <h5 class="card-title">Agregar Cuentas</h5>
        <p class="card-text">Agrega Nuevas cuentas desde aqui</p>
        <a href="AgregarCuentas.php" class="btn btn-primary">Agregar Cuentas</a>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-4 col-lg-3 col-xl-3">
      <div class="card">
        <div class="card-body">
        <p align="center"><img class="card-img-top" src="images/calculator.png" alt="Card image cap"></p>
        <hr />
        <h5 class="card-title">Crear Partida</h5>
        <p class="card-text">Accedo directo para crear partidas</p>
        <a href="Partidas.php" class="btn btn-primary">Ir a Partidas</a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
 function add_2_cuentasModal(c,cp,tp) {
  var correlativo=c;
  var cuentaPadre=cp;
  var tipoCuenta = tp;
   $.ajax({
   type: "POST",
     url: "server.php?p=add_4_digitosModal",
     data:"correlativo="+correlativo+"&NombrePadre="+cuentaPadre+"&TipoCuenta="+tipoCuenta,
   
     success: function(response)
        {
          $('#lblmsg').html(response);

         $('#CuentasModal').modal('show');
        
    
        }
             });
  
 
                             };
</script>



<script>
 function addCuenta() {
  var correlativo=$('#txtCorrelativoPadre').val();
  var cuentaPadre=$('#txtCuentaPadre').val();
  var tipoCuenta=$('#txtTipoCuenta').val();
  var cuenta=$('#txtCuenta').val();

   $.ajax({
   type: "POST",
     url: "server.php?p=add_cuenta_4",
     data:"correlativo="+correlativo+"&TipoCuenta="+tipoCuenta+"&Cuenta="+cuenta,
   
     success: function(response)
        {
         alert('!exito');
        
    
        }
             });
  
 
                             };
</script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src ="js/jquery-3.2.1.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
  <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
<script type='text/javascript'>
$(document).ready(function(){

    $('#mitablaiglesia').DataTable();

}



    );

</script>

      
</html> 