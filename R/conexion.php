<?php
// Conectando, seleccionando la base de datos
$conexion = new mysqli('localhost', 'id5772542_root', '123456', 'id5772542_prueba');

if($conexion){
  echo 'Conexión exitosa';
}else{
  echo 'No se pudo conectar a la base de datos';
}
?>
