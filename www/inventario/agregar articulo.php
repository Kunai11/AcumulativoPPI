<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agregar descripci&oacute;n de nuevo articulo</title>
</head>
<body>
	<form method="POST" action="guardar.php">
<FORM>
	Codigo: <input  type="number"  name="codigo_art" id="codigo_art" tabindex="1" required>
	<br>
	Descripci&oacute;n: <input type="text" name="descripcion" id="descripcion" tabindex="2" >
	<br>
	Costo: <input type="number" name="costo" id="costo" tabindex="3" >
	<br>
	Precio: <input type="number" name="precio" id="precio" tabindex="4" >
	<br>
	Categoria: <input type="text" name="categoria" id="categoria" tabindex="5">
	<br>
	<input type="reset" name="limpiar">
	<input type="submit" name="guargar" value="Guardar">
</FORM>

</body>
</html>