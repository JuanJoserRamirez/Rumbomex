<?php
 
    $usuario=$_POST['txtadmin'];
    $contraseña=$_POST['txtcontra'];
    session_start();
    $_SESSION['txtusuario']=$usuario;

    include('db.php');

    $consulta="SELECT * FROM administradores where nombre='$usuario' and contraseña='$contraseña'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location: Administrador.html");
    }else{
        ?>
        <?php
        include("sesionAdmin.html");
        ?>
        <h1>Error en autentificacion</h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
  
?>