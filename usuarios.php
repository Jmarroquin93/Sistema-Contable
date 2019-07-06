
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
      <link rel="stylesheet" href="css/font-awesome.css"  type="text/css">
<script src ="js/alertify.min.js"></script>
	 

  </head>
  <body onload="GetIglesias(),GetTipo_Registro(),GetRol()">
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
      <li class="nav-item ">
        <a class="nav-link" href="seleccionIglesia.php">Seleccionar Iglesia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
      <li class="nav-item ">
        <a class="nav-link" href="seleccionIglesia.php">seleccionar Iglesia <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
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
<div class="card-header">Admnistracion de Iglesias</div>
<div class="card-body">
<label id="lblmsg"></label>

<table class="table" id="mitablaiglesia" ><thead>
<label id="lblmsg"></label>
<tr><td>ID</td><td>NOMBRES</td><td>APELLIDOS</td><td>CORREO</td><td>USUARIO</td><td>VER DETALLE</td></tr></thead><tbody>
<?php




if($usuario==""){

   header("Location:loginb.php");
  

}else{



$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="call Usuarios_registrados();";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){

echo"<tr><td><b>$row[0]</td><td><b>$row[1]</td><td><b>$row[2]</td><td><b>$row[3]</td><td><b>$row[12]</td><td><b><button type='button' onclick='GetUsuaros($row[0])' class='btn btn-warning'>VER DETALLE</button></td></tr>";
} 
echo"</tbody></table>";
}

$conn->close();

}
}


?>

</div>
</div>
</div>
</div>

<div class="card card-info">
<div class="card-header">Mantenimiento a Usuarios</div>
<div class="card-body">
<div class="row">
<div class="col"><!-- Button trigger modal -->


<button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#UsuarioModal"><span class="fa-stack fa-lg">
   <i class="fa fa-circle-thin fa-stack-2x"></i>
  <i class="fa fa-plus fa-stack-1x"></i>
</span> Agregar</button>

<!-- Modal -->
<div class="modal fade" id="UsuarioModal" tabindex="-1" role="dialog" aria-labelledby="UsuarioModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	   <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="txtNombre">
			
          </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido</label>
            <input type="text" class="form-control" id="txtApellido">
			
          </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Correo</label>
            <input type="text" class="form-control" id="txtCorreo">
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telefono</label>
            <input type="text" class="form-control" id="txtTelefono">
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario</label>
            <input type="text" class="form-control" id="txtUsuario">
		
          </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="txtPassword">
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">NIT</label>
            <input type="text" class="form-control" id="txtNit">
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Ordenacion Presbiteral</label>
            <input type="date" class="form-control" id="txtFecha_Ord_Pres">
		
          </div>
		     <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Ordenacion Diaconal</label>
            <input type="date" class="form-control" id="txtFecha_Ord_Dia">
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="txtFecha_Nac">
		
          </div>
		   <div class="form-group">
           
            <div class="selector-iglesia">
			 <label for="recipient-name" class="col-form-label">Parroquia</label>
	  <select class="form-control form-control" id="drowIglesia">
      </select>
</div>
          </div>
		   <div class="form-group">
           
            <div class="selector-estado">
			 <label for="recipient-name" class="col-form-label">Estado</label>
	  <select class="form-control form-control" id="drowEstado">
	  <option>Activo</option>
	  <option>Inactivo</option>
      </select>
</div>
          </div>
		    <div class="form-group">
           
            <div class="selector-tipo_registro">
			 <label for="recipient-name" class="col-form-label">tipo de registro</label>
	  <select class="form-control form-control" id="drowTipo">
      </select>
</div>
          </div>
		    <div class="form-group">
           
            <div class="selector-rol">
			 <label for="recipient-name" class="col-form-label">Rol</label>
	  <select class="form-control form-control" id="drowRol">
      </select>
</div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="GuardarUsuario()">Guardar</button>
      </div>
    </div>
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
 function GetIglesias() {
    $.ajax({
	 type: "POST",
     url: "server.php?p=iglesias",
     success: function(response)
      {
        $('.selector-iglesia select').html(response).fadeIn();
      }
            });
 
                          };	
</script>
 
<script>
 function GetTipo_Registro() {
    $.ajax({
	 type: "POST",
     url: "server.php?p=tipo_registro",
     success: function(response)
        {
          $('.selector-tipo_registro select').html(response).fadeIn();
        }
             });
 
                             };
</script>

<script>
 function GetUsuaros(id) {

    $.ajax({
    type: "POST",
     url: "server.php?p=GetDetalleUsuarios",
     data:"id="+id,
   
     success: function(response)
        {
          $('#lblmsg').html(response);

         $('#GetUsuarioModal').modal('show');
        
    
        }   });
 
                             };
</script>

<script>
 function GetRol() {
    $.ajax({
	 type: "POST",
     url: "server.php?p=rol",
     success: function(response)
        {
          $('.selector-rol select').html(response).fadeIn();
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
				
				javascript:document.location.reload();
				 $('#EditarIglesiaModal').modal('dispose');
				alert('Iglesia Editada con exito');
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
 function GuardarUsuario(){
	 

var nombre= $('#txtNombre').val();
var apellido= $('#txtApellido').val();
var correo = $('#txtCorreo').val();
var telefono= $('#txtTelefono').val();
var usuario= $('#txtUsuario').val();
var contrasena= $('#txtPassword').val();
var iglesia = $('#drowIglesia').val();
var rol = $('#drowRol').val();
var estado = $('#drowEstado').val();
var tipo = $('#drowTipo').val();
var nit = $('#txtNit').val();
var ord_presbiteral = $('#txtFecha_Ord_Pres').val();
var ord_diaconal = $('#txtFecha_Ord_Dia').val();
var fecha_nacimiento = $('#txtFecha_Nac').val();


if(nombre != "" && iglesia  != "" && apellido  != "" && correo  != "" && telefono  != "" && usuario  != "" && contrasena  != "" && nit  != "" && ord_presbiteral  != "" && ord_diaconal  != "" && fecha_nacimiento  != ""){

$.ajax({

  type: "POST",
  url:"server.php?p=add_usuario",
  data:"txtNombre="+nombre+"&txtApellido="+apellido+"&txtCorreo="+correo+"&txtTelefono="+telefono+"&txtUsuario="+usuario+"&txtPassword="+contrasena+"&drowIglesia="+iglesia+"&drowRol="+rol+"&drowTipo="+tipo+"&drowEstado="+estado+"&txtNit="+nit+"&txtFecha_Ord_Pres="+ord_presbiteral+"&txtFecha_Ord_Dia="+ord_diaconal+"&txtFecha_Nac="+fecha_nacimiento,
  	 success:function(response)
        {
		
				if(response==0){
    alertify.alert('Exito', 'Usurio agregado con exito!!').set('onok', function(closeEvent){javascript:document.location.reload();} ); ;
     
        }else{
          alertify.alert('Error', 'Nombre de Usuario Existente!!').set('onok'); 
     

        }
		
		
				
			
         
                 

				
				
				
		
        }
 
});
}else{
  alertify.alert('Error', 'Todos los campos son necesarios!!').set('onok'); 
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
var departamento= $('#drowDepartamento').val();


if(municipio != "" && departamento!=""){

$.ajax({

  type: "POST",
  url:"server.php?p=add_municipio",
  data:"drowDepartamento="+departamento+"&txtMunicipio="+municipio,
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