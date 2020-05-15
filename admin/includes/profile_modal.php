<!-- Add -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Perfil de Administrador</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="email" class="col-sm-3 control-label">Email</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="email" name="email" value="<?php echo $admin['email']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $admin['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="Nombre" class="col-sm-3 control-label">Nombre</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $admin['Nombre']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="Apellidos" class="col-sm-3 control-label">Apellidos</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="apellidos" name="Apellidos" value="<?php echo $admin['Apellidos']; ?>">
                  	</div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Contraseña actual:</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Contraseña para guardar cambios" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</button>
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Guardar</button>
            	</form>
          	</div>
        </div>
    </div>
</div>