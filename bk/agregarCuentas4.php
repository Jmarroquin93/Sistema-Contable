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
	   <link rel="stylesheet" href="themes/default.min.css"  type="text/css">
	   <script src ="js/alertify.js"></script>
<script src ="js/alertify.min.js"></script>
	 

  </head>
  <body>
<div class="container-fluid">
<div class="row">
<div class="col-12 col-md-12">
<div align="center">
<img src="images/banner1.jpg" class="img-fluid">
</div>
</div>
</div>




</div>
<div class="container">

<div class="row">
<div class="col-12 col-md-12">
<div class="card card-info">
<div class="card-header">Agregar Cuenta de 6 Digitos</div>
<div class="card-body">
<label id="lblmsg"></label>
<table class="table" id="mitablaiglesia"><thead>
<tr><td><b>CORRELATIVO</td><td><b>NOMBRE</td><td><b>TIPO CUENTA</td><td><b>AGREGAR</td><td><b>SUB CUENTAS</td></tr></thead><tbody>
<?php

$usuario=$_GET['usuario'];
$corr=$_GET['correlativo'];
$correlativo=$corr.'%';


$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="call Get_Cuentas_4_Digitos('".$usuario."','".$correlativo."');";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){

echo"<tr><td><b>$row[0]</td><td><b>$row[1]</td><td><b>$row[2]</td><td><b><button type='button' class='btn btn-success' onclick='add_2_cuentasModal($row[0],\"$row[1]\",\"$row[2]\")'>AGREGAR</button></td><td><b><a href=agregarCuentas6.php?usuario=".$usuario."&correlativo=$row[0] class='btn btn-warning'>SUB CUENTAS</a></td></tr>";
} 
echo"</tbody></table>";
}

$conn->close();

}


?>

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