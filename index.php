<?php
require_once('utilidades.php');

/*require_once("db.php");
$query = "select * from persona";
$resultado = ObtenerRegistros($query);
print_r($resultado);*/


if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
    $obtenerURL = $_GET['url'];
    //print($obtenerURL);
    switch ($obtenerURL) {
        case "persona":
            $per = TodasPersonas();
            print_r(json_encode($per));
            break;
        
        default:
            # code...
            break;
    }

}else if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
    print('POST');
    http_response_code(200);
}else{
    print('no hay respuesta');
    http_response_code(400);
}



?>