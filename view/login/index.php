<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/styles.css">
</head>
<?php

 session_start();
 $_SESSION['usuario']=false;

?>

<body class="pagina2">

    <form action="login.proc.php" method="post" class="formulario">
        <h1 class="h1">login</h1>
        <div class="contenedor ">
            <div class="input-contenedor inputContainer">
                <input class="input-form" type="email" name="email" placeholder="Correo Electronico">
            </div>
            <div class="input-contenedor">
                <input class="input-form" type="password" name="password" placeholder="Contraseña">
            </div>
            <input type="submit" name="entrar" value="login" class="botton">
            <p class="text">¿Ya tienes cuenta?
                <a class="link" href="../registrarse/index.php"> Registrate</a>
            </p>
        </div>
    </form>

</body>

</html>