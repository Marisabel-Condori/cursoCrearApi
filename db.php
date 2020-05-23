<?php 
$servidor = 'localhost';
$user = 'root';
$password = '';
$db = 'recintodb';

$conn = mysqli_connect($servidor, $user, $password, $db);

if ($conn -> connect_error) 
    {die($conn -> connect_error);}
else{
echo 'conexion exitosa';}

?>