<?php
$nombrePagina="Reporte - Ferretería Ferremas";
include("../view/plantilla/header.php");
include("../controlador/consultadatos.php");



?>
<div class="title">
<p>Inventario</p>
</div>
<table id="tabla_reporte" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                
                <th>Descripción</th>
                <th>Precio de venta</th>
                <th>Stock Actual</th>
                <th>Stock Minimo</th>
                <th>Stock Intermedio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <!-- <?php 
       
        ?> -->
          <?php

            while($row_general = $Inventario->fetch_assoc()){
            
           
            include("../view/modaleditar.php");
          ?>


          
       <tr>
      
       <td><?php echo $row_general["nombreProducto"];?></td>
       <td><?php echo $row_general["precioVentaProducto"];?></td>  
       <td><?php echo $row_general["cantidadProducto"];?></td>
       <td><?php echo $row_general["stockMinimoProducto"];?></td>
       <td><?php echo $row_general["stockIntermedioProducto"];?></td>
          <?php 
            $swich="";
            $textP="";
            $color="";
            if($row_general["cantidadProducto"]<=$row_general["stockMinimoProducto"]){
              $swich = 'fa-solid fa-triangle-exclamation fa-bounce fa-2xl';
              $color="ff0a0a";
              $textP="Stock bajo";
            }

            else if ($row_general["cantidadProducto"]<=$row_general["stockIntermedioProducto"])
            {
              $swich = 'fa-solid fa-triangle-exclamation fa-beat-fade fa-2xl';
              $color="f3d53f";
              $textP=" Stock Intermedio";
            }
            else{
              $swich = 'fa-solid fa-face-laugh-beam  fa-2xl';
              $color="54bb65";
              $textP=" Stock Alto";
            }
          ?>   
              
        <td><p><i class="<?php echo $swich ?>" style="color: #<?php echo $color ?>;"></i><?php echo $textP?></p></td>  
        
      
       <td>
       
       <button type="button"  class="btn " data-bs-toggle="modal" data-bs-target="#edit_<?php echo $row_general["idProducto"] ?>"><i class="fa-solid fa-pen-to-square fa-2xl" style="color: #54a5a6;"></i> </button> 
      
      </td>
        </tr>
        <?php
        
      
        }
        
        ?>
         
             
           
            
        </tbody>
        
    </table>










<!-- Scripts para DataTable -->


<script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
      integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!-- DataTable -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.3.3/js/dataTables.buttons.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.bootstrap5.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.html5.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/buttons/2.3.3/js/buttons.print.min.js"
    ></script>
    

<script>
$(document).ready(function () {
    $('#tabla_reporte').DataTable();
});
</script>

<?php

include("../view/plantilla/footer.php")

?>