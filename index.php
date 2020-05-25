<?php
require_once('utilidades.php');

/*require_once("db.php");
$query = "select * from persona";
$resultado = ObtenerRegistros($query);
print_r($resultado);*/

if (isset($_GET['url'])) {
    $obtenerURL = $_GET['url'];
    if ($_SERVER['REQUEST_METHOD'] == 'GET' ) {
        $numero=intval(preg_replace('/[^0-9]+/', '',$obtenerURL), 10);
        print($numero);
    
        //print($obtenerURL);
        switch ($obtenerURL) {
            case "persona":
                $per = TodasPersonas();
                print_r(json_encode($per));
                http_response_code(200);
                break;
    
                case "persona/$numero":
                    $per = TodasPersonasID($numero);
                    print_r(json_encode($per));
                    http_response_code(200);
                    break;
            
            default:;
        }
    
    }else if ($_SERVER['REQUEST_METHOD'] == 'POST' ){

        $postBody = file_get_contents("php://input");
        print_r(json_decode($postBody));
        print_r($postBody);
        http_response_code(200);
    }else{
        print('no hay respuesta');
        http_response_code(400);
    }
} else {
    # code...
}






?>