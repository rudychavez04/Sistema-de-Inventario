<?php
$nombrePagina="Home - Ferretería Ferremas";
include("../view/plantilla/header.php");
include("../controlador/consultadatos.php");
?>

<div class="center-col-sm-4">
<div class="title">
        <p>Dashboard</p>
    </div>

    <div class="container">
       
        <div class="row">
                <div class="col">
                        <a href="reporteventa.php">
                <div class="card border-primary mb-3 ">
                        <div class="card-body">
                                <div class="row">
                                         <div class="col">
                                                <!-- <img src="../assets/image/icon-ventas.png" class="card-img-top" alt="..."> -->
                                         </div>

                                         <div class="col mt-4 text-center">
                                                <div class="cardhome">
                                                        <p>Ventas del día</p>
                                                                <?php

                                                        while($row_general = $VentasDia->fetch_assoc()){
                                                        ?>
                                                        <p class="card-text fs-1" >S/ <?php echo $row_general["ventadinero"];?></p>
                                                        <?php
                                                        }
                                                        ?> 
                                                </div>
                                                
                                        </div>
                                </div>
                         
                        </div>
                </div>
                </a>
          </div>

          <div class="col">
                <a href="reporteventa.php">
                <div class="card border-primary mb-3">
                        <div class="card-body">
                                <div class="row">
                                        <div class="col">
                                         <!-- <img src="../assets/image/icon-ventas.png" class="card-img-top" alt="..."> -->
                                        </div>
                                        <div class="col mt-4 text-center">

                                                        <div class="cardhome">
                                                                        <p> Ganancias del día</p>
                                                                        <?php

                                                                while($row_general = $gananciaDia->fetch_assoc()){
                                                                ?>
                                                                <p class="card-text fs-1 ">S/<?php echo $row_general["gananciaDia"];?></p>
                                                                
                                                                <?php
                                                                }
                                                                        ?> 
                                                        </div>
                                                

                                        </div>
                                </div>
                       
                        </div>
                </div>
                </a>
          </div>

          <div class="col">
                <a href="reporteingreso.php">
                <div class="card border-primary mb-3">
                        <div class="card-body ">

                        <div class="row">
                        <div class="col">
                                         <!-- <img src="../assets/image/icon-ventas.png" class="card-img-top" alt="..."> -->
                        </div>

                        <div class="col mt-4 text-center">
                                <div class="cardhome">
                                        <p>Compras del día</p>
                                        <?php

                                                while($row_general = $compraDia->fetch_assoc()){
                                
                                        ?>
                                        <p class="card-text fs-1">S/ <?php echo $row_general["totalCompraDia"];?></p>
                                        <?php
                                        }
                                        ?> 
                                </div>
                                 
                        </div>
                        </div>
                        
                        </div>
                </div>
                </a>
          </div>
        </div>
  <!-- Segunda Columna -->
        <div class="row">
        <div class="col">
                <a href="reporteventa.php">
                <div class="card border-primary mb-3 ">
                        <div class="card-body">
                                <div class="row">
                                         <div class="col">
                                                <!-- <img src="../assets/image/icon-ventas.png" class="card-img-top" alt="..."> -->
                                         </div>

                                         <div class="col mt-4 text-center">
                                                <div class="cardhome">
                                                        <p>Ventas del mes</p>
                                                                <?php

                                                        while($row_general = $VentaMes->fetch_assoc()){
                                                        ?>
                                                        <p class="card-text fs-1" >S/<?php echo $row_general["totalVentaMes"];?></p>
                                                        <?php
                                                        }
                                                        ?> 
                                                </div>
                                                
                                        </div>
                                </div>
                         
                        </div>
                </div>
                </a>
          </div>

          <div class="col">
                <a href="reporteventa.php">
                <div class="card border-primary mb-3">
                        <div class="card-body">
                                <div class="row">
                                        <div class="col">
                                         <!-- <img src="../assets/image/icon-ventas.png" class="card-img-top" alt="..."> -->
                                        </div>
                                        <div class="col mt-4 text-center">
                                                <div class="cardhome">
                                                        <p> Ganancias del mes</p>
                                                                <?php

                                                        while($row_general = $gananciaMes->fetch_assoc()){
                                                        ?>
                                                        <p class="card-text fs-1 ">S/<?php echo $row_general["gananciaMes"];?></p>
                                                        <?php
                                                        }
                                                        ?>
                                                </div>
                                                

                                        </div>
                                </div>
                       
                        </div>
                </div>
                </a>
          </div>

          <div class="col">
                <a href="reporteingreso.php">
                <div class="card border-primary mb-3">
                        <div class="card-body ">

                        <div class="row">
                        <div class="col">
                                         <!-- <img src="../assets/image/icon-ventas.png" class="card-img-top" alt="..."> -->
                        </div>

                        <div class="col mt-4 text-center">
                                <div class="cardhome">
                                        <p>Compras del mes</p>
                                        <?php

                                        while($row_general = $compraMes->fetch_assoc()){
                                        ?>
                                        <p class="card-text fs-1">S/ <?php echo $row_general["totalCompraMes"];?></p>
                                        <?php
                                        }
                                        ?>   
                                </div>
                             
                        </div>
                        </div>
                        
                        </div>
                </div>

                </a>
                
          </div>
        </div>
        
        <!-- Tercera Columna -->

        <div class="row">
        <div class="col">
                <a href="inventario.php">
                <div class="card border-primary mb-3 ">
                        <div class="card-body">
                                <div class="row">
                                         <div class="col">
                                         <!-- <img src="../assets/image/icon-ventas.png" class="card-img-top" alt="..."> -->
                                         </div>

                                         <div class="col mt-4 text-center">
                                                <div class="cardhome">
                                                        <p>N° Producto Stock Bajo</p>
                                                                <?php

                                                        while($row_general = $stockBajo->fetch_assoc()){
                                                        ?>
                                                        <p class="card-text fs-1" ><?php echo $row_general["stockbajo"];?></p>
                                                        <?php
                                                        }
                                                        ?> 
                                                </div>
                                                
                                        </div>
                                </div>
                         
                        </div>
                </div>
                </a>
          </div>

          <!-- <div class="col">
                <div class="card border-primary mb-3">
                        <div class="card-body">
                                <div class="row">
                                        <div class="col">
                                      
                                        </div>
                                        <div class="col mt-4 text-center">
                                              

                                        </div>
                                </div>
                       
                        </div>
                </div>
          </div>

          <div class="col">
                <div class="card border-primary mb-3">
                        <div class="card-body ">

                        <div class="row">
                        <div class="col">
                                         
                        </div>

                        <div class="col mt-4 text-center">
                               
                        </div>
                        </div>
                        
                        </div>
                </div>
          </div> -->
        </div>
  
      

       
<?php


include("../view/plantilla/footer.php")

?>