<?php
include("conexion.php");
$query= "SELECT tbl_inventarioProductos.imagen1 FROM tbl_inventarioProductos WHERE tbl_inventarioProductos.nombre='Cuadrib'";
$resultado=$con->query($query);
while ($row = $resultado->fetch_assoc()){
  ?>
<tr>
  <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen1']); ?>"/></td>
</tr>

  <?php
}
 ?>
