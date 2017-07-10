<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema basico PHP - Agregar</title>
</head>
<body>
	<a href="index.php">Regresar</a>
	<!-- El method puede ser POST o GET y el action es hacia donde se envia la informacion-->
	<!--<form method="GET" action="guardar.php">-->
		<form method="POST" action="guardar.php">
		<table border="1">
			<tr>
				<td colspan="2" align="center">Agregar empleado</td>
			</tr>
			<tr>
				<td>Identidad:</td>
				<td><input type="text" name="identidad" id="identidad" required autofocus tabindex="1"></td>
			</tr>
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="nombre" id="nombre" required tabindex="2"></td>
			</tr>
			
			<tr>
				<td>Direcci&oacute;n:</td>

				<td>
					<textarea type="text" name="direccion" id="direccion" required tabindex="3"
				>	
				</textarea>
				</td>
			</tr>
<tr>
				<td>Tel&eacute;fono:</td>
				<td><input type="text" name="telefono" id="telefono" required tabindex="4"></td>
			</tr>

			<td colspan="2" align="center"><input type="submit" name="agregar" value="Agregar" tabindex="5"></td>
		</table>
	</form>

</body>
</html>