<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema basico PHP-Resultados</title>
</head>
<body>
	<a href="modificar.php">Regresar</a>
<table border="1">
	<tr>
		<td colspan="6" align="center"><h2>Resultados para: <?php 
			echo $palabra=$_GET['palabra'];?></h2></td>
	</tr>
	<tr>
	<th>Id</th>
	<th>Identidad</th>
	<th>Nombre</th>
	<th>Direcci&oacute;n</th>
	<th>Tel&eacute;fono</th>
	<th>Modificar</th>
</tr>
<?php
include ("cn/conexion.php");
$sql=mysqli_query($db,"SELECT * FROM empleados WHERE 
Identidad LIKE '%$palabra%'") 
    or die (mysqli_error());
while ($row=mysqli_fetch_array($sql)){
	echo '
<tr>
<td>'.$row['Id'].'</td>
<td>'.$row['Identidad'].'</td>
<td>'.$row['Nombre'].'</td>
<td>'.$row['Direccion'].'</td>
<td>'.$row['Telefono'].'</td>
<td>
<form method="GET" action="mod.php">
	<input type="hidden" name="Id" id="Id" value="'.$row['Id'].'">
	<input type="hidden" name="palabra" id="palabra" value="'.$palabra.'">
	<input type="submit" name="modificar" id="modificar" value="Modificar"></td>

</form>
</td>
</tr>
	';
}
?>
</table>
</body>
</html>