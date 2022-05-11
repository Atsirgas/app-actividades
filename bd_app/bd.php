<?php
$server="localhost";
$user="root";
$pwd="";
$db="BD_APP";

$conn= mysqli_connect($server,$user,$pwd,$db);

if(!$conn){
    die("Conexion fallida");
}

?>