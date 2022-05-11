<?php
$correo=$_POST['email'];
$pwd=$_POST['password'];
session_start();
$_SESSION['email']=$correo;
$conexion=mysqli_connect("localhost","root","","BD_APP");

$consulta="SELECT * FROM usuarios where	correo_usu='$correo' and password_usu='$pwd'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:../actividades.html");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1>correo o password incorrectos</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);