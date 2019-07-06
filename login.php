   <!DOCTYPE html>
   
   <header>
   <title>login</title>
<link href="css/bootstrap.css" rel="stylesheet" />
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
</script >
 
</header><body>
 
 <div class="container">
 <div class="row ustify-content-center">
 <div class="col-md-6">
 
 
 <?php

if($_POST){
  
  $usuario=$_POST['login_username'];
  $contra=$_POST['login_password'];
  $user="";
  $contr="";


  //session_start();

 



  $conn=mysqli_connect('127.0.0.1','root','','diosesis');

  if($conn){

  

$sql="call validar_credenciales ('".$usuario."','".$contra."')";

$result= $conn->query($sql);

if(mysqli_num_rows($result)>0){

while($row=$result->fetch_row()){

$user="$row[0]";
$contr="$row[1]";


}


}


if(($usuario==$user)&&($contra==$contr)&&($usuario<>"")){

  header("Location:bienvenido.php");
 


  
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

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

 
 
      




      

               
               
                

  
	
 
 </div>
 </div>
 
 </div>
 
 
 
 
 

	
	
	


	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-3.2.1.slim.min"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
   
    <script src="js/ie-emulation-modes-warning.js"></script>
	
	</body>

</html>

