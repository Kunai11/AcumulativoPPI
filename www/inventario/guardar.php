<?php
include("cn/bdconexion.php");
$codigo=$_POST['codigo_art'];
$descripcion=$_POST['descripcion'];
$costo=$_POST['costo'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];

//echo $identidad.'-'.$nombre.'-'.$direccion.'-'.$telefono;
$sql=mysqli_query($db,"INSERT INTO catalogo(Codigo,Descripcion,Costo,Precio,Categoria) values ('$codigo','$descripcion','$costo','$precio','$categoria')")or die(mysqli_error());
?>