<?php
$connection = mysqli_connect('localhost', 'root', '', 'img');
if($connection){
    echo "exito";
}else{
    echo "fallow";
}