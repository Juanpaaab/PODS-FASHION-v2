<header class="main-header">
  <a href="#" class="logo" style="background-color: deeppink">
    <span class="logo-mini"><b>P</b>F</span>
    <span class="logo-lg"><b>PODS</b>FASHION</span>
  </a>
  <nav class="navbar navbar-static-top" style="background-color: deeppink">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="background-color: deeppink">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.png'; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $admin['name'].' '.$admin['lastname']; ?></span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header" style="background-color: deeppink">
              <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.png'; ?>" class="img-circle" alt="User Image">

              <p>
                <?php echo $admin['name'].' '.$admin['lastname']; ?>
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