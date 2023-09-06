<?php
$nombrePagina="Ingreso de Mercadería - Ferretería Ferremas";
include("../view/plantilla/header.php");
include("../controlador/consultadatos.php");

?>




<div class="center-col-sm-4">
    <div class="title">
        <p>Ingreso de Mercadería</p>
    </div>

    <form action="../controlador/registrodatos.php" method="POST" enctype="multipart/form-data" class="row g-3">
    <div class="col-md-12">
            <label for="inputState" class="form-label">Proveedor</label>
            <select name="nProveedor" id="inputState" class="form-select">
            <option selected>Seleccione un proveedor</option>
            <?php

            while($row_general = $Proveedor->fetch_assoc()){
          ?>
            <option value='<?php echo $row_general["idProveedor"];?>'><?php echo $row_general["razonsocialProveedor"];?></option>

            <?php
        }
        ?>
            
            </select>
        </div>
        <div class="col-md-12">
            <label for="inputState" class="form-label">Producto</label>
            <select name="nproducto" id="inputState" class="form-select">
            <option selected>Seleccione un producto</option>
            
            <?php

            while($row_general = $Inventario->fetch_assoc()){
          ?>
            <option value='<?php echo $row_general["idProducto"];?>'><?php echo $row_general["nombreProducto"];?></option>

            <?php
             }
        ?>

        
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Cantidad</label>
            <input name="cproducto" placeholder="Ingrese cantidad" type="number" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Precio de compra</label>
            <input name="cprecioproducto" placeholder="Ingrese precio" type="number" class="form-control" id="inputPassword4" step="0.1">
        </div>
       
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="resize: none;">Observacion</label>
            <textarea name="observacionproducto" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        
        <div class="row w-100 align-items-center mt-5">
            <div class="col text-center">
                <button name="accion" onclick="showAlertIngresoMercaderia()" value="ingresoProducto" type="submit" class="btn btn-primary ">Registrar Ingreso de Mercadería</button>
            </div>     
        </div>

    </form>
</div>
<?php
include("../view/plantilla/footer.php")

?>