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
//CI`, `NOMBRE`, `APEPATERNO`, `APEMATERNO`, `
//NACIONALIDAD`, `SEXO`,
function CrearPersona($array){
    print('***********************************************');
    $ci = $array[0]['CI'];
    $nombre = $array[0]['NOMBRE'];
    $apePaterno = $array[0]['APEPATERNO'];
    $apeMaterno = $array[0]['APEMATERNO'];
    $nacionalidad = $array[0]['NACIONALIDAD'];
    $sexo = $array[0]['SEXO'];

    $query = "insert into PERSONA (CI, NOMBRE, APEPATERNO, APEMATERNO, NACIONALIDAD, SEXO)values( '$ci', '$nombre', '$apePaterno', '$apeMaterno', '$nacionalidad', '$sexo')";

    NonQuery($query);
    return true;

}



?>