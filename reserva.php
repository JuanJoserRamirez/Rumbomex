<?php

$dbhost = "localhost";
$dbname = "rumbomex";
$dbuser = "root";
$dbpass = "";

include ("db.php");

$destino = $_POST["destino"];
$habitacion = $_POST["habitacionesmex"];
$inicio = $_POST["iniciomex"];
$tipo = $_POST["tiposmex"];
$persona = $_POST["personasmex"];
$total = ($habitacion * 2000);

if (!empty($destino) && !empty($habitacion) && !empty($inicio) && !empty($tipo) && !empty($persona) && !empty($total)) {
    $conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Problemas con la conexion");

    
    $verificacion = "SELECT * FROM reservar WHERE destino='$destino' AND inicio='$inicio' AND tipo='$tipo'";
    $resultado_verificacion = mysqli_query($conexion, $verificacion);
    
    if (mysqli_num_rows($resultado_verificacion) > 0) {
        echo '<script>alert("Habitacion no disponible");</script>';
    } else {
        $sql = "INSERT INTO reservar (destino, habitaciones, inicio, tipo, personas, total) VALUES ('$destino', '$habitacion', '$inicio', '$tipo', '$persona', '$total')";
        mysqli_query($conexion, $sql);
    }

    mysqli_close($conexion);
}

include "reservar.html";
   
?>