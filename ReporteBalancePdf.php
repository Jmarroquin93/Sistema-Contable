<?php
$usuario =$_GET['usuario'];
$FechaFin=$_GET['fechaFinal'];
$Superavit=$_GET['superavit'];
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
<p align='center'><h3><b> Balance General al ".$FechaFin."</h3></p>

<hr>
<p align='center'><h3>ACTIVO</h1><p>
<table  width='650'><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
";

$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$totalActivos=0;
$sql="call Get_Balance_Activos('".$usuario."','".$FechaFin."');";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
  if($row[6]){
$totalActivos=$totalActivos+$row[6];
}

$html.="<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 
$html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Activo</td><td><b></td><td><b>$ ".$totalActivos."</td></tr>";

$html.="</tbody></table>";
}

$conn->close();

}
$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
$html.="<p align='center'><h3>PASIVO</h1><p>
<table  width='650'><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
";	
$totalPasivos=0;
$sql="call Get_Balance_Pasivo('".$usuario."','".$FechaFin."');";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
if($row[6]){
$totalPasivos=$totalPasivos+$row[6];
}

$html.="<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 

$html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Pasivo</td><td><b></td><td><b>$ ".($totalPasivos)."</td></tr>";

$html.="</tbody></table>";


}

$conn->close();

}


$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){
$html.="<p align='center'><h3>CAPITAL</h1><p>
<table  width='650'><thead>
<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td><td><b></td></tr></thead><tbody>
";	
$totalCapital=0;
$sql="call Get_Balance_Capital('".$usuario."','".$FechaFin."');";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){


while ($row = $result->fetch_row()){
if($row[6]){
$totalCapital=$totalCapital+$row[6];
}
if($row[2]=='Cuenta Capital'){
  $row[7]=($Superavit+$row[7]);
}
$html.="<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td></tr>";
} 
if($Superavit>0){
$html.="<tr><td>30103</td><td>Gananacia del Ejecicio</td><td></td><td></td><td></td><td>".$Superavit."</td><td></td></tr>";
}else{
 $html.="<tr><td>30104</td><td>Perdida del Ejecicio</td><td></td><td></td><td></td><td>".$Superavit."</td><td></td></tr>";
 
}

$html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Capital</td><td><b></td><td><b>$ ".($totalCapital + $Superavit)."</td></tr>";

$html.="<tr><td><b></td><td><b></td><td><b></td><td><b></td><td><b>Total Pasivo + Capital</td><td><b></td><td><b>$ ".($totalCapital + $Superavit + $totalPasivos)."</td></tr>";

$html.="</tbody></table>";


}

$conn->close();

}




  
$pdf = new mPDF('c');
$pdf->WriteHTML($html);
$pdf->Output();


?>