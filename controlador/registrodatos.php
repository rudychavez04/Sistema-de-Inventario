<?php

require 'conexion.php';
 date_default_timezone_set('America/Lima');
 $fecha=date("Y-m-d");
 date("d/m/Y", strtotime($fecha));

// function variablesGlobales (){
//     global $fecha, $conexion;

//     return ($fecha.$conexion);
// } 
$accion=$_POST['accion'];

switch ($accion) {

    case 'registroProducto':
        sleep(1.5);
        registroProducto();
    break;
    case 'registroCuenta':
        sleep(1.5);
        registroCuenta();
    break;

    case 'registroProveedor':
        sleep(1.5);
        registroProveedor();
    break;

    case 'ingresoProducto':
        sleep(1.5);
        ingresoProducto();
    break;
    case 'venta':
        sleep(1.5);
        ventaProducto();
    break;
    
    case 'editarProducto':
        sleep(1.5);
        editarProducto();
    break;
    case 'pagarCuenta':
        sleep(1.5);
        pagarCuenta();
    break;

    default:
    
    break;
}
function registroProducto (){

    global $fecha, $conexion;
    
    $nombreProveedor=$_POST['nproveedor'];
    $nombreProducto=$_POST['nproducto'];
    $cantidadProducto = $_POST['cproducto'];
    $precioCompraProducto = $_POST['pcompraproducto'];
    $precioVentaProducto = $_POST['pventaproducto'];
    $stockMinimo = $_POST['stockMinimo'];
    $stockIntermedio = $_POST['stockIntermedio'];
    $unidadMedida = $_POST['umedida'];
    $sql="INSERT INTO producto (idProveedor,nombreProducto,cantidadProducto,precioCompraProducto,precioVentaProducto,fechaRegistroProducto, stockMinimoProducto, stockIntermedioProducto,uMedidaProducto)
    VALUES ('$nombreProveedor','$nombreProducto','$cantidadProducto','$precioCompraProducto','$precioVentaProducto','$fecha','$stockMinimo','$stockIntermedio','$unidadMedida')";
    echo $sql;
    $conexion->query($sql);

    $sqlUltimo="SELECT idProducto FROM producto ORDER BY idProducto DESC LIMIT 1";
    $Ultimo = $conexion->query($sqlUltimo);


    while($row_general = $Ultimo->fetch_assoc()){
        $idProductos=$row_general['idProducto'];
        
    }

    $sqlIngreso="INSERT INTO ingresosproducto (idProveedor,idProducto,cantidadIngresoProducto,precioIngresoCompraProducto,fechaIngreso)
    VALUES ('$nombreProveedor','$idProductos','$cantidadProducto','$precioCompraProducto','$fecha')";
   
    $conexion->query($sqlIngreso);

    return header('Location: ../view/registroproducto.php');
};

function registroProveedor (){

    global $fecha, $conexion;
    
    $rucProveedor=$_POST['rucProveedor'];
    $razonSocialProveedor=$_POST['razonSocialProveedor'];
    $telefonoProveedor=$_POST['telefonoProveedor'];
   
    
    $sql="INSERT INTO proveedor (rucProveedor,razonSocialProveedor,telefonoProveedor,fechaRegistroProveedor)
    VALUES ('$rucProveedor','$razonSocialProveedor','$telefonoProveedor','$fecha')";
    
    echo $sql;
    $conexion->query($sql);

    ?>
    

<?php

    return header('Location: ../view/registroproducto.php' );
};

function ingresoProducto (){

    global $fecha, $conexion;
    
  
    $idProveedor=$_POST['nProveedor'];
    $idProducto = $_POST['nproducto'];
    $cantidadProducto = $_POST['cproducto'];
    $precioCompraProducto = $_POST['cprecioproducto'];
    $observacionIngresoProducto = $_POST['observacionproducto'];
   
    
    $sql="INSERT INTO ingresosproducto (idProveedor,idProducto,cantidadIngresoProducto,precioIngresoCompraProducto,observacionIngresoProducto,fechaIngreso)
    VALUES ('$idProveedor','$idProducto','$cantidadProducto','$precioCompraProducto','$observacionIngresoProducto','$fecha')";

    $sqlUpdate="UPDATE producto SET cantidadProducto= cantidadProducto+'$cantidadProducto' WHERE `idProducto`='$idProducto'";
    
    echo $sql;
    
    $conexion->query($sql);
    $conexion->query($sqlUpdate);
  

    return header('Location: ../view/ingresoproducto.php');
};

function ventaProducto (){

    global $fecha, $conexion;
    
   
    $nomCliente=$_POST['ncliente'];
    $idProducto = $_POST['nproducto'];
    $cantidadVentaProducto = $_POST['cproducto'];
    $precioVentaProducto = $_POST['pproducto'];
    $observacionVentaProducto = $_POST['observacionproducto'];
   
    
    $sql="INSERT INTO venta (cliente,idProducto,cantidadVenta,precioVenta,Observacion,fechaVenta)
    VALUES ('$nomCliente','$idProducto','$cantidadVentaProducto','$precioVentaProducto','$observacionVentaProducto','$fecha')";
    
    $sqlUpdate="UPDATE producto SET cantidadProducto= cantidadProducto-'$cantidadVentaProducto' WHERE `idProducto`='$idProducto'";

    echo $sql;
    $conexion->query($sql);
    $conexion->query($sqlUpdate);

    return header('Location: ../view/venta.php');
};

function editarProducto (){

    global  $conexion;
    
  
    $id=$_POST['idProducto'];
    $nombreProducto = $_POST['nproducto'];
    $cantidadVentaProducto = $_POST['cproducto'];
    $precioVentaProducto = $_POST['pproducto'];
    $stockMinimo = $_POST['stockMinimo'];
    $stockIntermedio = $_POST['stockIntermedio'];
    
   
    
    $sql="UPDATE producto SET nombreProducto = '$nombreProducto',cantidadProducto = '$cantidadVentaProducto', precioVentaProducto = '$precioVentaProducto', stockMinimoProducto = '$stockMinimo', stockIntermedioProducto = '$stockIntermedio' WHERE idProducto = '$id'";
    
    

    echo $sql;
    $conexion->query($sql);
    

    return header('Location: ../view/inventario.php');
};


function registroCuenta (){

    global $fecha, $conexion;
    
    $nombreProveedor=$_POST['nproveedor'];
    $cantidadPagado=$_POST['cantidadPago'];
    $cantidadPendiente = $_POST['cantidadTotal']-$_POST['cantidadPago'];
    $cantidadTotal = $_POST['cantidadTotal'];
    $observaciónCuenta = $_POST['observacionCuenta'];
    $estadoCuenta="Pendiente";
   
    $sql="INSERT INTO cuentas (idProveedor,dineroPagado,dineroPendiente,totalCuenta,observacionCuenta,estadoCuenta,fechaCuenta)
    VALUES ('$nombreProveedor','$cantidadPagado','$cantidadPendiente','$cantidadTotal','$observaciónCuenta','$estadoCuenta','$fecha')";

    $conexion->query($sql);


    return header('Location: ../view/registrocuenta.php');
};

function pagarCuenta (){

    global  $conexion;
    
  
    $id=$_POST['idCuenta'];
    $pagoActual=$_POST['pagoActual'];
    $totalCuenta=$_POST['totalCuenta'];


    $montoPagar = $_POST['montoPagar'];
    $estadoCuenta = "Pendiente";
    $constante=$pagoActual+$montoPagar;
  
    if($constante>=$totalCuenta){
        $estadoCuenta = "Pagado";
    }
    else{
        $estadoCuenta = "Pendiente";
    };
   
    
    $sql="UPDATE cuentas SET dineroPagado = dineroPagado+'$montoPagar', estadoCuenta='$estadoCuenta' WHERE idCuenta = '$id'";
    
    

    echo $sql;
    $conexion->query($sql);
    
   
    return header('Location: ../view/reportecuenta.php');
};

?>
