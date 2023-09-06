<?php
session_start();
error_reporting(0);
$varSesion = $_SESSION['user'];

if($varSesion == null || $varSesion = ''){


    header("location:../404.php");

    die();
      
}

?>


<!DOCTYPE html>

<html lang="en" data-bs-theme="blue">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    
   echo ($nombrePagina)
?>

</title>

<link rel="icon" type="image/png" href="../favicon.png"/>



<link rel="stylesheet" href="../assets/style.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/buttons/2.3.3/css/buttons.bootstrap5.min.css"
      />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo01">
      <a class="navbar-brand" href="home.php"><img class="img-fluid" width="200" height="100" src="../assets/image/ferremas-nav-icon.png" alt=""></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Inicio</a>
        </li>
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="../view/registroproducto.php">Producto</a></li>
            <li><a class="dropdown-item" href="../view/registroproveedor.php">Proveedor</a></li>
            <li><a class="dropdown-item" href="../view/registrocuenta.php">Cuenta</a></li>
           
        
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Reporte
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="../view/reporteingreso.php">Reporte de ingresos</a></li>
            <li><a class="dropdown-item" href="../view/reporteventa.php">Reporte de ventas</a></li>
            <li><a class="dropdown-item" href="../view/proveedor.php">Reporte de Proveedores</a></li>
            <li><a class="dropdown-item" href="../view/reportecuenta.php">Reporte de Cuentas</a></li>
            <li><a class="dropdown-item" href="../view/reporteventaanual.php">Reporte Anual</a></li>
        
          </ul>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicios
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="../view/ingresoproducto.php">Ingreso de Mercadería</a></li>
            <li><a class="dropdown-item" href="../view/venta.php">Venta </a></li>
          
        
          </ul>
        </li>
        
      
        <li class="nav-item">
          <a class="nav-link" href="../view/inventario.php">Inventario</a>
        </li>
        
      </ul>
      <ul class="nav justify-content-center">
        <li class="navs">
          Bienvenida  <?php echo $_SESSION['user']?>
        </li>
       
     </ul>
     <ul class="nav justify-content-center">
        
        <li class="nav-item">
          <a class="navbar-text" href="../controlador/cerrarsesion.php">Cerrar Sesion</a>
        </li> 
     </ul>
    </div>
  </div>
</nav>


 <div class="container">