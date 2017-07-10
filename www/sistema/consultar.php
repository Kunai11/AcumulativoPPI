<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema basico PHP-Consultar</title>
</head>
<body>
<table border="1">
	<tr>
		<td colspan="2" align="center">Consultar</td>
	</tr>
	<tr>
	<th>Id</th>
	<th>Identidad</th>
	<th>Nombre</th>
	<th>Direcci&oacute;n</th>
	<th>Tel&eacute;fono</th>
</tr>
<?php
include ("cn/conexion.php");
$sql=mysqli_query($db,"SELECT * FROM empleados") 
    or die (mysqli_error());
while ($row=mysqli_fetch_array($sql)){
	echo '
<tr>
<td>'.$row['Id'].'</td>
<td>'.$row['Identidad'].'</td>
<td>'.$row['Nombre'].'</td>
<td>'.$row['Direccion'].'</td>
<td>'.$row['Telefono'].'</td>
</tr>
	';
}
?>
</table>
</body>
</html>