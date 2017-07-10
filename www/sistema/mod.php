<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema basico PHP-Editar</title>
</head>
<body>
<?php
include ("cn/conexion.php");
$palabra=$_GET['palabra'];
$Id=$_GET['Id'];
$sql=mysqli_query($db,"SELECT * FROM empleados WHERE Id='$Id'") or die (mysqli_error());
$row=mysqli_fetch_array($sql);
?>
<a href="resultados.php?palabra=<?php echo $palabra;?>">Regresar</a>
<form method="GET" action="editar.php">
<table border="1">
	<tr>
		<td colspan="2" align="center">Modificar datos del empleado</td>
	</tr>
	<tr>
		<td>Identidad: </td>
		<td><input type="hidden" name="id" id="id" value="<?php echo $row['Id'];?>">
		<input type="text" name="identidad" required autofocus tabindex="1" value="<?php echo $row['Identidad'];?>"></td>
	</tr>
	<tr>
		<td>Nombre: </td>
		<td><input type="text" name="nombre" id="nombre" required tabindex="2" value="<? echo $row['Nombre'];?>"></td>
	</tr>
	<tr>
		<td>Direcci&oacute;n: </td>
		<td><input type="text" name="direccion" id="direccion" required tabindex="3" value="<? echo $row['Direccion'];?>"></td>
	</tr>
		<tr>
		<td>Tel&eacute;fono: </td>
		<td><input type="text" name="telefono" id="telefono" required tabindex="4" value="<? echo $row['Telefono'];?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="agregar" id="agregar" value="Modificar" tabindex="5"></td>
	</tr>

</table>	
</form>
</body>
</html>