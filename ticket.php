<?php


require_once('Librerias/tcpdf.php');


$pdf = new TCPDF();

$pdf->SetCreator('Nombre del Creador');
$pdf->SetAuthor('Nombre del Autor');
$pdf->SetTitle('Ticket');

$pdf->AddPage();


include "db.php";

if (mysqli_connect_errno()) {
    die("Fallo al conectar a MySQL: " . mysqli_connect_error());
}


$consulta = "SELECT * FROM reservar"; 
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    while ($datos = mysqli_fetch_assoc($resultado)) {
        $contenido = "
            <hr>
            <h1>Ticket de Compra</h1>
            <p>Id: {$datos['id']}</p>
            <p>Destino: {$datos['destino']}</p>
            <p>Numero de habitaciones: {$datos['habitaciones']}</p>
            <p>Fecha de inicio: {$datos['inicio']}</p>
            <p>Tipo de habitacion: {$datos['tipo']}</p>
            <p>Cantidad de personas: {$datos['personas']}</p>
            <p>Total: {$datos['total']}</p>
            
        ";

        $pdf->writeHTML($contenido, true, false, true, false, '');
    }
    
} else {
    $pdf->writeHTML("<p>No se encontraron registros en la base de datos.</p>", true, false, true, false, '');
}

mysqli_close($conexion);


$pdf->Output('ticket.pdf', 'I'); 
?>