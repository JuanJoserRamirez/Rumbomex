<?php
 
    $usuario=$_POST['txtusuario'];
    $contraseña=$_POST['txtcontraseña'];
    session_start();
    $_SESSION['txtusuario']=$usuario;

    include('db.php');

    $consulta="SELECT * FROM usuario where nombre='$usuario' and contraseña='$contraseña'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location: Cuerpoini.html");
    }else{
        ?>
        <?php
        include("sesion.html");
        ?>
        <h1>Error en autentificacion</h1>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
  
?>