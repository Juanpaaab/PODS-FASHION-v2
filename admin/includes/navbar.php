<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo" style="background-color: deeppink">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>P</b>F</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>PODS</b>FASHION</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" style="background-color: deeppink">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: deeppink">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $admin['Nombre'].' '.$admin['Apellidos']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="background-color: deeppink">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $admin['Nombre'].' '.$admin['Apellidos']; ?>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat" id="admin_profile">Actualizar</a>
              </div>
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-default btn-flat">Cerrar Sesión</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php include 'includes/profile_modal.php'; ?>