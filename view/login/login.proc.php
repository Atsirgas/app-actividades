<?php


// $email = $_POST['email'];
// $pwd = sha1($_POST['password']);


// if (isset($_POST['login'])){
//     if (isset($_POST['email']) && isset($_POST['password'])){
//         $connection = mysqli_connect('localhost','root','','bd_app');
//         $result = mysqli_query($connection,"SELECT * FROM usuarios WHERE correo_usu = '$email' AND password_usu = '$pwd'");

//         session_start();
//         $_SESSION['login']=false;

//         if ($USER = mysqli_fetch_assoc($result)){
//                 $_SESSION['login']=true;
//             echo "<script>alert('Bienvenido.');</script>";
//             echo "<script> window.location='../actividades.html'</script>";
//         }else{  
//             echo "<script>alert('Usuario incorrecto.');</script>";
//             echo "<script> window.location='./index.html'</script>";
//         } 
//     }
// }
?>



<?php

$email = $_POST['email'];
$password = sha1($_POST['password']);

$conn = mysqli_connect('localhost', 'root', '', 'bd_app');
// se asume conexion en $conn incluido desde conexion.php, ejemlo:
// $conn= mysqli_connect("server", "mi_usuario", "mi_contraseña", "mi_bd");

// añadiría un limit 1 a la consulta pues solo esperamos un registro
$consulta = mysqli_query ($conn, "SELECT * FROM usuarios WHERE correo_usu = '$email' AND password_usu = '$password'");  
//SELECT * FROM usuarios WHERE correo_usu = 'javivi@gmail.com' AND password_usu = '9c0fcecf1cbad2f0fcb8'

// esto válida si la consulta se ejecuto correctamente o no
// pero en ningún caso válida si devolvió algún registro
if($consulta){ 
    echo "<script>alert('Bienvenido.');</script>"; 
    echo "<script> window.location='../actividades.html'</script>";
    
    // si la consulta falla es bueno evitar que el código se siga ejecutando
    exit;
} else {
    echo "<script>alert('Bienvenido.');</script>";
    echo "<script> window.location='./index.php'</script>";
}
// este else sobra
//else { 
    //print "Bienvenido"; 
//} 

// validemos pues si se obtuvieron resultados 
// Obtenemos los resultados con mysqli_fetch_assoc
// si no hay resultados devolverá NULL que al convertir a boleano para ser evaluado en el if será FALSE
if($user = mysqli_fetch_assoc($consulta)) {
echo "el usuario y la pwd son correctas";
sessionstart();
$_SESSION['usuario']=$usuario['id_usu'];
} else {
echo " Usuario incorrecto o no existe ";
}


?>
