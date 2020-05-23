<?php
require_once('db.php');

function TodasPersonas(){
$consulta = "select * from persona";
$resp = ObtenerRegistros($consulta);
return ConvertirUTF8( $resp);
}

function TodasPersonasID($id){
    $consulta = "SELECT * FROM persona WHERE CI = $id";
    $resp = ObtenerRegistros($consulta);
    return ConvertirUTF8( $resp);
}



?>