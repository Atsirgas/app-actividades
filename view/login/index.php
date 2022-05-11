<?php
include "../../bd_app/bd.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("location: index.php")
}


if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pwd=md5$_POST['password'];
    
    $sql="SELECT * FROM usuarios WHERE correo_usu='$email' AND password_usu='$pwd'";
    $result=mysqli_query($conn, $sql);
   
    if($result->num_rows > 0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("location: ../actividades.html");
    }else{
        echo "<script>alert('La contraseña o el email son incorrectos')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>

<body class="pagina2">

    <form action="login_proc.php" method="post" class="formulario">
        <h1 class="h1">login</h1>
        <div class="contenedor ">
            <div class="input-contenedor inputContainer">
                <input class="input-form" type="email" name="email" placeholder="Correo Electronico">
            </div>
            <div class="input-contenedor">
                <input class="input-form" type="password" name="password" placeholder="Contraseña">
            </div>
            <input type="submit" name="login" value="Login" class="botton">
            <p class="text">¿Ya tienes cuenta?
                <a class="link" href="../registrarse/index.php"> Registrate</a>
            </p>
        </div>
    </form>

</body>

</html>