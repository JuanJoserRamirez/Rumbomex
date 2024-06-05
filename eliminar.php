<?php

$dbhost = "localhost";
$dbname = "rumbomex";
$dbuser = "root";
$dbpass = "";

$eliminar=$_POST['eliminartxt'];

 if(($eliminar!="")){
    $sql = "DELETE FROM reservar WHERE id = $eliminar";
    
    
    $conexion=mysqli_connect
    ($dbhost,$dbuser,$dbpass,$dbname,"3306") or
    die("Problemas con la conexion");
   
    mysqli_query($conexion,"SELECT * FROM reservar");
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
   
}


include "Administrador.html" 

?>