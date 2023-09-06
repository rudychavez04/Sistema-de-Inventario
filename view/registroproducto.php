<?php
$nombrePagina="Registro Producto - Ferretería Ferremas";
include("../view/plantilla/header.php");
include("../controlador/consultadatos.php");
?>


<div class="center-col-sm-4">
    <div class="title">
        <p>Registro de Producto</p>
    </div>

    <form class="row g-3" action="../controlador/registrodatos.php" method="POST" enctype="multipart/form-data">

   
        <div class="col-md-6">

            <label for="inputState" class="form-label">Proveedor</label>
            <select name="nproveedor"id="inputState" class="form-select">
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

        <!-- Boton Modal Registro de proveedor  -->
        <div class="col-md-6">
            <div class="mt-4">
                <button type="button"  class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#modalRegistroProveedor">Nuevo Proveedor</button>   
            </div>
                   
        </div>
        <!-- Fin de Modal -->

        <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Producto</label>
                <input name="nproducto" placeholder="Ingrese producto" type="text" class="form-control"  >
        </div>
         <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Unidad de Medida</label>
            <select name="umedida"id="inputState" class="form-select">
            <option selected>Seleccione unidad de medida</option>
            <option value="Unidad" >Unidad</option>
            <option value="KG" >Kilogramo</option>
            <option Value="M" >Metro</option>
            <option value="L" >Litro</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="inputEmail4" class="form-label">Cantidad</label>
            <input name="cproducto" placeholder="Ingrese cantidad" type="number" class="form-control" >
        </div>

        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Precio de Compra</label>
            <input name="pcompraproducto" placeholder="Ingrese precio de compra" type="number" class="form-control"  step="0.1">
        </div>

        <div class="col-md-4">
            <label for="inputPassword4" class="form-label">Precio de Venta</label>
            <input name="pventaproducto" placeholder="Ingrese precio de venta" type="number" class="form-control"  step="0.1">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Stock Minimo</label>
            <input name="stockMinimo" placeholder="Ingrese stock minimo" type="number" class="form-control"  >
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Stock Intermedio</label>
            <input name="stockIntermedio" placeholder="Ingrese stock intermedio" type="number" class="form-control"  >
        </div>
       
      
        
        <div class="row w-100 align-items-center mt-5">
            <div class="col text-center">
                <button type="submit" onclick="showAlertRegistroProducto()" name="accion" value="registroProducto" class="btn btn-primary ">Registrar Producto</button>
            </div>     
        </div>

    </form>
</div>


<!-- Modal Registro de Proveedor -->
<div class="modal fade" id="modalRegistroProveedor" tabindex="-1" aria-labelledby="modalRegistroProveedorLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Proveedor</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="../controlador/registrodatos.php" method="POST" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">RUC</label>
                                            <input name="rucProveedor" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Proveedor</label>
                                            <input name="razonSocialProveedor" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese nombre de proveedor" >
                                        </div>
                                        <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Telefono</label>
                <input name="telefonoProveedor" placeholder="Ingrese telefono proveedor" type="number" class="form-control" id="inputPassword4" >
        </div>
                                        
                            </div>

                <div class="modal-footer">
                
                    <button value="registroProveedor" onclick="showAlertRegistroProveedor()" name="accion" type="submit" class="btn btn-primary">Registrar Proveedor</button>
                </div>
            </form>
                
                
                </div>
            </div>
            </div>
<!-- Fin de Modal Registro Proveedor -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-wOLiP6uL5tNrV1FiutKtAyQGGJ1CWAsqQ6Kp2XZ12/CvZxw8MvNJfdhh0yTwjPIir4SWag2/MHrseR7PRmNtvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include("../view/plantilla/footer.php")

?>