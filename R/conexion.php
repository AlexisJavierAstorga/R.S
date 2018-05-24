<?php
// Conectando, seleccionando la base de datos
  //$con=mysqli_connect('localhost','root','','rs') or die ("Error al conectar con la base de datos");
$con = new mysqli("localhost", "root", "", "rs");
if ($con->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
}
echo $con->host_info . "\n";
?>
