
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

	   <script src ="js/alertify.js"></script>
<script src ="js/alertify.min.js"></script>
	 

  </head>
  <body onload="GetMunicipios()">
  <div class="container">
<div class="row">
<div class="col-12">
<?php

session_start();
 $usuario="";
$usuario= $_SESSION['usuario'];
$igle= $_SESSION['igle'];
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
      <li class="nav-item">
        <a class="nav-link" href="seleccionIglesia.php">Seleccionar Iglesia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Usuarios.php">Agregar Usuarios</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="agregar_iglesia.php">Agregar Parroquias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Catalogo.php">Catalogo</a>
      </li>
      <li class="nav-item ">
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
      <li class="nav-item ">
        <a class="nav-link" href="seleccionIglesia.php">seleccionar Iglesia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Usuarios.php">Agregar Usuarios</a>
      </li>
       <li class="nav-item active">
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
<div class="card-header">Admnistracion de Iglesias</div>
<div class="card-body">

<table class="table" id="mitablaiglesia"><thead>
<label id="lblmsg"></label>
<tr><td><b>PARROQUIA</td><td><b>VICARIA</td><td><b>ELIMINAR</td><td><b>ACTUALIZAR</td></tr></thead><tbody>
<?php


$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="call llamar_iglesia();";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){

echo"<tr><td><b>$row[1]</td><td><b>$row[2]</td><td><b><button type='button' class='btn btn-danger' onclick='Eliminar($row[0])'>Eliminar</button></td><td><b><button type='button' class='btn btn-primary' language='javascript' onclick='EditarIglesia($row[0])'>Editar</button></td></tr>";
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

<div class="card card-info">
<div class="card-header">Agregar Elementos</div>
<div class="card-body">
<div class="row">


<button type="button" onclick="GetMunicipios()" class="btn btn-success btn-block" data-toggle="modal" data-target="#IglesiaModal"><span class="fa-stack fa-lg">
   <i class="fa fa-circle-thin fa-stack-2x"></i>
  <i class="fa fa-plus fa-stack-1x"></i>
</span> Agregar</button>
</div>


<!-- Modal -->
<div class="modal fade" id="MunicipioModal" tabindex="-1" role="dialog" aria-labelledby="MunicipioModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Vicaria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	   <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Vicaria</label>
            <input type="text" class="form-control" id="txtMunicipio">
          </div>
		 <div class="form-group">
           
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="GuardarMunicipio()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<div class="col">

<!-- Modal -->
<div class="modal fade" id="IglesiaModal" tabindex="-1" role="dialog" aria-labelledby="IglesiaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Parroquia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	   <form>
          <div class="form-group">
           
            <div class="selector-municipios">
			 <label for="recipient-name" class="col-form-label">Vicaria</label>
	  <select class="form-control form-control" id="drowMunicipio">
      </select>
</div>
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Parroquia</label>
            <input type="text" class="form-control is-invalid" id="txtIglesia" placeholder="Parroquia" required>
			<div class="invalid-feedback">
        Ingrese el nombre de Parroquia
      </div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button ype="button" class="btn btn-primary" onclick="GuardarIglesia()" id="btnGuardar" >Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
 function GetMunicipios() {
    $.ajax({
	 type: "POST",
     url: "server.php?p=municipios",
     success: function(response)
      {
        $('.selector-municipios select').html(response).fadeIn();
      }
            });
 
                          };	
</script>
 
<script>
 function EditarIglesia(p) {
	 var id=p;
	 $.ajax({
	 type: "POST",
     url: "server.php?p=editar_iglesia",
	  data:"id="+id,
     success: function(response)
        {
          $('#lblmsg').html(response);
		  if(response!=""){
			  GetMunicipios();
			   $('#EditarIglesiaModal').modal('show');
			  
		  }
        }
             });
	
 
                             };
</script>


<script>
 function GuardarEditIglesia() {
	 var municipio=$('#drowEditMunicipio').val();
	  var iglesia=$('#txtEditIglesia').val();
	  var id=$('#txtId').val();
	
	 $.ajax({
	 type: "POST",
     url: "server.php?p=GuardarEdit_iglesia",
	  data:"txtId="+id+"&txtEditIglesia="+iglesia+"&drowEditMunicipio="+municipio,
	  success:function(response)
        {
			if(response==1){
				
       alert('Error al Editar Iglesia');
			} else{
				
				alertify.alert('Exito', 'Iglesia Editada con exito!!').set('onok', function(closeEvent){javascript:document.location.reload();} ); ;
        
			} 
        }
    
             });
	
 
                             };
</script>



<script text='text/javascript'>
 function Eliminar(p) {
	 var id=p;
    $.ajax({
		 type: "POST",
         url:"server.php?p=eliminar_iglesia",
         data:"id="+id,
		 success:function(response)
        {
			if(response==1){
				alertify.alert('Error!', 'Error al eliminar Iglesia!');
		
			} else{
				
				alertify.alert('Exito', 'Iglesia Eliminado con exito!!').set('onok', function(closeEvent){javascript:document.location.reload();} ); ;
				
				
           
                 
           
      };
				
				
				
		
        }
             }); 
                             };
</script>
<script text='text/javascript'>
function exito(){
	alertify.alert('Iglesia Eliminada con exito');
	
}
</script>

	




 
<script text="text/javascript">
 function GuardarIglesia(){
	 


var municipio= $('#drowMunicipio').val();
var iglesia = $('#txtIglesia').val();

if(municipio != "" && iglesia  != ""){

$.ajax({

  type: "POST",
  url:"server.php?p=add_iglesia",
  data:"txtIglesia="+iglesia+"&drowMunicipio="+municipio,
  	 success:function(response)
        {
			if(response==1){
			
		
			} else{
				
				
				
         
                 
           
      };
				
				
				
		
        }
 
});

 setTimeout(function(){
      // Recorremos todas las filas con contenido de la tabla
        
    $.ajax({
   type: "POST",
     url: "server.php?p=create_Catalog",
   
    success: function(response)
        {
        alertify.alert('Exito', 'Iglesia Creada Exitosamente!!').set('onok', function(closeEvent){javascript:document.location.reload();} ); 
     
        }
         });  
      },3000);


}

 }

 
 </script>
 
  <script text="text/javascript">
 function GuardarDepartamento(){
	 


var departamento= $('#txtDepartamento').val();


if(departamento != ""){

$.ajax({

  type: "POST",
  url:"server.php?p=add_departamento",
  data:"txtDepartamento="+departamento
 
});
javascript:document.location.reload();
alert("Datos Guardados");
 $('#DepartamentoModal').modal('dispose');
  

}
 
 else{
	 
	 alert("Error al ingresar, Todos los campos son necesarios");
	 
 }
 };
 
 </script>
 
   <script text="text/javascript">
 function GuardarMunicipio(){
	 


var municipio= $('#txtMunicipio').val();



if(municipio != ""){

$.ajax({

  type: "POST",
  url:"server.php?p=add_municipio",
  data:"txtMunicipio="+municipio,
  success:function(response){
	  if(response==1){
		  alert('Error al Agregar Municipio');
	  } else{
		  
	javascript:document.location.reload();
     alert("Datos Guardados");
    $('#MunicipioModal').modal('dispose');
	  }
  }
 
});

  

}
 
 else{
	 
	 alert("Error al ingresar, Todos los campos son necesarios");
	 
 }
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