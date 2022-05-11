<?php
session_start();  
$_SESSION['usuario']=true;
if (isset($_POST['registrarse'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pwd = sha1($_POST['password']);

            //Conexión a base de datos
            $connection = mysqli_connect('localhost', 'root', '', 'bd_app');
            //Subir datos a la tabla correspondiente
            $sql = "INSERT INTO usuarios (`nom_usu`, `correo_usu`, `password_usu`) VALUES ('".$nombre."', '".$email."', '".$pwd."');";
            $insert = mysqli_query($connection, $sql);
        }

 echo "<script> window.location='../actividades.php'</script>";


//  sesionstart();
//  $_SESSION['usuario']=$usuario[id_usu];