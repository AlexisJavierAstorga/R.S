<?php
session_start();
include("conexion.php");
$result = mysqli_query($con, "SELECT cantidad FROM tbl_inventarioProductos WHERE nombre='Cuadrib'");
if ($row = mysqli_fetch_array($result)){
  $_SESSION['cantidad']=$row["cantidad"];
} else {
echo "¡ No se ha encontrado ningún registro !";
}
  /* echo "<table border = '1'> \n";
   echo "<tr><td>Cantidad</td></tr> \n";
   do {
      echo "<tr><td>".$row["cantidad"]."</td></tr> \n";
   } while ($row = mysqli_fetch_array($result));
   echo "</table> \n";
} else {
echo "¡ No se ha encontrado ningún registro !";
}*/
?>
