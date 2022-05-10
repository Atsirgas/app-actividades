<?php
const SERVER="localhost";
const USER="root";
const PASSWORD="";
const BD="BD_APP";
if (isset($_POST['login'])){
    if (isset($_POST['email']) && isset($_POST['password'])){
        $connection = mysqli_connect(SERVER,USER,PASSWORD,BD);
        $email = $_POST['email'];
        $pwd = sha1($_POST['password']);
        echo $pwd<
        $result = mysqli_query($connection,"SELECT COUNT(1) AS 'usuarios' FROM usuarios WHERE correo_usu = '$email' AND password_usu = '$pwd'");

        session_start();
        $_SESSION['login']=false;

        if (mysqli_fetch_assoc($result)['usuarios'] > 0){
            // $_SESSION['login']=true;
            echo "<script>alert('Bienvenide.');</script>";
            echo "<script> window.location='../actividades.html'</script>";
        }else{  
            echo "<script>alert('Usuario incorrecto.');</script>";
            echo "<script> window.location='./index .html'</script>";
        } 
    }
}
?>