<?php
$nombrePagina="Reporte - Ferretería Ferremas";
include("../view/plantilla/header.php");
include("../controlador/consultadatos.php");
?>
<div class="title">
<p>Proveedores</p>
</div>
<table id="tabla_reporte" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>RUC</th>
                <th>Razon Social</th>
                <th>Telefono</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>

       
          <?php

            while($row_general = $Proveedor->fetch_assoc()){
          ?>  
       <tr>
       <td><?php echo $row_general["rucProveedor"];?></td>
       <td><?php echo $row_general["razonsocialProveedor"];?></td>
       <td><?php echo $row_general["telefonoProveedor"];?></td>
       <td><?php echo $row_general["fechaRegistroProveedor"];?></td>
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