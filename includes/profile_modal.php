<!-- Transaction History -->
<div class="modal fade" id="transaction">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Detalles de transacciones</b></h4>
            </div>
            <div class="modal-body">
              <p>
                Fecha: <span id="date"></span>
                <span class="pull-right">Transaccion#: <span id="transid"></span></span> 
              </p>
              <table class="table table-bordered">
                <thead>
                  <th>Producto</th>
                  <th>Precio</th>
                  <th>Cantidad</th>
                  <th>Subtotal</th>
                </thead>
                <tbody id="detail">
                  <tr>
                    <td colspan="3" align="right"><b>Total</b></td>
                    <td><span id="total"></span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Profile -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Actualizar cuenta</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="profile_edit.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="Nombre" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $user['Nombre']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Apellidos" class="col-sm-3 control-label">Apellidos</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Apellidos" name="Apellidos" value="<?php echo $user['Apellidos']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Contraseña</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Direccion" class="col-sm-3 control-label">Direccion</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Direccion" name="Direccion" value="<?php echo $user['Direccion']; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Ciudad" class="col-sm-3 control-label">Ciudad</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Ciudad" name="Ciudad" value="<?php echo $user['Ciudad']; ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Contraseña actual</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="input current password to save changes" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Actualizar</button>
              </form>
            </div>
        </div>
    </div>
</div>