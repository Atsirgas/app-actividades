<?php

include '../conexion.php';

if (isset($_POST['entrar'])){
    if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $consulta = mysqli_query ($conn, "SELECT Count(1) WHERE 'correo_usu' = '$email' AND 'password_usu' = '$password'");

    }
}

session_start();
$_SESSION['login']=false;

// session_start();
// if (!($_SESSION["enunciado1"]=='check')) {
//     header("Location: ../index.html");
// }

if (mysqli_fetch_assoc ($consulta)['usuarios'] > 0) {
    $_SESSION['login']=true;

    echo "<script>alert('Bienvenido.');</script>"; 
    echo "<script> window.location='../actividades.php'</script>";
} else {
    echo "<script>alert('incorrecto.');</script>";
    echo "<script> window.location='./index.php'</script>";
}

?>
