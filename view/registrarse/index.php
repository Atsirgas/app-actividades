<?php

include "../../bd_app/bd.php";
error_reporting(0);
session_start();




if(isset($_SESSION["nombre"])){

    header("location:../../index.php");
}

if(isset($_POST["registrarse"])){
    $username=$_POST["nombre"];
    $email=$_POST["email"];
    $pwd= md5($_POST["password"]);
    $cpwd= md5($_POST["cpassword"]);
        
    
    if($pwd==$cpwd){
            $sql="SELECT * FROM usuarios WHERE correo_usu='$email'";
            $result=mysqli_query($conn, $sql);
             if(!$result->num_rows > 0){

                 $sql="INSERT INTO bd_app (nom_usu,correo_usu,password_usu) VALUE ('$username','$email','$pwd',)";
                 $result=mysqli_query($conn,$sql);
                 
                 if($result){
                    echo "<script>alert('usuario registrado con éxito')</script>";
                    $username="";
                    $email="";
                    $_POST["password"]="";
                    $_POST["cpassword"]="";
                 
                } else{
                    echo "<script>alert('Ocurrio un error')</script>";
                 }

            
                }else{
                echo "<script>alert('El correo ya existe')</script>";
            }
        }else{
            echo "<script>alert('Las contraseñas no coinciden')</script>";
        }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/e0b63cee0f.js" crossorigin="anonymous"></script>
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="../../css/styles.css">

</head>

<body class="pagina2">
    <form action="register_proc.php" method="post" class="formulario">
        <h1 class="h1">Registrate</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <input name="nombre" class="input-form" type="text" placeholder="Nombre Completo">
            </div>
            <div class="input-contenedor">
                <input name="email" class="input-form" type="email" placeholder="Correo Electronico">
            </div>
            <div class="input-contenedor">
                <input name="password" class="input-form" type="password" placeholder="Contraseña">
            </div>
            <div class="input-contenedor">
                <input name="cpassword" class="input-form" type="password" placeholder="Contraseña">
            </div>
            <input type="submit" value="Registrarse" name="registrarse" class="botton">
            <p class="text">¿Ya tienes cuenta?
                <a class="link" href="../login/index.html">Iniciar Sesion</a>
            </p>
        </div>
    </form>

</body>

</html>