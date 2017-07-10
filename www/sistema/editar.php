<?php
include("cn/conexion.php");
$id=$_GET['id'];
$identidad=$_GET['identidad'];
$nombre=$_GET['nombre'];
$direccion=$_GET['direccion'];
$telefono=$_GET['telefono'];
$sql=mysqli_query($db,"UPDATE empleados SET Identidad='$identidad', Nombre='$Nombre', Direccion='$direccion', Telefono='$Telefono' WHERE Id='$id' ") or die(mysqli_error());
header("location:mod.php?Id=$id&palabra=$palabra");
