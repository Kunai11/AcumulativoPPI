<?php
include("cn/conexion.php");
$identidad=$_POST['identidad'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];

//echo $identidad.'-'.$nombre.'-'.$direccion.'-'.$telefono;
$sql=mysqli_query($db,"INSERT INTO empleados(Identidad,Nombre,Direccion,Telefono) values ('$identidad','$nombre','$direccion','$telefono')")or die(mysqli_error());
?>