
<!DOCTYPE html> 
<body onload="datos()">
<link href="css/bootstrap.css" rel="stylesheet" />

 <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
   

<div class="container">

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Insertar Login
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <form>
      <div class="modal-body">

        <div class="form-group">
    <label for="exampleInputEmail1">Usuario</label>
    <input type="text" class="form-control" id="txtusuario" placeholder="Usuario">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="txtpassword" placeholder="Password">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Id_rol</label>
    <input type="text" class="form-control" id="txtrol" placeholder="Id_rol">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Id_iglesia</label>
    <input type="text" class="form-control" id="txtiglesia" placeholder="Id_iglesia">
  </div>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" onclick="GuardarDatos()">Guardar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="col-md-12">

  <table class="table" id="mitabla">
  <thead>
    <tr>
      <td width="100">Id_login</td>
      <td width="100">Usuario</td>
      <td width="100">Password</td>
      <td width="80">Id_iglesia</td>
	  <td width="80">Id_rol</td>
	  

    </tr>

  </thead>

  <tbody>

  </tbody>


  </table>

  </div>



</div>



 
</body>
</html>

<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dataTables.js"></script>
<script>

function GuardarDatos(){


var usuario= $('#txtusuario').val();
var password = $('#txtpassword').val();
var iglesia = $('#txtiglesia').val();
var rol = $('#txtrol').val();
$.ajax({

  type: "POST",
  url:"server.php?p=add",
  data:"txtusuario="+usuario+"&txtpassword="+password+"&txtrol="+rol+"&txtiglesia="+iglesia
 
});

  

}

function ActualizarDatos(str){

var id=str;
var nombre =$("#txtnombre-"+str).val();
var edad = $("#txtedad-"+str).val();

$.ajax({

type:"POST",
url:"server.php?p=edit",
data:"id="+id+"&txtnombre="+nombre+"&txtedad="+edad,
success: function(data){
$('tbody').html(data);


}

}


  )
};

</script>
<script>
function datos(){
$.ajax({

type:"GET",
url:"server.php",
success: function(data){
$('tbody').html(data);


}

});


}

</script>

<script type='text/javascript'>
$(document).ready(function(){

    $('#mitabla').DataTable();



}



    );

</script>