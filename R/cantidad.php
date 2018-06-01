<?php
include("conexion.php");
//$result = mysqli_query($con, "SELECT (tbl_clientes.correo,tbl_inventarioVentas.IDPROD,tbl_inventarioVentas.nombre,tbl_inventarioVentas.cantidadProducto,tbl_inventarioVentas.totalVenta,tbl_inventarioVentas.fechaCompra) FROM tbl_clientes,tbl_inventarioProductos,tbl_inventarioVentas WHERE tbl_clientes.IDCLI=tbl_inventarioVentas.Cliente");
$result = mysqli_query($con, "SELECT * FROM tbl_clientes,tbl_inventarioProductos,tbl_inventarioVentas WHERE tbl_clientes.IDCLI=tbl_inventarioVentas.Cliente AND correo='alexis@gmail.com'");

if ($row = mysqli_fetch_array($result)){
  echo "<table border = '1'><tr><td>Correo</td><td>ID Producto</td><td>Nombre producto</td><td>Cantidad del producto</td><td>Total venta</td><td>Fecha de compra</td></tr>";
  do {
      echo "<tr><td>".$row["correo"]."</td><td>".$row["IDPROD"]."</td><td>".$row["nombre"]."</td><td>".$row["cantidadProducto"]."</td><td>".$row["totalVenta"]."</td><td>".$row["fechaCompra"]."</td></tr> \n";
   } while ($row = mysqli_fetch_array($result));
   echo "</table> \n";
} else {
echo "¡ No haz realizado compras !";
}
 ?>
