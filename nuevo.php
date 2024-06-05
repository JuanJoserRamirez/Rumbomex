<?php

$dbhost = "localhost";
$dbname = "rumbomex";
$dbuser = "root";
$dbpass = "";

$usuario=$_POST['txtusuario'];
$contraseña=$_POST['txtcontraseña'];


 if(($usuario!="")&&($contraseña!="")){
    $sql = "INSERT INTO `usuario` (`nombre` , `contraseña`)
    VALUES('$usuario' , '$contraseña');";

    $conexion=mysqli_connect
    ($dbhost,$dbuser,$dbpass,$dbname,"3306") or
    die("Problemas con la conexion");
   
    mysqli_query($conexion,"SELECT * FROM usuario");
    mysqli_query($conexion,$sql);
    mysqli_close($conexion);
   
}

include "crear.html" 

?>