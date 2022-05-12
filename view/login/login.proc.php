<?php
//incluimos la pagina de conexion
include '../conexion.php';

if (isset($_POST['entrar'])){
    if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = sha1($_POST['password']);
            //consulta pra saber que coinciden el usuario y la contraseña.
            $consulta = mysqli_query ($conn, "SELECT * from usuarios WHERE correo_usu='$email' and password_usu='$password'");
            //contador de lineas de consulta
            $cont = mysqli_num_rows($consulta);
            $guardar = mysqli_fetch_assoc($consulta);
    }
}
//iniciamos sesion
session_start();
//si la consulta es valida creamos 2 sesiones, una para que se eva todo como si estubieses registrado, y otra para guaradar la variable para poder saber en que usuario estamos
if ($cont > 0) {
    $_SESSION['login'] = true;
    $_SESSION['usu'] = $guardar['id_usu'];
//si la consulta es valida lo enviamos a actividades
    echo "<script> window.location='../actividades.php'</script>";
//si no es valida enviaremos de nuevo hacia atras
} else {
    echo "<script> window.location='./index.html'</script>";
}

?>
