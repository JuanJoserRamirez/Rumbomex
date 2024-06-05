<?php

$inc = include("db.php");
if ($inc) {
	$consulta = "SELECT * FROM reservar";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
		$destino = $row['destino'];
	    $habitaciones = $row['habitaciones'];
	    $inicio = $row['inicio'];
	    $tipo = $row['tipo'];
        $personas = $row['personas'];
        $total = $row['total'];       
	    ?>
        <div>
        	<div>
        		<p>
					<hr>
        			<b>ID: </b> <?php echo $id ?><br>
					<b>Destino: </b> <?php echo $destino ?><br>
        		    <b>Numero de habitaciones: </b> <?php echo $habitaciones ?><br>
        		    <b>inicio: </b> <?php echo $inicio ?><br>
                    <b>Tipo de habitacion: </b> <?php echo $tipo ?><br>
                    <b>Cantidad de persona: </b> <?php echo $personas ?><br>
                    <b>Total: </b> <?php echo $total ?><br><br><br>
        		</p>
        	</div>
        </div> 
		
	    <?php
	    }
	}
}
?>