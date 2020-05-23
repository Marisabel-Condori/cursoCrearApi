<?php
require_once('db.php');

function TodasPersonas(){
$consulta = 'select * from persona';
$resp = ObtenerRegistros($consulta);
return $resp;

}



?>