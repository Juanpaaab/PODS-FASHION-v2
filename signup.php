<?php include 'includes/session.php'; ?>
<?php
  if(isset($_SESSION['user'])){
    header('location: cart_view.php');
  }

?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition register-page" style="background-color:deeppink">
<div class="register-box">
  	<?php
      if(isset($_SESSION['error'])){
        echo "
          <div class='callout callout-danger text-center'>
            <p>".$_SESSION['error']."</p> 
          </div>
        ";
        unset($_SESSION['error']);
      }

      if(isset($_SESSION['success'])){
        echo "
          <div class='callout callout-success text-center'>
            <p>".$_SESSION['success']."</p> 
          </div>
        ";
        unset($_SESSION['success']);
      }
    ?>
  	<div class="register-box-body">
    	<p class="login-box-msg">Registrarse</p>

    	<form action="register.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="nombre" placeholder="Nombres" value="<?php echo (isset($_SESSION['nombre'])) ? $_SESSION['nombre'] : '' ?>" required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?php echo (isset($_SESSION['apellidos'])) ? $_SESSION['apellidos'] : '' ?>"  required>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
      		<div class="form-group has-feedback">
        		<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : '' ?>" required>
        		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Contraseña" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : '' ?>" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
        		<input type="direccion" class="form-control" name="direccion" placeholder="Direccion" value="<?php echo (isset($_SESSION['direccion'])) ? $_SESSION['direccion'] : '' ?>" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
        		<input type="ciudad" class="form-control" name="ciudad" placeholder="Ciudad" value="<?php echo (isset($_SESSION['ciudad'])) ? $_SESSION['ciudad'] : '' ?>" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <hr>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="signup" style="width:110px; background-color:deeppink; border-color:white">
                <i class="fa fa-pencil"></i> Registrarse</button>
        		</div>
      		</div>
    	</form>
      <br>
      <a href="login.php" style="color:deeppink">Ya tengo una cuenta</a><br>
      <a href="index.php" style="color:deeppink"><i class="fa fa-home"></i> Inicio</a>
  	</div>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>