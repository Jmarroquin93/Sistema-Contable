<?php
$usuario =$_GET['usuario'];
$FechaInicio =$_GET['fechaInicial'];
$FechaFin=$_GET['fechaFinal'];
$cuenta=$_GET['cuenta'];
$htmlFinal=$_GET['htmlFinal'];
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
  <p align='center'><b><h3> Mayorizacion de Cuenta ".$cuenta."</h3></p>

<hr>
<p align='center'>
<table  width='650'><thead>
<tr>
<td width='10%'>FECHA</td>
<td width='60%'>DESCRIPCION</td>
<td class='bordito-b' width='15%'>CARGOS</td>
<td class='bordito-b' width='15%'>ABONOS</td>
</tr>
</thead>
<tbody>
";
$html.=$htmlFinal;




  
$pdf = new mPDF('c');
$pdf->WriteHTML($html);
$pdf->Output();


?>