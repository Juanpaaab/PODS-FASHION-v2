<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Añadir Usuario</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Nombre" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Apellidos" class="col-sm-3 control-label">Apellidos</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Apellidos" name="Apellidos" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Direccion" class="col-sm-3 control-label">Direccion</label>

                    <div class="col-sm-9">
                      <textarea class="form-control" id="Direccion" name="Direccion"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="Ciudad" class="col-sm-3 control-label">Ciudad</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Ciudad" name="Ciudad">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Rol" class="col-sm-3 control-label">Rol</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="Rol" name="Rol">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Guardar</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Editar usuario</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_edit.php">
                <input type="hidden" class="id_user" name="id_user">
                <div class="form-group">
                    <label for="edit_email" class="col-sm-3 control-label">Email</label>

                    <div class="col-sm-9">
                      <input type="email" class="form-control" id="edit_email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_nombre" class="col-sm-3 control-label">Nombre</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_nombre" name="Nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_apellidos" class="col-sm-3 control-label">Apellidos</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_apellidos" name="Apellidos">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_direccion" class="col-sm-3 control-label">Direccion</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_direccion" name="Direccion">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_ciudad" class="col-sm-3 control-label">Ciudad</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_ciudad" name="Ciudad">
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

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Eliminando...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="users_delete.php">
                <input type="hidden" class="id_user" name="id_user">
                <div class="text-center">
                    <p>ELIMINAR USUARIO</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> ELIMINAR</button>
              </form>
            </div>
        </div>
    </div>
</div>


     