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

  </head>
  <body>
  <div class="container-fluid">
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
      <li class="nav-item dropdown active">
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
      <li class="nav-item dropdown active">
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
}
 
 ?>


</div>
</div>
</div>


<div class="container-fluid">

<div class="row">
<div class="col-12 col-md-12">
<div class="card card-info">
<div class="card-header">Agregar Datos Generales de Partida</div>
<div class="card-body">
 <div class="row">
  
    <div class="col">
       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Tipo Documento</label>
            <select class="form-control form-control" id="drowTipoDoc">
	 <?php
                $conn=mysqli_connect('127.0.0.1','root','','diosesis');

$sql="select Tipo_documento from tipo_documentos";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
  
while ($row = $result->fetch_row()){

  echo"<option>$row[0]</option>";

} 

}

$conn->close();



              ?>
  
</select>
      </select>
      <br>
			<a href=tipoDocumento.php " class='btn btn-primary'>Nuevo documento</a>
     
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
        update();


        
    });


});

</script>
<script type="text/javascript">
function update(){
  var tableReg = document.getElementById('myTable');
      var cellsOfRow="";
      var found=false;
      var compareWith="";
      var sumCargos = 0;
      var sumAbonos=0;
   var cheques = 0;
   var billetes = 0;
   var dolares = 0;
   var moneda25 = 0;
   var moneda10 = 0;
   var moneda5 = 0;
   var moneda01 = 0;
   var subtotal1 = 0;

  var subtotal = 0;
    var sumCargos = 0;
      var sumAbonos=0;
      var sumCheques = 0;
      var sumBilletes = 0;
      var sumBilletes1 =0;
      var sumMoneda25 =0;
      var sumMoneda10 = 0;
      var sumMoneda5 = 0;
      var sumMoneda1=0;
 




    for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {
          var cuenta = (cellsOfRow[0].innerHTML); 
           if(j==1){
            if(cellsOfRow[j].innerHTML){
              var Cheques  =Number((cellsOfRow[j].innerHTML));
               sumCheques= Number(sumCheques)+Number(Cheques);

            }       
          } 
           if(j==2){
            if(cellsOfRow[j].innerHTML){
              var Billetes  =Number((cellsOfRow[j].innerHTML));
               sumBilletes= Number(sumBilletes)+Number(Billetes);

            }       
          }
          if(j==3){
            if(cellsOfRow[j].innerHTML){
              var Billetes1  =Number((cellsOfRow[j].innerHTML));
               sumBilletes1= Number(sumBilletes1)+Number(Billetes1);

            }       
          }
           if(j==4){
            if(cellsOfRow[j].innerHTML){
              var moneda25  =Number((cellsOfRow[j].innerHTML));
               sumMoneda25= Number(sumMoneda25)+Number(moneda25);

            }       
          }
           if(j==5){
            if(cellsOfRow[j].innerHTML){
              var moneda10  =Number((cellsOfRow[j].innerHTML));
               sumMoneda10= Number(sumMoneda10)+Number(moneda10);

            }       
          }
          if(j==6){
            if(cellsOfRow[j].innerHTML){
              var moneda5  =Number((cellsOfRow[j].innerHTML));
               sumMoneda5= Number(sumMoneda5)+Number(moneda5);

            }       
          }
          if(j==7){
            if(cellsOfRow[j].innerHTML){
              var moneda1  =Number((cellsOfRow[j].innerHTML));
               sumMoneda1= Number(sumMoneda1)+Number(moneda1);

            }       
          }
          if(j==8){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  =Number((cellsOfRow[j].innerHTML));
               sumCargos= Number(sumCargos)+Number(Subtotal);

            }       
          }
          if(j==9){
            
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Abono';
              var Subtotal  =Number((cellsOfRow[j].innerHTML));
                sumAbonos= Number(sumAbonos)+Number(Subtotal);
            }
                    
          }
                 
          
        }
        
        
      }
       document.getElementById('lblCheques').innerHTML = Math.round(sumCheques * 100) / 100;
          document.getElementById('lblBilletes').innerHTML = Math.round(sumBilletes * 100) / 100;  
           document.getElementById('lbl1').innerHTML = Math.round(sumBilletes1 * 100) / 100; 
           document.getElementById('lbl25').innerHTML = Math.round(sumMoneda25 * 100) / 100; 
           document.getElementById('lbl10').innerHTML = Math.round(sumMoneda10 * 100) / 100; 
           document.getElementById('lbl5').innerHTML = Math.round(sumMoneda5 * 100) / 100; 
           document.getElementById('lbl01').innerHTML = Math.round(sumMoneda1 * 100) / 100; 
        document.getElementById('lblCargos').innerHTML = Math.round(sumCargos * 100) / 100; 
         document.getElementById('lblAbonos').innerHTML = Math.round(sumAbonos * 100) / 100; 

        

}
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
     <div class="col-2">
       <div class="form-group">
            <label for="recipient-name" class="col-form-label">Subtotal</label>
             <input class="form-control js-example-basic-single" id="txtSubtotal" placeholder="$">
     
          </div>
    </div>
	<div>

    


<script>


var c=0;
function Cargo() {

	
  
	 var cuenta = document.getElementById("txtCuenta").value;
   var cheques = document.getElementById('txtCheque').value && document.getElementById('txtCheque').value> 0 ? document.getElementById('txtCheque').value : 0 ;
   var billetes = document.getElementById('txtBilletes').value && document.getElementById('txtBilletes').value> 0 ? document.getElementById('txtBilletes').value : 0 ;
   var dolares = document.getElementById('txt1').value && document.getElementById('txt1').value> 0 ? document.getElementById('txt1').value : 0 ;
   var moneda25 = document.getElementById('txt25').value && document.getElementById('txt25').value> 0 ? document.getElementById('txt25').value : 0 ;
   var moneda10 = document.getElementById('txt10').value && document.getElementById('txt10').value> 0 ? document.getElementById('txt10').value : 0  ;
   var moneda5 = document.getElementById('txt5').value && document.getElementById('txt5').value> 0 ? document.getElementById('txt5').value : 0  ;
   var moneda01 = document.getElementById('txt01').value && document.getElementById('txt01').value> 0 ? document.getElementById('txt01').value : 0 ;
   var subtotal1 = document.getElementById('txtSubtotal').value && document.getElementById('txtSubtotal').value> 0 ? document.getElementById('txtSubtotal').value : 0 ;

  var subtotal = Number(cheques)  + Number(billetes) + Number(dolares) + Number(moneda25) +  Number(moneda10) + Number(moneda5) + Number(moneda01) + Number(subtotal1);
 

	// var subtotal = document.getElementById("txtSubtotal").value;
   
   
    var table = document.getElementById("myTable");
	  var rowCount = table.rows.length;
	  var row = table.insertRow(rowCount);
	  var cell1 = row.insertCell(0);
	 var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
    var cell11 = row.insertCell(10);
	 var cell12 = row.insertCell(11);

    cell1.innerHTML = cuenta;
     cell2.innerHTML = cheques;
	   cell3.innerHTML = billetes;
     cell4.innerHTML = dolares;
     cell5.innerHTML = moneda25;
     cell6.innerHTML = moneda10;
     cell7.innerHTML = moneda5;
    cell8.innerHTML = moneda01;
      cell9.innerHTML = subtotal;
     cell10.innerHTML = 0;
	    cell11.innerHTML = "<div class='form-group'> <button type='button' class='btn btn-danger borrar' >Eliminar</button></div>";
    
	 
   var tableReg = document.getElementById('myTable');
      var cellsOfRow="";
      var found=false;
      var compareWith="";
      var sumCargos = 0;
      var sumAbonos=0;
       var sumCheques = 0;
      var sumBilletes = 0;
      var sumBilletes1 =0;
      var sumMoneda25 =0;
      var sumMoneda10 = 0;
      var sumMoneda5 = 0;
      var sumMoneda1=0;



       for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {
          var cuenta = (cellsOfRow[0].innerHTML); 
           if(j==1){
            if(cellsOfRow[j].innerHTML){
              var Cheques  =Number((cellsOfRow[j].innerHTML));
               sumCheques= Number(sumCheques)+Number(Cheques);

            }       
          } 
           if(j==2){
            if(cellsOfRow[j].innerHTML){
              var Billetes  =Number((cellsOfRow[j].innerHTML));
               sumBilletes= Number(sumBilletes)+Number(Billetes);

            }       
          }
          if(j==3){
            if(cellsOfRow[j].innerHTML){
              var Billetes1  =Number((cellsOfRow[j].innerHTML));
               sumBilletes1= Number(sumBilletes1)+Number(Billetes1);

            }       
          }
           if(j==4){
            if(cellsOfRow[j].innerHTML){
              var moneda25  =Number((cellsOfRow[j].innerHTML));
               sumMoneda25= Number(sumMoneda25)+Number(moneda25);

            }       
          }
           if(j==5){
            if(cellsOfRow[j].innerHTML){
              var moneda10  =Number((cellsOfRow[j].innerHTML));
               sumMoneda10= Number(sumMoneda10)+Number(moneda10);

            }       
          }
          if(j==6){
            if(cellsOfRow[j].innerHTML){
              var moneda5  =Number((cellsOfRow[j].innerHTML));
               sumMoneda5= Number(sumMoneda5)+Number(moneda5);

            }       
          }
          if(j==7){
            if(cellsOfRow[j].innerHTML){
              var moneda1  =Number((cellsOfRow[j].innerHTML));
               sumMoneda1= Number(sumMoneda1)+Number(moneda1);

            }       
          }
          if(j==8){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  =Number((cellsOfRow[j].innerHTML));
               sumCargos= Number(sumCargos)+Number(Subtotal);

            }       
          }
          if(j==9){
            
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Abono';
              var Subtotal  =Number((cellsOfRow[j].innerHTML));
                sumAbonos= Number(sumAbonos)+Number(Subtotal);
            }
                    
          }
                 
          
        }
         document.getElementById('lblCheques').innerHTML = Math.round(sumCheques * 100) / 100;
          document.getElementById('lblBilletes').innerHTML = Math.round(sumBilletes * 100) / 100;  
           document.getElementById('lbl1').innerHTML = Math.round(sumBilletes1 * 100) / 100; 
           document.getElementById('lbl25').innerHTML = Math.round(sumMoneda25 * 100) / 100; 
           document.getElementById('lbl10').innerHTML = Math.round(sumMoneda10 * 100) / 100; 
           document.getElementById('lbl5').innerHTML = Math.round(sumMoneda5 * 100) / 100; 
           document.getElementById('lbl01').innerHTML = Math.round(sumMoneda1 * 100) / 100; 
        document.getElementById('lblCargos').innerHTML = Math.round(sumCargos * 100) / 100; 
         document.getElementById('lblAbonos').innerHTML = Math.round(sumAbonos * 100) / 100; 
        
      }





   document.getElementById('txtCheque').value ="";
  document.getElementById('txtBilletes').value ="";
   document.getElementById('txt1').value ="";
  document.getElementById('txt25').value ="";
   document.getElementById('txt10').value ="";
   document.getElementById('txt5').value ="";
 document.getElementById('txt01').value ="";
  document.getElementById('txtSubtotal').value ="";


}



function Abono() {
	 var cuenta = document.getElementById("txtCuenta").value;
   var cheques = document.getElementById('txtCheque').value && document.getElementById('txtCheque').value> 0 ? document.getElementById('txtCheque').value : 0 ;
   var billetes = document.getElementById('txtBilletes').value && document.getElementById('txtBilletes').value> 0 ? document.getElementById('txtBilletes').value : 0 ;
   var dolares = document.getElementById('txt1').value && document.getElementById('txt1').value> 0 ? document.getElementById('txt1').value : 0 ;
   var moneda25 = document.getElementById('txt25').value && document.getElementById('txt25').value> 0 ? document.getElementById('txt25').value : 0 ;
   var moneda10 = document.getElementById('txt10').value && document.getElementById('txt10').value> 0 ? document.getElementById('txt10').value : 0  ;
   var moneda5 = document.getElementById('txt5').value && document.getElementById('txt5').value> 0 ? document.getElementById('txt5').value : 0  ;
   var moneda01 = document.getElementById('txt01').value && document.getElementById('txt01').value> 0 ? document.getElementById('txt01').value : 0 ;
  var subtotal1 = document.getElementById('txtSubtotal').value && document.getElementById('txtSubtotal').value> 0 ? document.getElementById('txtSubtotal').value : 0 ;

  var subtotal = Number(cheques)  + Number(billetes) + Number(dolares) + Number(moneda25) +  Number(moneda10) + Number(moneda5) + Number(moneda01) + Number(subtotal1);
 var tabla = "";
  var table = document.getElementById("myTable");
    var rowCount = table.rows.length;
    var row = table.insertRow(rowCount);
    var cell1 = row.insertCell(0);
   var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
    var cell11 = row.insertCell(10);
   var cell12 = row.insertCell(11);

    cell1.innerHTML = cuenta;
     cell2.innerHTML = cheques;
     cell3.innerHTML = billetes;
     cell4.innerHTML = dolares;
     cell5.innerHTML = moneda25;
     cell6.innerHTML = moneda10;
     cell7.innerHTML = moneda5;
    cell8.innerHTML = moneda01;
      cell9.innerHTML = 0;
     cell10.innerHTML = Math.round(subtotal*100)/100 ;
      cell11.innerHTML = "<div class='form-group'> <button type='button' class='btn btn-danger borrar' >Eliminar</button></div>";
    
       var tableReg = document.getElementById('myTable');
      var cellsOfRow="";
      var found=false;
      var compareWith="";
      var sumCargos = 0;
      var sumAbonos=0;
      var sumCheques = 0;
      var sumBilletes = 0;
      var sumBilletes1 =0;
      var sumMoneda25 =0;
      var sumMoneda10 = 0;
      var sumMoneda5 = 0;
      var sumMoneda1=0;
      
       for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        tabla = tabla + "<tr>";
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {
          var cuenta = (cellsOfRow[0].innerHTML);
           if(j==1){
            if(cellsOfRow[j].innerHTML){
              var Cheques  =Number((cellsOfRow[j].innerHTML));
               sumCheques= Number(sumCheques)+Number(Cheques);
               tabla=tabla +"<td>"+Cheques+"</td>";

            }       
          } 
           if(j==2){
            if(cellsOfRow[j].innerHTML){
              var Billetes  =Number((cellsOfRow[j].innerHTML));
               sumBilletes= Number(sumBilletes)+Number(Billetes);
              tabla=tabla +"<td>"+Billetes+"</td>";
            }       
          }
          if(j==3){
            if(cellsOfRow[j].innerHTML){
              var Billetes1  =Number((cellsOfRow[j].innerHTML));
               sumBilletes1= Number(sumBilletes1)+Number(Billetes1);
               tabla=tabla +"<td>"+Billetes1+"</td>";
            }       
          }
           if(j==4){
            if(cellsOfRow[j].innerHTML){
              var moneda25  =Number((cellsOfRow[j].innerHTML));
               sumMoneda25= Number(sumMoneda25)+Number(moneda25);
               tabla=tabla +"<td>"+moneda25+"</td>";

            }       
          }
           if(j==5){
            if(cellsOfRow[j].innerHTML){
              var moneda10  =Number((cellsOfRow[j].innerHTML));
               sumMoneda10= Number(sumMoneda10)+Number(moneda10);
                tabla=tabla +"<td>"+moneda10+"</td>";

            }       
          }
          if(j==6){
            if(cellsOfRow[j].innerHTML){
              var modeda5  =Number((cellsOfRow[j].innerHTML));
               sumMoneda5= Number(sumMoneda5)+Number(moneda5);
                tabla=tabla +"<td>"+modeda5+"</td>";

            }       
          }
          if(j==7){
            if(cellsOfRow[j].innerHTML){
              var moneda1  =Number((cellsOfRow[j].innerHTML));
               sumMoneda1= Number(sumMoneda1)+Number(moneda1);
               tabla=tabla +"<td>"+moneda1+"</td>";

            }       
          }

          if(j==8){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal =0;
               Subtotal  =Number((cellsOfRow[j].innerHTML));
               sumCargos= Number(sumCargos)+Number(Subtotal);
               tabla=tabla +"<td>"+Subtotal+"</td>";

            }       
          }
          if(j==9){
            
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Abono';
              var Subtotal=0;
              Subtotal  =Math.round(Number((cellsOfRow[j].innerHTML))*100)/100;
                sumAbonos= Math.round( (Number(sumAbonos)+Number(Subtotal))*100)/100;
                tabla=tabla +"<td>"+Subtotal+"</td>";
                 Math.round(sumCargos * 100) / 100
            }
                    
          }
                 
          
        }
        tabla = tabla + "</tr>";
        debugger;
        
       
         document.getElementById('lblCheques').innerHTML = Math.round(sumCheques * 100) / 100;
          document.getElementById('lblBilletes').innerHTML = Math.round(sumBilletes * 100) / 100;  
           document.getElementById('lbl1').innerHTML = Math.round(sumBilletes1 * 100) / 100; 
           document.getElementById('lbl25').innerHTML = Math.round(sumMoneda25 * 100) / 100; 
           document.getElementById('lbl10').innerHTML = Math.round(sumMoneda10 * 100) / 100; 
           document.getElementById('lbl5').innerHTML = Math.round(sumMoneda5 * 100) / 100; 
           document.getElementById('lbl01').innerHTML = Math.round(sumMoneda1 * 100) / 100; 
        document.getElementById('lblCargos').innerHTML = Math.round(sumCargos * 100) / 100; 
         document.getElementById('lblAbonos').innerHTML = Math.round(sumAbonos * 100) / 100; 
        
      }
      document.getElementById('txtCheque').value ="";
  document.getElementById('txtBilletes').value ="";
   document.getElementById('txt1').value ="";
  document.getElementById('txt25').value ="";
   document.getElementById('txt10').value ="";
   document.getElementById('txt5').value ="";
 document.getElementById('txt01').value ="";
  document.getElementById('txtSubtotal').value ="";

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
  <div class="col-1">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cheques</label>
      <input type="number" class="form-control " id="txtCheque" placeholder="$">
       
           
     
          </div>
    </div>
<div class="col-1">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">Billetes</label>
      <input type="number" class="form-control " id="txtBilletes" placeholder="$">
       
           
     
          </div>
    </div>
    <div class="col-2">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">$1.00</label>
      <input type="number" class="form-control " id="txt1" placeholder="$">
       
           
     
          </div>
    </div>
    <div class="col-2">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">$0.25</label>
      <input type="number" class="form-control " id="txt25" placeholder="$">
       
           
     
          </div>
    </div>
    <div class="col-2">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">$0.10</label>
      <input type="number" class="form-control " id="txt10" placeholder="$">
       
           
     
          </div>
    </div>
    <div class="col-2">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">$0.05</label>
      <input type="number" class="form-control " id="txt5" placeholder="$">
       
           
     
          </div>
    </div>
    <div class="col-2">
      <div class="form-group">
            <label for="recipient-name" class="col-form-label">$0.01</label>
      <input type="number" class="form-control " id="txt01" placeholder="$">
       
           
     
          </div>
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
<thead><tr><td>Cuenta</td><td>Cheques</td><td>Billetes</td><td>$1.00</td><td>$0.25</td><td>$0.10</td><td>$0.05</td><td>$0.01</td><td>Cargos</td><td>Abonos</td><td>Eliminar</td></tr></thead>
  </table>
 </div>
</div>
<div class="card card-info">
<div class="card-body">
  <div class="container">
    <div class="row">
   <table class="table">
    <thead>
     <tr>
      <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lblCheques">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lblBilletes">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lbl1">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lbl25">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lbl10">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lbl5">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lbl01">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lblCargos">0</label></td>
      <td>&nbsp&nbsp&nbsp&nbsp<label id="lblAbonos">0</label></td>
      <td></td>

    </tr>
    </thead>
   </table>

  </div>
  <div>

</div>

  </div>
  </div>
<div class="card card-info">
<div class="card-body">
  <div class="col-12 col-md-12">

<button  onclick="Guardar()" class="btn btn-success btn-block"><span class="fa-stack fa-lg">
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
      var tipoDoc = document.getElementById("drowTipoDoc").value;
      var nDoc = document.getElementById("txtNdocumento").value;
      var proveedor = document.getElementById("txtProveedor").value;
      var descripcion = document.getElementById("txtDescripcion").value;
      var fecha = document.getElementById("txtDate").value;
      fecha = moment(fecha,'YYYY/MM/DD').format('YYYY-MM-DD');
     

   var tabla="";
      var cellsOfRow="";
      var found=false;
      var compareWith="";
      var sumCargos = 0;
      var sumAbonos=0;
       var sumCheques = 0;
      var sumBilletes = 0;
      var sumBilletes1 =0;
      var sumMoneda25 =0;
      var sumMoneda10 = 0;
      var sumMoneda5 = 0;
      var sumMoneda1=0;




      for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        tabla = tabla + "<tr>";
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {

          var cuenta = (cellsOfRow[0].innerHTML);
           if(j==0){
            if(cellsOfRow[j].innerHTML){
              var Cuenta  =(cellsOfRow[j].innerHTML);
             
               tabla=tabla +"<td>"+Cuenta+"</td>";

            }       
          }
           if(j==1){
            if(cellsOfRow[j].innerHTML){
              var Cheques  =Number((cellsOfRow[j].innerHTML));
               sumCheques= Number(sumCheques)+Number(Cheques);
               tabla=tabla +"<td>"+Cheques+"</td>";

            }       
          } 
           if(j==2){
            if(cellsOfRow[j].innerHTML){
              var Billetes  =Number((cellsOfRow[j].innerHTML));
               sumBilletes= Number(sumBilletes)+Number(Billetes);
              tabla=tabla +"<td>"+Billetes+"</td>";
            }       
          }
          if(j==3){
            if(cellsOfRow[j].innerHTML){
              var Billetes1  =Number((cellsOfRow[j].innerHTML));
               sumBilletes1= Number(sumBilletes1)+Number(Billetes1);
               tabla=tabla +"<td>"+Billetes1+"</td>";
            }       
          }
           if(j==4){
            if(cellsOfRow[j].innerHTML){
              var moneda25  =Number((cellsOfRow[j].innerHTML));
               sumMoneda25= Number(sumMoneda25)+Number(moneda25);
               tabla=tabla +"<td>"+moneda25+"</td>";

            }       
          }
           if(j==5){
            if(cellsOfRow[j].innerHTML){
              var moneda10  =Number((cellsOfRow[j].innerHTML));
               sumMoneda10= Number(sumMoneda10)+Number(moneda10);
                tabla=tabla +"<td>"+moneda10+"</td>";

            }       
          }
          if(j==6){
            if(cellsOfRow[j].innerHTML){
              var moneda5  =Number((cellsOfRow[j].innerHTML));
               sumMoneda5= Number(sumMoneda5)+Number(moneda5);
                tabla=tabla +"<td>"+moneda5+"</td>";

            }       
          }
          if(j==7){
            if(cellsOfRow[j].innerHTML){
              var moneda1  =Number((cellsOfRow[j].innerHTML));
               sumMoneda1= Number(sumMoneda1)+Number(moneda1);
               tabla=tabla +"<td>"+moneda1+"</td>";

            }       
          }

          if(j==8){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  =Number((cellsOfRow[j].innerHTML));
               sumCargos= Number(sumCargos)+Number(Subtotal);
               tabla=tabla +"<td>"+Subtotal+"</td>";

            }       
          }
          if(j==9){
            
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Abono';
              var Subtotal  =Math.round(Number((cellsOfRow[j].innerHTML))*100)/100;
                sumAbonos= Math.round( (Number(sumAbonos)+Number(Subtotal))*100)/100;
                tabla=tabla +"<td>"+Subtotal+"</td>";
                 Math.round(sumCargos * 100) / 100
            }
                    
          }
                 
          
        }
        tabla = tabla + "</tr>";

        
       
         document.getElementById('lblCheques').innerHTML = Math.round(sumCheques * 100) / 100;
          document.getElementById('lblBilletes').innerHTML = Math.round(sumBilletes * 100) / 100;  
           document.getElementById('lbl1').innerHTML = Math.round(sumBilletes1 * 100) / 100; 
           document.getElementById('lbl25').innerHTML = Math.round(sumMoneda25 * 100) / 100; 
           document.getElementById('lbl10').innerHTML = Math.round(sumMoneda10 * 100) / 100; 
           document.getElementById('lbl5').innerHTML = Math.round(sumMoneda5 * 100) / 100; 
           document.getElementById('lbl01').innerHTML = Math.round(sumMoneda1 * 100) / 100; 
        document.getElementById('lblCargos').innerHTML = Math.round(sumCargos * 100) / 100; 
         document.getElementById('lblAbonos').innerHTML = Math.round(sumAbonos * 100) / 100; 
        
      }
       tabla = tabla + "<tr><td>Totales"+"</td><td>"+sumCheques+"</td><td>"+sumBilletes+"</td><td>"+sumBilletes1+"</td><td>"+sumMoneda25+"</td><td>"+sumMoneda10+"</td><td>"+sumMoneda5+"</td><td>"+sumMoneda1+"</td><td>"+sumCargos+"</td><td>"+sumAbonos+"</td><tr>";
        
      debugger;
      if(sumCargos == sumAbonos && sumCargos !=""){
        
          $.ajax({
   type: "POST",
     url: "server.php?p=agregar_partida",
     data:"tipoDoc="+tipoDoc+"&nDoc="+nDoc+"&proveedor="+proveedor+"&descripcion="+descripcion+"&fecha="+fecha,

    success: function(response)
        {

       
        }
         }); 
 
 setTimeout(function(){
      // Recorremos todas las filas con contenido de la tabla
      for (var i = 1; i < tableReg.rows.length; i++)
      {
        cellsOfRow=tableReg.rows[i].getElementsByTagName('td');
        
        // Recorremos todas las celdas
        for (var j = 0; j < cellsOfRow.length; j++)
        {
          
            
          var cuenta = (cellsOfRow[0].innerHTML);
          
    
          if(j==8){
            if(cellsOfRow[j].innerHTML){
              var tipoTransaccion = 'Cargo';
              var Subtotal  = (cellsOfRow[j].innerHTML);
             
            }
            
            
          
          }
          if(j==9){
            
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
        alertify.alert('Exito', 'Partida Creada con exito!!').set('onok', function(closeEvent){ location.href ="partidasCalculadasPdf.php?tabla="+tabla+"&fecha="+fecha+"&descripcion="+descripcion+"&tipoDoc="+tipoDoc+"&nDoc="+nDoc+"&proveedor="+proveedor;} ); 
     
        }
         });  
      }
   },3000);} else{
       alertify.alert('Error', 'Datos Erroneos!!');
    }
     if(sumCargos == sumAbonos && sumCargos!= "" && fecha != ""){
setTimeout(function(){ $.ajax({
   type: "POST",
     url: "server.php?p=update_partida",
     data:"sumCargos="+sumCargos,
   
    success: function(response)
        {
        
        }
         });},3000)
     
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