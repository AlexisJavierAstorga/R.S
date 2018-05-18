<?php
// Conectando, seleccionando la base de datos
$s="localhost";
$bd="id5772542_prueba";
$u="id5772542_root";
$p="123456";

$conexion = new mysqli($s,$u,$p,$bd);

if($conexion-> connect_errno){
  echo 'No se pudo conectar a la base de datos';
}else{
  echo 'Conexión exitosa';
}
?>
