
<?php

session_start();
 $usuario="";
$usuario= $_SESSION['usuario'];

$db= new PDO('mysql:host=localhost;dbname=diosesis','root','');
$page= isset($_GET['p'])?$_GET['p']:'';

if($page=='add'){

$usuario = $_POST['txtusuario'];
$password = $_POST['txtpassword'];
$iglesia = $_POST['txtiglesia'];
$rol = $_POST['txtrol'];


$stmt=$db->prepare("insert into login(Id_login,Usuario,Password,Id_rol,Id_iglesia) values('',?,?,?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$password);
$stmt->bindParam(3,$rol);
$stmt->bindParam(4,$iglesia);
$stmt->execute();

 header("Location:bienvenido.php");



}if($page=='add_iglesia'){

$iglesia = $_POST['txtIglesia'];
$municipio = $_POST['drowMunicipio'];

$stmt=$db->prepare("call Agregar_Iglesia(?,?);");
$stmt->bindParam(1,$iglesia);
$stmt->bindParam(2,$municipio);
$stmt->execute();

}
if($page=='create_Catalog'){


$stmt=$db->prepare("call create_Catalog();");
$r=$stmt->execute();
if($r){
  echo 0;
} else{
  echo 1;
  
}

}


if($page=='agregar_partida'){
 

$tipoDoc = $_POST['tipoDoc'];
$nDoc = $_POST['nDoc'];
$proveedor = $_POST['proveedor'];
$descripcion = $_POST['descripcion'];
$fecha = $_POST['fecha'];





$stmt=$db->prepare("call Add_partida(?,?,?,?,?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$tipoDoc);
$stmt->bindParam(3,$nDoc);
$stmt->bindParam(4,$proveedor);
$stmt->bindParam(5,$descripcion);
$stmt->bindParam(6,$fecha);
$stmt->execute();

}

if($page=='add_departamento'){

$departamento = $_POST['txtDepartamento'];


$stmt=$db->prepare("call Agregar_Departamento(?);");
$stmt->bindParam(1,$departamento);
$stmt->execute();

}
if($page=='update_partida'){

$sumCargos = $_POST['sumCargos'];


$stmt=$db->prepare("call update_partida(?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$sumCargos);

$stmt->execute();

}

if($page=='add_usuario'){
$usuario = $_POST['txtUsuario'];
$user=null;
$conn=mysqli_connect('127.0.0.1','root','','diosesis');

if($conn){

  

$sql="select Usuario from login where Usuario='".$usuario."'";

$result= $conn->query($sql);

if(mysqli_num_rows($result)>0){

while($row=$result->fetch_row()){

$user="$row[0]";

}


}
}
if(!$user){

$nombre = $_POST['txtNombre'];
$apellido = $_POST['txtApellido'];
$correo = $_POST['txtCorreo'];
$telefono = $_POST['txtTelefono'];
$usuario = $_POST['txtUsuario'];
$contrasena = $_POST['txtPassword'];
$iglesia = $_POST['drowIglesia'];
$rol = $_POST['drowRol'];
$tipo = $_POST['drowTipo'];
$estado = $_POST['drowEstado'];
$nit = $_POST['txtNit'];
$ord_presbiteral = $_POST['txtFecha_Ord_Pres'];
$ord_diaconal = $_POST['txtFecha_Ord_Dia'];
$fecha_nacimiento = $_POST['txtFecha_Nac'];

$stmt=$db->prepare("call agregar_usuario(?,?,?,?,?,?,?,?,?,?,?,?,?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$contrasena);
$stmt->bindParam(3,$nombre);
$stmt->bindParam(4,$apellido);
$stmt->bindParam(5,$correo);
$stmt->bindParam(6,$telefono);
$stmt->bindParam(7,$iglesia);
$stmt->bindParam(8,$rol);
$stmt->bindParam(9,$tipo);
$stmt->bindParam(10,$estado);
$stmt->bindParam(11,$nit);
$stmt->bindParam(12,$fecha_nacimiento);
$stmt->bindParam(13,$ord_diaconal);
$stmt->bindParam(14,$ord_presbiteral);



$stmt->execute();

echo 0;

}else{

  echo 1;
}

}


if($page=='add_municipio'){

$municipio = $_POST['txtMunicipio'];


$stmt=$db->prepare("call Agregar_Vicaria(?);");
$stmt->bindParam(1,$municipio);
$r=$stmt->execute();
if($r){
	echo 0;
} else{
	echo 1;
	
}

}

if($page=='agregar_detalle_partida'){

$cuenta = $_POST['cuenta'];
$tipoTransaccion =  $_POST['tipoTransaccion'];
$Subtotal = $_POST['Subtotal'];


$stmt=$db->prepare("call Add_detalle_partida(?,?,?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$cuenta);
$stmt->bindParam(3,$tipoTransaccion);
$stmt->bindParam(4,$Subtotal);
$r=$stmt->execute();

if($r){
  echo 0;
} else{
  echo 1;
  
}

}

if($page=='agregar_detalle_partida_especial'){

$cuenta = $_POST['cuenta'];
$tipoTransaccion =  $_POST['tipoTransaccion'];
$Subtotal = $_POST['Subtotal'];


$stmt=$db->prepare("call Add_detalle_partida_especial(?,?,?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$cuenta);
$stmt->bindParam(3,$tipoTransaccion);
$stmt->bindParam(4,$Subtotal);
$r=$stmt->execute();

if($r){
  echo 0;
} else{
  echo 1;
  
}

}

if($page=='updateEstipendio'){

$id = $_POST['id'];
$estipendio =  $_POST['estipendio'];
$parroquia = $_POST['parroquia'];
$ministro = $_POST['ministro'];


$stmt=$db->prepare("call updateEstipendios(?,?,?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$id);
$stmt->bindParam(3,$parroquia);
$stmt->bindParam(4,$ministro);
$r=$stmt->execute();

if($r){
  echo 0;
} else{
  echo 1;
  
}

}


if($page=='updateRetroactiva'){

$cuenta = $_POST['cuenta'];


$stmt=$db->prepare("call Update_Retroactiva(?,?);");
$stmt->bindParam(1,$usuario);
$stmt->bindParam(2,$cuenta);
$r=$stmt->execute();
if($r){
  echo 0;
} else{
  echo 1;
  
}

}


if($page=='eliminar_iglesia'){

$id = $_POST['id'];



$stmt=$db->prepare("call Eliminar_Iglesia(?);");
$stmt->bindParam(1,$id);
$r=$stmt->execute();

if($r){
	echo 0;
} else{
	echo 1;
	
}


	


}


if($page=='GuardarEdit_iglesia'){

$id = $_POST['txtId'];
$iglesia = $_POST['txtEditIglesia'];
$municipio = $_POST['drowEditMunicipio'];


$stmt=$db->prepare("call Update_Iglesia(?,?,?);");
$stmt->bindParam(1,$id);
$stmt->bindParam(2,$iglesia);
$stmt->bindParam(3,$municipio);
$stmt->execute();
if($r){
	echo 0;
} else{
	echo 1;
	
}

}
if($page=='add_tipo_doc'){
  $documento = $_POST['documento'];
  $find=null;
  $conn=mysqli_connect('127.0.0.1','root','','diosesis');

if($conn){

  

$sql="select Tipo_documento from tipo_documentos where Tipo_documento=('".$documento."')";

$result= $conn->query($sql);

if(mysqli_num_rows($result)>0){

while($row=$result->fetch_row()){

$find="$row[0]";

}


}
}
if(!$find){
$stmt=$db->prepare("insert into tipo_documentos(Id_tipo_documento,Tipo_documento) values(NULL,?);");
$stmt->bindParam(1,$documento);
$r=$stmt->execute();
if($r){
  echo 0;
} 
}else{
  echo 1;
}


}

if($page=='add_cuenta_4'){
$find=null;
$cor = $_POST['correlativo'];
$Correlativo=$cor.'%';
$TipoCuenta =  $_POST['TipoCuenta'];
$Cuenta =  $_POST['Cuenta'];
$conn=mysqli_connect('127.0.0.1','root','','diosesis');

if($conn){

  

$sql="call Get_CuentaName('".$usuario."','".$Cuenta."')";

$result= $conn->query($sql);

if(mysqli_num_rows($result)>0){

while($row=$result->fetch_row()){

$find="$row[0]";

}


}
}
if(!$find){

if(((strlen($Correlativo))>3)&&((strlen($Correlativo))<5)){

$stmt=$db->prepare("call add_cuenta_6(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();
if($r){
	echo 0;
} else{
 $stmt=$db->prepare("call Update_6_01(?,?)"); 
 $stmt->bindParam(1,$usuario);
 $stmt->bindParam(2,$Correlativo);
 $r=$stmt->execute();

$Correlativo=$cor.'01';
$stmt=$db->prepare("call add_cuenta_6_01(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();


	
}

}elseif(((strlen($Correlativo))>5)&&((strlen($Correlativo))<7)){

$stmt=$db->prepare("call add_cuenta_8(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();
if($r){
  echo 0;
} else{
  $stmt=$db->prepare("call Update_8_01(?,?)"); 
$stmt->bindParam(1,$usuario);
 $stmt->bindParam(2,$Correlativo);
 $r=$stmt->execute();

$Correlativo=$cor.'01';
$stmt=$db->prepare("call add_cuenta_8_01(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();


  
}

}elseif(((strlen($Correlativo))>7)&&((strlen($Correlativo))<9)){

$stmt=$db->prepare("call add_cuenta_10(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();
if($r){
  echo 0;
} else{
 
 $stmt=$db->prepare("call Update_10_01(?,?)"); 
 $stmt->bindParam(1,$usuario);
 $stmt->bindParam(2,$Correlativo);
 $r=$stmt->execute();

$Correlativo=$cor.'01';
$stmt=$db->prepare("call add_cuenta_10_01(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();


  
}

}elseif(((strlen($Correlativo))>9)&&((strlen($Correlativo))<11)){

$stmt=$db->prepare("call add_cuenta_11(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();
if($r){
  echo 0;
} else{
 
 $stmt=$db->prepare("call Update_11_01(?,?)"); 
 $stmt->bindParam(1,$usuario);
 $stmt->bindParam(2,$Correlativo);
 $r=$stmt->execute();

$Correlativo=$cor.'01';
$stmt=$db->prepare("call add_cuenta_11_01(?,?,?,?);");
$stmt->bindParam(1,$Correlativo);
$stmt->bindParam(2,$TipoCuenta);
$stmt->bindParam(3,$usuario);
$stmt->bindParam(4,$Cuenta);
$r=$stmt->execute();


  
}

}
echo 0;
}
else{
  echo 1;
}


}

if($page=='add_4_digitosModal'){

	$correlativo = $_POST['correlativo'];
	$NombrePadre = $_POST['NombrePadre'];
	$TipoCuenta =  $_POST['TipoCuenta'];


echo'<div class="modal fade" id="CuentasModal" tabindex="-1" role="dialog" aria-labelledby="CuentasModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Cuenta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
     <form>
     <div class="form-group">
            <label for="recipient-name" class="col-form-label">Correlativo Padre</label>
            <input type="text" class="form-control "  value ='.$correlativo.' id="txtCorrelativoPadre" disabled="false">
     
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cuenta Padre</label>
            <input type="text" class="form-control "  value ="'.$NombrePadre.'" id="txtCuentaPadre" disabled="false">
     
          </div>

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo Cuenta</label>
            <input type="text" class="form-control "  value ='.$TipoCuenta.' id="txtTipoCuenta" disabled="false">
     
          </div>
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre Cuenta</label>
            <input type="text" class="form-control " id="txtCuenta" placeholder="Cuenta">
     
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button ype="button" class="btn btn-primary" onclick="addCuenta()" id="btnGuardar" data-dismiss="modal" >Guardar</button>
      </div>
    </div>
  </div>
</div>
';


}

if($page=='GetEstipendio'){
$id = $_POST['id'];
$parroquia = $_POST['parroquia'];
$ministro = $_POST['ministro'];
$estipendio = $_POST['estipendio'];


echo'<div class="modal fade" id="GetUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="GetUsuarioModal" aria-hidden="true">
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
            <label for="recipient-name" class="col-form-label">Id</label>
            <input type="text" class="form-control" value='.$id.' id="txtId" disabled>
    
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Estipendio</label>
            <input type="text" class="form-control" value=\''.$estipendio.'\' id="txtEstipendio" disabled>
      
          </div>
       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Parroquia</label>
            <input type="text" class="form-control" value='.$parroquia.' id="txtParroquia">
    
          </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ministro</label>
            <input type="text" class="form-control" value='.$ministro.' id="txtMinistro">
    
          </div>
       
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
       <button ype="button" class="btn btn-primary" onclick="updateEstipendio()" id="btnGuardar" data-dismiss="modal" >Guardar</button>

        
      </div>
    </div>
  </div>
</div>';
  
  }




if($page=='GetDetalleUsuarios'){
$id = $_POST['id'];

$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="call GetUsuario(".$id.");";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	
while ($row = $result->fetch_row()){


echo'<div class="modal fade" id="GetUsuarioModal" tabindex="-1" role="dialog" aria-labelledby="GetUsuarioModal" aria-hidden="true">
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
            <input type="text" class="form-control" value=\''.$row[1].'\' id="txtNombre" disabled>
			
          </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Apellido</label>
            <input type="text" class="form-control" value=\''.$row[2].'\' id="txtApellido" disabled>
			
          </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Correo</label>
            <input type="text" class="form-control" value='.$row[3].' id="txtCorreo" disabled>
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telefono</label>
            <input type="text" class="form-control" value='.$row[4].' id="txtTelefono" disabled>
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario</label>
            <input type="text" class="form-control" value='.$row[12].' id="txtUsuario" disabled>
		
          </div>
		   <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password</label>
            <input type="text" class="form-control" value='.$row[13].' id="txtPassword" disabled>
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">NIT</label>
            <input type="text" class="form-control" value='.$row[8].' id="txtNit" disabled>
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Ordenacion Presbiteral</label>
            <input type="text" class="form-control" value='.$row[7].' id="txtFecha_Ord_Pres" disabled>
		
          </div>
		     <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Ordenacion Diaconal</label>
            <input type="text" class="form-control" value='.$row[6].' id="txtFecha_Ord_Dia" disabled>
		
          </div>
		    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha de Nacimiento</label>
            <input type="text" class="form-control" value='.$row[5].' id="txtFecha_Nac" disabled>
		
          </div>
		   <div class="form-group">
           
            <div class="form-group">
			 <label for="recipient-name" class="col-form-label">Parroquia</label>
	  <input type="text" class="form-control" value=\''.$row[10].'\' id="drowIglesia" disabled>
      
</div>
          </div>
		   <div class="form-group">
           
            <div class="selector-estado">
			 <label for="recipient-name" class="col-form-label">Estado</label>
	  <select class="form-control form-control" id="drowEstado" disabled>
	  <option>'.$row[9].'</option>
	  <option>Inactivo</option>
      </select>
</div>
          </div>
		    <div class="form-group">
           
            <div class="form-group">
			 <label for="recipient-name" class="col-form-label">tipo de registro</label>
	  <input type="text" class="form-control form-control"  value= '.$row[11].' id="drowTipo" disabled>
      
</div>
          </div>
		    <div class="form-group">
           
            <div class="form-group">
			 <label for="recipient-name" class="col-form-label">Rol</label>
	  <input type="text" class="form-control form-control" value='.$row[14].' id="drowRol" disabled>
      
</div>
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>';
	

} 

}


$conn->close();

}



	}



 if ($page=='municipios'){
	
	$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="select Vicaria from vicarias";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	
while ($row = $result->fetch_row()){

	echo"<option>$row[0]</option>";

} 

}

$conn->close();

}
	
}

if ($page=='departamentos'){
	
	$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="select Departamento from departamentos";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	
while ($row = $result->fetch_row()){

	echo"<option>$row[0]</option>";

} 

}

$conn->close();

}
	
}
if ($page=='editar_iglesia'){
	
	$id = $_POST['id'];
	$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="select Id_iglesia,Iglesia from iglesias where Id_iglesia=".$id.";";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	
while ($row = $result->fetch_row()){


echo'<div class="modal fade" id="EditarIglesiaModal" tabindex="-1" role="dialog" aria-labelledby="EditarIglesiaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Iglesia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  
	   <form>
	    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id Parroquia</label>
            <input type="text" class="form-control" id="txtId"  disabled="disabled"value="'.$row[0].'">
          </div>
	   
          <div class="form-group">
           
            <div class="selector-municipios">
			 <label for="recipient-name" class="col-form-label">Vicaria</label>
	  <select class="form-control form-control" id="drowEditMunicipio">
      </select>
</div>
          </div>
		  <div class="form-group">
            <label for="recipient-name" class="col-form-label">Parroquia</label>
            <input type="text" class="form-control" id="txtEditIglesia" value="'.$row[1].'">
          </div>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button ype="button" class="btn btn-primary" onclick="GuardarEditIglesia()" id="btnEditGuardar" >Guardar</button>
      </div>
    </div>
  </div>
</div>';
	

} 

}


$conn->close();

}
	
}

if($page=='otro'){

$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="call llamar_iglesia();";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){

	echo"<tr><td><b>$row[0]</td><td><b>$row[1]</td><td><b>$row[2]</td><td><b><button type='button' class='btn btn-danger'>Eliminar</button></td><td><b><button type='button' class='btn btn-primary'>Editar</button></td></tr>";
} 

}

$conn->close();

}





}

if ($page=='iglesias'){
	
	$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="call todas_iglesias()";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	
while ($row = $result->fetch_row()){

	echo"<option>$row[0]</option>";

} 

}

$conn->close();

}
	
}

if ($page=='tipo_registro'){
	
	$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="select tipo_registro from tipo_registro";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	
while ($row = $result->fetch_row()){

	echo"<option>$row[0]</option>";

} 

}

$conn->close();

}
	
}


if ($page=='rol'){
	
	$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="select Roles from roles";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	
while ($row = $result->fetch_row()){

	echo"<option>$row[0]</option>";

} 

}

$conn->close();

}
	
}




?>





