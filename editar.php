<?php

$dbhost = "localhost";
$dbname = "rumbomex";
$dbuser = "root";
$dbpass = "";


$editar = $_POST['editartxt'];
$destinos = $_POST['destinoed'];
$editarhab = $_POST['editarhab'];
$editarinicio = $_POST['editarfecha'];
$editartipo = $_POST['editartipo'];
$editarpersona = $_POST['editarperso'];
$total = $_POST['totaltxt'];
// $a=$_POST['txtcontraseña'];

if(($editar!="")){
    $sql = "UPDATE reservar SET destino='$destinos', habitaciones='$editarhab', inicio='$editarinicio',
    tipo='$editartipo', personas='$editarpersona', total='$total' 
    WHERE id = $editar";
    
    
    $conexion=mysqli_connect
    ($dbhost,$dbuser,$dbpass,$dbname,"3306") or
    die("Problemas con la conexion");
   
    mysqli_query($conexion,"SELECT * FROM reservar");
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
   
}

include "Administrador.html" 

?>