<?php
$conexion=mysqli_connect("localhost","root","","BD_APP");

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$password=$_POST['password'];
$consulta="INSERT INTO `usuarios` (`nom_usu`,`correo_usu`,`password_usu`) VALUES ('$nombre','$email','$password');";

$resultado=mysqli_query($conexion,$consulta) or die ("error de registro");
header("location:../actividades.html");
mysqli_close($conexion);
