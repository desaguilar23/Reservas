<?php

$rut_id = $_POST['rut_id'];

$rut_estadoLog = $_POST['rut_estadoLog'];

$aer_id_origen = $_POST['aer_id_origen'];

$aer_id_destino = $_POST['aer_id_destino'];


require('Conexion.php');

$con = Conectar();
$sql = 'INSERT INTO Ruta (rut_estadoLog, aer_id_origen, aer_id_destino) VALUES (:estado, :ciudadO,:ciudadD)';
$q = $con->prepare($sql);

$q->execute(array(':estado'=>$rut_estadoLog, ':ciudadO'=>$aer_id_origen, ':ciudadD'=>$aer_id_destino));

?>
