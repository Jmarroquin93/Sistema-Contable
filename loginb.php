<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <script>

function Validar(){

  var usu = document.getElementsByName("login_username")[0].value;
  var con= document.getElementsByName("login_username")[0].value;

  if(usu.length==0|| con==0){


    alert("todos los campos son requeridos");
  }

}

function MsgError()
{  alert (" Usuario o contraseña incorrectos!!");
}
</script>
 
  </head>
  <body>
  
<div class="container">



<div class="row">
 <div class="col-4 col-md-3"></div>
  <div class="col-4 col-md-6">
  
  
   <?php
   session_start();

if($_POST){

  
  $usuario=$_POST['login_username'];
  $contra=$_POST['login_password'];
  $user="";
  $contr="";


  $conn=mysqli_connect('127.0.0.1','root','','diosesis');

  if($conn){

  

$sql="call validar_credenciales ('".$usuario."','".$contra."')";

$result= $conn->query($sql);

if(mysqli_num_rows($result)>0){

while($row=$result->fetch_row()){

$user="$row[0]";
$contr="$row[1]";
$rol = "$row[2]";


}


}


if(($usuario==$user)&&($contra==$contr)&&($usuario<>"")){
   $_SESSION['usuario']=$usuario;
    $_SESSION['igle']="";

if($rol==1){
header("Location:seleccionIglesia.php");
}else{
  header("Location:home.php");
}
  
 


  
} elseif($usuario=="" || $contra==""){
	
	echo'<div class="alert alert-success" role="alert"">
Todos los campos son requeridos

 
  
  

</div>';
	
}


else{
	
	echo'<div class="alert alert-success" role="alert"">
 Usuario o contraseña incorrectos, intentelo de nuevo

 
  
  

</div>';

  // echo'<script>MsgError()</script>';


}


  }


}


?>
  
  
  
                 
            <div class="card card-info" >
                    <div class="card-header">Sign In</div>     

                    <div class="card-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                         <form method = post action=loginb.php>
                                    
                            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="login_username" type="text" class="form-control" value="" placeholder="Ingrese su usuario">                                      
							</div>
							<br>
                                
                            <div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input name="login_password" type="password" class="form-control"placeholder="Password">
							</div>
                                    

                                
                            <div class="input-group">
                                      <div class="checkbox">
                                      
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" class="btn btn-success" value="Login"> 
                                    
                                    </div>
                                </div>
								  <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Bienvenido al Sistema de Contable! 
                                       
                                        </div>
                                    </div>
                                </div>    


                             
                            </form>     



                        </div>                     
                    </div>  
       
      
  
  
  
  
  
  
  </div>
   <div class="col-4 col-md-3"></div>
</div>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src ="js/jquery-3.2.1.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min.js"><\/script>')</script>
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html> 
