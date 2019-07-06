<?php
$htmlFinal=$_GET['tabla'];
$fecha =$_GET['fecha'];
$descripcion =$_GET['descripcion'];
$tipoDoc =$_GET['tipoDoc'];
$nDoc =$_GET['nDoc'];
$proveedor =$_GET['proveedor'];

include"mpdf-6.1/mpdf.php";

$html ="
<style type='text/css'>
    .bordito-r{border-right: 1px solid black;}
    .bordito-b{border-bottom: 1px solid black;}
    .bordino{border-top: 1px solid black;}
    
  </style>
  <p align='center'><img src='img/logo.jpg' width='150' height='150'></p>
<hr>
<p>|--Fecha: ".$fecha." |--Descripcion: ".$descripcion." |--Tipo Documento: ".$tipoDoc." |--Proveedor : ".$proveedor." </p>
<hr>
<p align='center'>
<table  width='650' border ='1'><thead>
<tr>
<td>CUENTA</td>
<td>CHEQUES</td>
<td>BILLETES</td>
<td>$1.00</td>
<td>$0.25</td>
<td>$0.10</td>
<td>$0.05</td>
<td>$0.01</td>
<td>CARGOS</td>
<td>ABONOS</td>
</tr>
</thead>
<tbody>
";
$html.=$htmlFinal;
$html.="</tbody></table>";




  
$pdf = new mPDF('c');
$pdf->WriteHTML($html);
$pdf->Output();


?>