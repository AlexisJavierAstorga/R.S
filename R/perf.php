<?php
include("conexion.php");

$p1 = mysql_query ("SELECT correo FROM tbl_clientes WHERE correo='$_POST[email]'");
$pp1=mysqli_fetch_array($p1);
 ?>
