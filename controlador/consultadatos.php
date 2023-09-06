<?php


require 'conexion.php';


$sqlInventario = "SELECT * FROM producto ORDER BY nombreProducto";
$Inventario = $conexion->query($sqlInventario);

$sqlProveedor = "SELECT * FROM proveedor ORDER BY razonsocialProveedor";
$Proveedor = $conexion->query($sqlProveedor);

$sqlIngresoProducto = "SELECT * FROM ingresosproducto INNER JOIN producto ON ingresosproducto.idProducto = producto.idProducto INNER JOIN proveedor ON ingresosproducto.idProveedor = proveedor.idProveedor";
$IngresoProducto = $conexion->query($sqlIngresoProducto);

$sqlVentas = "SELECT * FROM venta INNER JOIN producto ON venta.idProducto = producto.idProducto";
$Ventas = $conexion->query($sqlVentas);

$sqlVentaDia = "SELECT ROUND(sum(precioVenta),2) as ventadinero FROM venta WHERE `fechaVenta` = CURDATE()";
$VentasDia = $conexion->query($sqlVentaDia);

$sqlCantidadDia = "SELECT count(idProducto) as ventaProducto FROM venta WHERE `fechaVenta` = CURDATE()";
$CantidadVentasDia = $conexion->query($sqlCantidadDia);

$sqlBajoStock = "SELECT count(idProducto) as stockbajo FROM producto WHERE cantidadProducto <= stockMinimoProducto";
$stockBajo = $conexion->query($sqlBajoStock);

$sqlProveedor = "SELECT * FROM proveedor";
$Proveedor = $conexion->query($sqlProveedor);


$sqlVentaMes = "SELECT ROUND(sum(precioVenta),2) AS totalVentaMes, MONTH(fechaVenta) AS mes FROM venta WHERE MONTH(fechaVenta) = MONTH(CURRENT_DATE()) GROUP BY mes ORDER BY mes";
$VentaMes = $conexion->query($sqlVentaMes);

$sqlCantidadVentasMes ="SELECT COUNT(precioVenta) AS totalCantidadMes, MONTH(fechaVenta) AS mes FROM venta WHERE MONTH(fechaVenta) = MONTH(CURRENT_DATE()) GROUP BY mes ORDER BY mes";
$CantidadMes = $conexion->query($sqlCantidadVentasMes);

$sqlCompraDia="SELECT ROUND(sum(precioIngresoCompraProducto*cantidadIngresoProducto),2) AS totalCompraDia, MONTH(fechaIngreso) AS mes FROM ingresosproducto WHERE fechaIngreso = CURDATE()";
$compraDia=$conexion->query($sqlCompraDia);

$sqlCompraMes="SELECT ROUND(sum(precioIngresoCompraProducto*cantidadIngresoProducto),2) AS totalCompraMes, MONTH(fechaIngreso) AS mes FROM ingresosproducto WHERE MONTH(fechaIngreso) = MONTH(CURRENT_DATE()) GROUP BY mes ORDER BY mes";
$compraMes=$conexion->query($sqlCompraMes);




$sqlGananciaDia="SELECT SUM(((precioVenta/cantidadVenta)-precioCompraProducto)*cantidadVenta)  as gananciaDia from venta INNER JOIN producto ON venta.idProducto = producto.idProducto WHERE fechaVenta = CURDATE()";
$gananciaDia=$conexion->query($sqlGananciaDia);

$sqlGananciaMes="SELECT SUM(((precioVenta/cantidadVenta)-precioCompraProducto)*cantidadVenta) as gananciaMes from venta INNER JOIN producto ON venta.idProducto = producto.idProducto WHERE MONTH(fechaVenta) = MONTH(CURRENT_DATE())";
$gananciaMes=$conexion->query($sqlGananciaMes);


$sqlCuentas="SELECT * FROM cuentas INNER JOIN proveedor ON proveedor.idProveedor = cuentas.idProveedor";
$cuentas=$conexion->query($sqlCuentas);

$sqlEspañol="SET lc_time_names = 'es_ES'";
$español = $conexion ->query($sqlEspañol);
$sqlVentasAnual = "SELECT MONTHNAME(venta.fechaVenta) AS Mes, SUM(((venta.precioVenta/venta.cantidadVenta)-producto.precioCompraProducto)*venta.cantidadVenta) AS Ganancias, SUM(venta.precioVenta) as Ventas FROM venta INNER JOIN producto ON venta.idProducto = producto.idProducto  WHERE YEAR(venta.fechaVenta) = '2023' GROUP BY Mes ORDER BY Mes ASC";
$ventasAnual =$conexion ->query($sqlVentasAnual);

$sqlComprasAnual = "SELECT MONTHNAME(ingresosproducto.fechaIngreso) AS Mes, ROUND(sum(precioIngresoCompraProducto*cantidadIngresoProducto),2) AS Total FROM ingresosproducto INNER JOIN producto ON producto.idProducto = ingresosproducto.idProducto WHERE YEAR(ingresosproducto.fechaIngreso) = '2023' GROUP BY Mes ORDER BY Mes DESC;";
$comprasAnual = $conexion -> query($sqlComprasAnual);




?>
