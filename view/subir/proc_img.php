<?php
//incluimos conexion
include '../conexion.php';
//definimos variables
if (isset($_POST['subir'])) {
    $desc=$_POST['texto'];
    $foto=$_POST['foto'];
    $titulo=$_POST['titulo'];
    // $dueño=$_SESSION['usu'];
    //definimos donde queremos que se guarde los documentos subidos (no funciona)
        $destino = $_SERVER['DOCUMENT_ROOT'].'/www/danny/app-actividades/img/'.$foto['name'];
    //movemos el archivo a donde nsotros queamos
        if (move_uploaded_file($foto['muf_name'], $destino)) {
            echo "subido con exito";
            //consulta para insertarlo en la base de datos
            $consulta = "INSERT INTO bd_app (`titol_act`, `desc_act`,`img_act`) VALUES ('".$titulo."', '".$desc."', '".$foto['name']."');";
            // $consulta = "INSERT INTO bd_app (`titol_act`, `desc_act`,`img_act`, `dueño_act`) VALUES ('".$titulo."', '".$desc."', '".$foto['name']."', '".$dueño."');";  ----- revisar para poder hacerlo con dueño
                //se inserta
            $insert = mysqli_query($conn, $consulta);
        }else{
            echo "no se ha podido subir";
        }
    }