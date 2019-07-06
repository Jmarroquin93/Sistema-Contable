<?php







$conn=mysqli_connect('127.0.0.1','root','','diosesis');
if($conn){

$sql="select Departamento from departamentos";

$result=$conn->query($sql);

if(mysqli_num_rows($result)>0 ){
	echo '<option value="0">Seleccionar</option>';
while ($row = $result->fetch_row()){

	echo"<option>$row[0]</option>";

} 

}

$conn->close();

}




?>