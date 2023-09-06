<?php
$nombrePagina="Registro Proveedor - Ferretería Ferremas";
include("../view/plantilla/header.php")

?>


<div class="center-col-sm-4">
    <div class="title">
        <p>Registro de Proveedor</p>
    </div>

    <form action="../controlador/registrodatos.php" method="POST" enctype="multipart/form-data" class="row g-3">

       

        <div class="col-md-12">
                <label for="inputPassword4" class="form-label">RUC</label>
                <input name="rucProveedor" placeholder="Ingrese RUC" type="number" class="form-control" id="inputPassword4" >
        </div>

        <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Proveedor</label>
                <input name="razonSocialProveedor" placeholder="Ingrese proveedor" type="text" class="form-control" id="inputPassword4" >
        </div>

        <div class="col-md-12">
                <label for="inputPassword4" class="form-label">Telefono</label>
                <input name="telefonoProveedor" placeholder="Ingrese telefono proveedor" type="number" class="form-control" id="inputPassword4" >
        </div>
      
        
        <div class="row w-100 align-items-center mt-5">
            <div class="col text-center">
                <button name="accion" onclick="showAlertRegistroProveedor()" value="registroProveedor" type="submit" class="btn btn-primary ">Registrar Proveedor</button>
            </div>     
        </div>

    </form>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js" integrity="sha512-wOLiP6uL5tNrV1FiutKtAyQGGJ1CWAsqQ6Kp2XZ12/CvZxw8MvNJfdhh0yTwjPIir4SWag2/MHrseR7PRmNtvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php
include("../view/plantilla/footer.php")

?>