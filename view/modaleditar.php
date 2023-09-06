
<!-- Modal Editar Inventario -->

<div class="modal fade" id="edit_<?php echo $row_general["idProducto"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Producto</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="../controlador/registrodatos.php" method="POST" enctype="multipart/form-data">
                                    <input hidden name="idProducto" value="<?php echo  $row_general["idProducto"];?>" type="text"  >
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Producto </label>
                                            <input  name="nproducto" value="<?php echo  $row_general["nombreProducto"];?>" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Precio Venta </label>
                                            <input name="pproducto"  value="<?php echo  $row_general["precioVentaProducto"];?>" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4" class="form-label">Stock Minimo</label>
                                            <input name="stockMinimo" placeholder="Ingrese stock minimo" value="<?php echo  $row_general["stockMinimoProducto"];?>" type="number" class="form-control"  >
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword4" class="form-label">Stock Intermedio</label>
                                            <input name="stockIntermedio" placeholder="Ingrese stock intermedio" value="<?php echo  $row_general["stockIntermedioProducto"];?>" type="number" class="form-control"  >
                                         </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Cantidad </label>
                                            <input   name="cproducto"value="<?php echo  $row_general["cantidadProducto"];?>" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>
                                       
                                      
                                        
                            </div>

                <div class="modal-footer">
                
                    <button value="editarProducto" onclick="showAlertEditarProducto()" name="accion" type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
                
                
                </div>
            </div>
            </div>
<!-- Fin de Modal Editar Inventario -->


<!-- Modal Editar Cuentas -->

<div class="modal fade" id="pagar_<?php echo $row_general["idCuenta"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pagar Cuenta</h1>
                                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="../controlador/registrodatos.php" method="POST" enctype="multipart/form-data">
                                    <input hidden name="idCuenta" value="<?php echo  $row_general["idCuenta"];?>" type="text"  >
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Proveedor </label>
                                            <input readonly  value="<?php echo  $row_general["razonsocialProveedor"];?>" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pago </label>
                                            <input  readonly  name="pagoActual" value="<?php echo  $row_general["dineroPagado"];?>" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pendiente a pagar </label>
                                            <input readonly  name="PendientePagar"value="<?php echo  $row_general["dineroPendiente"];?>" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Total </label>
                                            <input  readonly name="totalCuenta" value="<?php echo  $row_general["totalCuenta"];?>" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese Ruc" >
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Cantidad a pagar </label>
                                            <input   name="montoPagar" type="text" class="form-control" id="floatingInputGrid" placeholder="Ingrese monto a pagar" >
                                        </div>
                                       
                                      
                                        
                            </div>

                <div class="modal-footer">
                
                    <button value="pagarCuenta" onclick="showAlertCuentaPagada()" name="accion" type="submit" class="btn btn-primary">Pagar</button>
                </div>
            </form>
                
                
                </div>
            </div>
            </div>
<!-- Fin de Modal Editar Cuentas -->