<?php
// Conectando, seleccionando la base de datos
  //$con=mysqli_connect('localhost','root','','rs') or die ("Error al conectar con la base de datos");
//$con = new mysqli("localhost", "root", "", "rs");
$con = new mysqli("192.168.56.1","3306", "root", "", "db_rst_pruebas");
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}
?>
