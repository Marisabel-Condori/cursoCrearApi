<?php

/*require_once("db.php");
$query = "select * from persona";
$resultado = ObtenerRegistros($query);
print_r($resultado);*/


if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
    $obetnerURL = $_GET['url'];
    print($obetnerURL);

}else if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    print('POST');
    http_response_code(200);
}else{
    print('no hay respuesta');
    http_response_code(400);
}



?>