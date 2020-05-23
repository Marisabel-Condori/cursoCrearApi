<?php 
$servidor = 'localhost';
$user = 'root';
$password = '';
$db = 'recintodb';

$conn = mysqli_connect($servidor, $user, $password, $db);

if ($conn -> connect_error) 
    {die($conn -> connect_error);}
else{
//echo 'conexion exitosa';
}

//guardar, modificar, eliminar
function NonQuery($sqlstr, &$conn = null){
    if (!$conn)global $conn;
    $result = $conn -> query($sqlstr);
    return $conn -> affect_row;
}

//select
function ObtenerRegistros($sqlstr, &$conn = null){
    
    if (!$conn)global $conn;
  //  echo($sqlstr);
    $result = $conn -> query($sqlstr);
    $vectorResult = array();
    foreach ($result as $registros) {
        $vectorResult [] = $registros;
    }

    return $vectorResult;
}

?>