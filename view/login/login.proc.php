<?php

include '../conexion.php';

if (isset($_POST['entrar'])){
    if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            $consulta = mysqli_query ($conn, "SELECT * from usuarios WHERE correo_usu='$email' and password_usu='$password'");
            $cont = mysqli_num_rows($consulta);
    }
}

session_start();

if ($cont > 0) {
    $_SESSION['login'] = true;

    echo "<script> window.location='../actividades.php'</script>";
} else {
    echo "<script> window.location='./index.html'</script>";
}

?>
