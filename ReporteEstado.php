<?php
$usuario =$_GET['usuario'];
$FechaInicio =$_GET['fechaInicial'];
$FechaFin=$_GET['fechaFinal'];
$Superavit = $_GET['sueravit'];
$fecha_actual=date("d/m/Y");
include"mpdf-6.1/mpdf.php";


$html ="
<style type='text/css'>
    .bordito-r{border-right: 1px solid black;}
    .bordito-b{border-bottom: 1px solid black;}
    .bordino{border-top: 1px solid black;}
    
  </style>
  ".$fecha_actual."
  <p align='center'><img src='img/logo.jpg' width='150' height='150'></p>
<hr>
  <p align='center'><b><h3> Estado de Resultados del ".$FechaInicio." al ".$FechaFin."</h3></p>

<hr>
<p align='center'><h3>GASTOS</h1><p>
<table  width='650'><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
";

$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
 
$totalActivos=0;
$sql="call Get_Estado_Gastos('".$usuario."','".$FechaInicio."','".$FechaFin."');";


$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
  if($row[6]){
$totalActivos=$totalActivos+$row[6];
}

$html.="<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 
$html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total</td><td><b></td><td><b>$ ".$totalActivos."</td></tr>";

$html.="</tbody></table>";
}

$conn->close();

}
$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
$totalPasivos=0;
$sql="call Get_Estado_Productos('".$usuario."','".$FechaInicio."','".$FechaFin."');";

$html.="<p align='center'><h3>PRODUCTOS</h1><p><table  width='650'><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
";
$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
if($row[6]){
$totalPasivos=$totalPasivos+$row[6];
}

$html.="<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 
$html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td class='bordito-b'><b>Total</td><td class='bordito-b'><b></td><td class='bordito-b'><b>$ ".$totalPasivos."</td></tr>";
$Superavit=$totalPasivos-$totalActivos;
/*if($conn){
 // $sql="update cuentas set Total =".$Superavit."where Nombre = 'Ganancia del Ejercicio'");

$result=$conn->query($sql);
}*/
if($Superavit>0){
$html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td class='bordito-b'><b>Superavit del periodo</td><td class='bordito-b'><b></td><td class='bordito-b'><b>$ ".$Superavit."</td></tr>";
}else{
 $html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td class='bordito-b'><b>Deficit del periodo</td><td class='bordito-b'><b></td><td class='bordito-b'><b>$ ".$Superavit."</td></tr>";
 
}
$html.="</tbody></table>";

}


$conn->close();


}




  
$pdf = new mPDF('c');
$pdf->WriteHTML($html);
$pdf->Output();


?>