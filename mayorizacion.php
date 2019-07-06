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
      <li class="nav-item ">
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
<div class="card-header">Agregar Datos Generales de Partida</div>
<div class="card-body">
<form method=post action=mayorizacion.php>
  <div class="row">
     <div class="col-4 col-md-4 ">
    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha Inicial</label>
      <input type="date" class="form-control " name="txtFechaInicio">
  </div>
</div>
 <div class="col-4 col-md-4 ">
    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha Final</label>
      <input type="date" class="form-control " name="txtFechaFin" >
  </div>
</div>
<div class="col-4 col-md-4 form-group">
     <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cuenta</label>
             <select class="form-control js-example-basic-single" name="txtCuenta">
              <?php
                $conn=mysqli_connect('127.0.0.1','root','','diosesis');

$sql="call Transaccionales('".$usuario."')";

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
</span> Generar</button>
 
</div>
<div class="row">
  
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-12 col-md-12">
<div class="card card-info">
<div class="card-header">Mayorizacion  <?php if($_POST){ echo' de '.$cuenta=$_POST['txtCuenta'].'<b> desde '.$FechaInicio=$_POST['txtFechaInicio'].' hasta '.$FechaFin=$_POST['txtFechaFin'].'</b>';} ?> </div>
<div class="card-body">
  <div class="row">
  
      <?php

$FechaInicio="";
$FechaFin="";

$cuenta ="";


if($_POST){

$FechaInicio=$_POST['txtFechaInicio'];
$FechaFin=$_POST['txtFechaFin'];

$cuenta =$_POST['txtCuenta'];
$saldoInicial=0;


echo'<table class="table" id="mitablaiglesia" width="100%"><thead>
<tr>
<td width="10%"><b>FECHA</td>
<td width="60%"><b>DESCRIPCION</td>
<td width="15%" class="bordito-b"><b>CARGOS</td>
<td width="15%" class="bordito-b"><b>ABONOS</td>

</tr>
</thead><tbody>';



$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
$FechaAnterior= date("Y-m-d",strtotime($FechaInicio."- 1 days")); 
$sqla = "call Get_Saldo('".$usuario."','".$cuenta."','".$FechaAnterior."')";
$resulta=$conn->query($sqla);
if(mysqli_num_rows($resulta)>0 ){
while ($row = $resulta->fetch_row()){
 $SaldoInicalN=$row[1];

}
}
$conn->close();
}
$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
$sql="call mayorizacion('".$usuario."','".$FechaInicio."','".$FechaFin."','".$cuenta."');";

$result=$conn->query($sql);
$totalCargos=0;
$totalAbonos=0;
$saldoInicial=0;
$conta=1;
$resultado=0;
$html='';

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
if($row[2]){
$totalCargos=$totalCargos+$row[2];
}
if($row[3]){
  $totalAbonos=$totalAbonos+$row[3];
}
$tipoSaldo=$row[7];
$saldoActual=$row[8];
$retroActiva=$row[9];
$tipoReporte=$row[10];


$html.="<tr><td>$row[4]</td><td>$row[11]</td><td class='bordito-r '> $ $row[2]</td><td>$ $row[3]</td></tr>";
} 

if($tipoReporte==1){
  if($tipoSaldo==1){
  if($retroActiva==0){

$totalCargosSaldoInicial=$totalCargos+$SaldoInicalN;
$html.="<tr><td></td><td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargosSaldoInicial."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonos." </td></tr>";
}else{
  $totalAbonosSaldoInicial=$totalAbonos+$SaldoInicalN;
$html.="<tr><td></td><td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargos."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonosSaldoInicial." </td></tr>";

}
}else{
  if($retroActiva==0){
  
$totalAbonosSaldoInicial=$totalAbonos+$SaldoInicalN;
$html.="<tr><td></td><td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargos."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonosSaldoInicial." </td></tr>";
}else{
  $totalCargosSaldoInicial=$totalCargos+$SaldoInicalN;
$html.="<tr><td></td><td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargosSaldoInicial."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonos." </td></tr>";

}

}

if($tipoSaldo==1){
if($retroActiva==0){

$resultado=$totalCargosSaldoInicial-$totalAbonos;
$resultado =number_format($resultado, 2, '.', '');

if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$ ".$resultado."</td><td><b></td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}

}else{

$resultado=$totalAbonosSaldoInicial-$totalCargos;
  $resultado =number_format($resultado, 2, '.', '');
if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$".$resultado."</td><td><b></td></tr>";
}

}



}else{
if($retroActiva==0){
  $resultado=$totalAbonosSaldoInicial-$totalCargos;
  $resultado =number_format($resultado, 2, '.', '');
if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$".$resultado."</td><td><b></td></tr>";
}
}else{
$resultado=$totalCargosSaldoInicial-$totalAbonos;
$resultado =number_format($resultado, 2, '.', '');

if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$ ".$resultado."</td><td><b></td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}

}
}

////////////////
if($tipoSaldo==1){
  if($retroActiva==0){
$html.="</tbody></table>";

echo"<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '>$ ".$SaldoInicalN."</td><td></td></tr>";
echo $html;

$htmlFinal="<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '>$ ".$SaldoInicalN."</td><td></td></tr>";
$htmlFinal.=$html;
echo '<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';
} else{
  $html.="</tbody></table>";

echo"<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '></td><td>$ ".$SaldoInicalN."</td></tr>";
echo $html;

$htmlFinal="<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '>$ ".$SaldoInicalN."</td><td></td></tr>";
$htmlFinal.=$html;
echo'<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';

}

}else{
  if($retroActiva==0){


$html.="</tbody></table>";

echo"<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '></td><td>$ ".$SaldoInicalN."</td></tr>";
echo $html;

$htmlFinal="<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '>$ ".$SaldoInicalN."</td><td></td></tr>";
$htmlFinal.=$html;
echo'<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';
}else{
$html.="</tbody></table>";

echo"<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '>$ ".$SaldoInicalN."</td><td></td>/tr>";
echo $html;

$htmlFinal="<tr><td></td><td>Saldo Inicial</td><td class='bordito-r '>$ ".$SaldoInicalN."</td><td></td></tr>";
$htmlFinal.=$html;
echo '<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';

}
}

}else{





if($tipoSaldo==1){
  if($retroActiva==0){

$totalCargosSaldoInicial=$totalCargos;
$html.="<tr><td><td></td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargosSaldoInicial."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonos." </td></tr>";
}else{
  $totalAbonosSaldoInicial=$totalAbonos;
$html.="<tr><td></td><td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargos."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonosSaldoInicial." </td>/tr>";

}
}else{
  if($retroActiva==0){
  
$totalAbonosSaldoInicial=$totalAbonos;
$html.="<tr><td></td><td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargos."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonosSaldoInicial." </td></tr>";
}else{
  $totalCargosSaldoInicial=$totalCargos;
$html.="<tr><td></td><td><b>Totales</td><td  style='border-top: 1px solid black;'class='bordito-r bordito-b'><b>$ ".$totalCargosSaldoInicial."</td><td style='border-top: 1px solid black;' class='bordito-b'><b>$ ".$totalAbonos." </td></tr>";

}

}

if($tipoSaldo==1){
if($retroActiva==0){

$resultado=$totalCargosSaldoInicial-$totalAbonos;
$resultado =number_format($resultado, 2, '.', '');

if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$ ".$resultado."</td><td><b></td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}

}else{

$resultado=$totalAbonosSaldoInicial-$totalCargos;
  $resultado =number_format($resultado, 2, '.', '');
if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$".$resultado."</td><td><b></td></tr>";
}

}



}else{
if($retroActiva==0){
  $resultado=$totalAbonosSaldoInicial-$totalCargos;
  $resultado =number_format($resultado, 2, '.', '');
if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$".$resultado."</td><td><b></td></tr>";
}
}else{
$resultado=$totalCargosSaldoInicial-$totalAbonos;
$resultado =number_format($resultado, 2, '.', '');

if($resultado>0){
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b>$ ".$resultado."</td><td><b></td></tr>";
}
else{
$html.="<tr><td></td><td><b>Saldo</td><td class='bordito-r'><b></td><td><b>$ ".$resultado."</td></tr>";
}

}
}


if($tipoSaldo==1){
  if($retroActiva==0){
$html.="</tbody></table>";

echo $html;

$htmlFinal=$html;
echo '<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';
} else{
  $html.="</tbody></table>";

echo $html;

$htmlFinal=$html;
echo'<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';

}

}else{
  if($retroActiva==0){


$html.="</tbody></table>";

echo $html;

$htmlFinal=$html;
echo'<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';
}else{
$html.="</tbody></table>";

echo $html;

$htmlFinal=$html;
echo '<a href="Reporte1.php?usuario='.$usuario.'&fechaInicial='.$FechaInicio.'&fechaFinal='.$FechaFin.'&cuenta='.urlencode($cuenta).'&htmlFinal='.$htmlFinal.'" class="btn btn-success btn-block" type=submit><span class="fa-stack fa-lg">
  <i class="fa fa-arrow-circle-down fa-stack-2x" aria-hidden="true"></i>
</span> Generar PDF</a>';

}
}







}


}

$conn->close();

}


}




?>    


</div>
</div>
</div>
</div>
</div>
</div>


</body>
 <script src ="js/jquery-3.2.1.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
  <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

			
</html> 