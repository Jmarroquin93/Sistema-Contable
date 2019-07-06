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
<script src ="js/alertify.min.js"></script>
	 <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>

  </head>
  <body>
<div class="container">
<div class="row">
<div class="col-12 col-md-12">
<div align="center">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Catalogo.php">Catalogo</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Partidas.php">Partida</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="agregarCuentas.php">Agregar Cuentas</a>
  </li>
</ul>
</div>
</div>
</div>
</div>
<div class="container">

<div class="row">
<div class="col-12 col-md-12">
<div class="card card-info">
<div class="card-header">Agregar Datos Generales de Partida</div>
<div class="card-body">
 <div class="row">
  
    <div class="col">
       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo Documento</label>
            <select class="form-control form-control" id="drowEstado">
	  <option>Consumidor Final</option>
	  <option>Credito Fiscal</option>
      </select>
			
     
          </div>
    </div>
	
	 <div class="col">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">N. Documento</label>
            <input type="text" class="form-control " id="txtNdocumento" placeholder="00-000-00">
     
          </div>
    </div>
	
	 <div class="col">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Descripcion</label>
            <input type="text" class="form-control " id="txtDescripcion" placeholder="Descripcion de partida">
     
          </div>
    </div>
	
	
	 <div class="col">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Proveedor</label>
            <input type="text" class="form-control " id="txtProveedor" placeholder="Proveedor">
     
          </div>
    </div>
	 <div class="col">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Fecha</label>
            <input type="Date" class="form-control " id="txtDate">
     
          </div>
    </div>

	<div>

    

<script id="jsbin-javascript">
$(function () {
    $(document).on('click', '.borrar', function (event) {
        event.preventDefault();
        $(this).closest('tr').remove();
    });
});

</script>
<script>

var c=0;
function myFunction() {
c++;
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = "<input type='text' value='"+c+"' />";
    cell2.innerHTML = "<input type='button' class='borrar' value='Eliminar' />";
}

</script>

</div>
</div>

</div>
</div>
<div class="card card-info">
<div class="card-header">Agregar Detalle</div>
<div class="card-body">
 <div class="row">
    <div class="col-8">
       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cuenta</label>
             <select class="form-control js-example-basic-single" id="txtCuenta">
              <?php
                $conn=mysqli_connect('127.0.0.1','root','','diosesis');

$sql="select Nombre from cuentas where Transaccional=1";

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
	
    
	
	

	 <div class="col-4">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub Total</label>
			<input type="text" class="form-control " id="txtSubtotal" placeholder="$">
			 
           
     
          </div>
    </div>
	
	<div>

    

<script id="jsbin-javascript">
$(function () {
    $(document).on('click', '.borrar', function (event) {
        event.preventDefault();
        $(this).closest('tr').remove();
    });
});

</script>
<script>

var c=0;
function Cargo() {
	
        
	 var cuenta = document.getElementById("txtCuenta").value;
	 var subtotal = document.getElementById("txtSubtotal").value;

    var table = document.getElementById("myTable");
	  var rowCount = table.rows.length;
	  var row = table.insertRow(rowCount);
	  var cell1 = row.insertCell(0);
	 var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);

	
    cell1.innerHTML = cuenta;
     cell2.innerHTML = subtotal;
	   cell3.innerHTML = "";
	    cell4.innerHTML = "<div class='form-group'> <button type='button' class='btn btn-danger borrar' >Eliminar</button></div>";
	 
   alert(rowCount);

}



function Abono() {
	 var cuenta = document.getElementById("txtCuenta").value;
	 var subtotal = document.getElementById("txtSubtotal").value;

    var table = document.getElementById("myTable");
	 var rowCount = table.rows.length;
	  var row = table.insertRow(rowCount);
    var cell1 = row.insertCell(0);
	 var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
	
	
    cell1.innerHTML = cuenta;
     cell2.innerHTML = '';
	   cell3.innerHTML = subtotal;
	    cell4.innerHTML = "<div class='form-group'> <button type='button' class='btn btn-danger borrar' >Eliminar</button></div>";
}

</script>
<script id="jsbin-javascript">
$(function () {
    $(document).on('click', '.borrar', function (event) {
        event.preventDefault();
        $(this).closest('tr').remove();
    });
});

</script>

</div>
</div>
<div class="row">
<div class="col-6 col-md-6">
<button href="" onclick="Cargo()" class="btn btn-success btn-block"><span class="fa-stack fa-lg">
  <i class="fa fa-circle-thin fa-stack-2x"></i>
  <i class="fa fa-plus fa-stack-1x"></i>
</span> Cargo</button>
</div>
<div class="col-6 col-md-6">
<button onclick="Abono()" class="btn btn-success btn-block"><span class="fa-stack fa-lg">
  <i class="fa fa-circle-thin fa-stack-2x"></i>
  <i class="fa fa-minus fa-stack-1x"></i>
</span>Abono</button>
</div>
</div>
</div>
</div>
<div class="card card-info">
<div class="card-header">Partida</div>
<div class="card-body">
<table class="table" id="myTable">
<thead><tr><td>Cuenta</td><td>Cargos</td><td>Abonos</td><td>Eliminar</td></tr></thead>
  </table>
 </div>
</div>
<div class="card card-info">
<div class="card-body">
  <div class="col-12 col-md-12">
<button href="" onclick="Guardar()" class="btn btn-success btn-block"><span class="fa-stack fa-lg">
  <i class="fa fa-circle-thin fa-stack-2x"></i>
  <i class="fa fa-plus fa-stack-1x"></i>
</span> Guardar</button>
</div>

  </div>
  </div>

  <script language="javascript">
    function Guardar()
    {
      var tableReg = document.getElementById('myTable');
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
          if(j==1){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  = (cellsOfRow[j].innerHTML);
               sumCargos= sumCargos+Subtotal;

            }       
          }
          if(j==2){
            
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Abono';
              var Subtotal  = (cellsOfRow[j].innerHTML);
                sumAbonos= sumCargos+Subtotal;
            }
                    
          }
                 
          
        }
         
      }
      if(sumCargos= sumAbonos){
 
      // Recorremos todas las filas con contenido de la tabla
      for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {
          
            
          var cuenta = (cellsOfRow[0].innerHTML);
          
    
          if(j==1){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  = (cellsOfRow[j].innerHTML);
             
            }
            
            
          
          }
          if(j==2){
            
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Abono';
              var Subtotal  = (cellsOfRow[j].innerHTML);
            
            }
            
            
          
          }
         
          
          
        }
        
    $.ajax({
   type: "POST",
     url: "server.php?p=agregar_detalle_partida",
     data:"cuenta="+cuenta+"&tipoTransaccion="+tipoTransaccion+"&Subtotal="+Subtotal,
   
    success: function(response)
        {
        alertify.alert('Exito', 'Partida Creada con exito!!').set('onok', function(closeEvent){javascript:document.location.reload();} ); ;
     
        
    
        }
       
             });
          
      
      }
    } else{
       alertify.alert('Error', 'Datos Erroneos!!');
    }
    }
  </script>

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
     $('.js-example-basic-single').select2();

}



    );

</script>
			
</html> 