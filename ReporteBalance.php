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
  <body onload="Resultado(),ResultadoPasivo()">
  <div class="container">
<div class="row">
<div class="col-12">
  <?php
 session_start();
 $usuario="";
$usuario= $_SESSION['usuario'];
$igle= $_SESSION['igle'];

if($usuario==""){

   header("Location:loginb.php");
  

}

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
      <li class="nav-item ">
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
      <li class="nav-item active">
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
      <li class="nav-item dropdown active">
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
echo'<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="home.php"><i class="fa fa-home"></i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reportes
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
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
}

 
 ?>


</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-12 col-md-12">
<div class="card card-info">
</div>
</div>
</div>
</div>

<?php
$usuario =$_GET['usuario'];
$FechaFin=$_GET['fechaFinal'];
$Superavit=$_GET['superavit'];
echo'
<div class="container">

<div class="row">
<div class="col-12 col-md-12">
<div class="card card-info">
<div class="card-header"><p align="center"><b>Balance General al '.$FechaFin.' </b></p></div>
<div class="card-body">
<div class="row no-gutters">
<div class="col-12 pull-left">
  <p align="center"><b>Activo</b></p>
<table class="table table-striped id="mitablaiglesia"><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
';

$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){



$totalActivos=0;
$sql="call Get_Balance_Activos('".$usuario."','".$FechaFin."');";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
  if($row[6]){
$totalActivos=$totalActivos+$row[6];
}

echo"<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 
echo"<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Activo</td><td><b></td><td><b>$ ".$totalActivos."</td></tr>";

echo"</tbody></table>";
}

$conn->close();

}


?>
</div>

<div class="col-12 pull-right">
  <p align='center'><b>Pasivo</b></p>
<table class="table border-1 table-striped" id="mitablaiglesiaPasivo"><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
<?php
$usuario =$_GET['usuario'];
$FechaFin=$_GET['fechaFinal'];
$Superavit=$_GET['superavit'];
$contador=0;

$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
$totalPasivos=0;
$sql="call Get_Balance_Pasivo('".$usuario."','".$FechaFin."');";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
if($row[6]){
$totalPasivos=$totalPasivos+$row[6];
}
if($row[2]=='Cuenta Capital'){
  $row[7]=($Superavit+$row[7]);
}
echo"<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 

echo"<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Pasivo</td><td><b></td><td><b>$ ".($totalPasivos)."</td></tr>";

echo"</tbody></table>";


}

$conn->close();

}

?>
</div>


<div class="col-12 pull-right">
  <p align='center'><b>Capital</b></p>
<table class="table border-1 table-striped" id="mitablaiglesiaPasivo"><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
<?php
$usuario =$_GET['usuario'];
$FechaFin=$_GET['fechaFinal'];
$Superavit=$_GET['superavit'];
$contador=0;

$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
$totalCapital=0;
$sql="call Get_Balance_Capital('".$usuario."','".$FechaFin."');";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
if($row[6]){
$totalCapital=$totalCapital+$row[6];
}
if($row[2]=='Cuenta Capital'){
  $row[7]=($Superavit+$row[7]);
}
echo"<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 
if($Superavit>0){
echo"<tr><td>30103</td><td>Gananacia del Ejecicio</td><td></td><td></td><td></td><td>".$Superavit."</td><td></td></tr>";
}else{
 echo"<tr><td>30104</td><td>Perdida del Ejecicio</td><td></td><td></td><td></td><td>".$Superavit."</td><td></td></tr>";
 
}

echo"<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Capital</td><td><b></td><td><b>$ ".($totalCapital + $Superavit)."</td></tr>";
echo"<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Pasivo + Capital</td><td><b></td><td><b>$ ".($totalCapital + $Superavit + $totalPasivos)."</td></tr>";

echo"</tbody></table>";
echo '<div class="row" > <a href="ReporteBalancePdf.php?usuario='.$usuario.'&fechaFinal='.$FechaFin.'&superavit='.$Superavit.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg"><i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i></span> PDF </a></div>';


}

$conn->close();

}

?>
</div>

</div>
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
    function Resultado()
    {
      var tableReg = document.getElementById('mitablaiglesia');
      var cellsOfRow="";
      var found=false;
      var compareWith="";
      var sumCargos = 0;
      var sumAbonos=0;
     



       for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {
          var cuenta = (cellsOfRow[0].innerHTML); 
          if(j==5){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  = Number((cellsOfRow[5].innerText));
              if(Subtotal){
               sumCargos= sumCargos+Subtotal;
             }
             //alert(sumCargos);

            }       
          }    
        }  
      }
      
       document.getElementById("lbltotalActivos").innerHTML = '<h3>'+sumCargos+'</h3>' ;
    }
</script>

<script>
    function ResultadoPasivo()
    {
      var tableReg = document.getElementById('mitablaiglesiaPasivo');
      var cellsOfRow="";
      var found=false;
      var compareWith="";
      var sumCargos = 0;
      var sumAbonos=0;



       for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {
          var cuenta = (cellsOfRow[0].innerHTML); 
          if(j==5){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  = Number((cellsOfRow[5].innerText));
              if(Subtotal){
               sumCargos= sumCargos+Subtotal;
             }
             //alert(sumCargos);

            }       
          }    
        }  
      }
      document.getElementById("lbltotalPasivos").innerHTML = '<h3>'+sumCargos+'</h3>' ;
    }
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
  </body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script src ="js/jquery-3.2.1.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
  <script src="js/jquery.dataTables.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>



			
</html> 