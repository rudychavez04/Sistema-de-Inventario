<?php
$nombrePagina="Registro Proveedor - Ferretería Ferremas";
include("../view/plantilla/header.php");
include("../controlador/consultadatos.php");
?>


<div class="center-col-sm-4">
    <div class="title">
        <p>Registro de Cuenta</p>
    </div>

    <form action="../controlador/registrodatos.php" method="POST" enctype="multipart/form-data" class="row g-3">

       

            <div class="col-md-12">

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

        <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Pago</label>
                <input name="cantidadPago" placeholder="Ingrese monto pagado" type="number" class="form-control" id="inputPassword4" >
        </div>

        <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Total</label>
                <input name="cantidadTotal" placeholder="Ingrese monto total" type="number" class="form-control" id="inputPassword4" >
        </div>
      
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="resize: none;">Observacion</label>
            <textarea name="observacionCuenta" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="row w-100 align-items-center mt-5">
            <div class="col text-center">
                <button name="accion" onclick="showAlertRegistroCuenta()" value="registroCuenta" type="submit" class="btn btn-primary ">Registrar Cuenta</button>
            </div>     
        </div>

    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-wOLiP6uL5tNrV1FiutKtAyQGGJ1CWAsqQ6Kp2XZ12/CvZxw8MvNJfdhh0yTwjPIir4SWag2/MHrseR7PRmNtvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include("../view/plantilla/footer.php")

?>