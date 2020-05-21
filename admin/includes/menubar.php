<aside class="main-sidebar"  style="background-color: deeppink">
  <section class="sidebar"  style="background-color: deeppink">
    <div class="user-panel" >
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['name'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-success"></i> En línea</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">  
      <li><a href="home.php" style="background-color: deeppink"><i class="fa fa-dashboard"></i> <span>Panel de control</span></a></li>
      <li class="header" style="background-color: deeppink; color: white">Administrar</li>
      <li><a href="users.php" style="background-color: deeppink"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>
      <li class="treeview">
        <a href="#" style="background-color: deeppink">
          <i class="fa fa-barcode" ></i>
          <span>Productos</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu" style="background-color: deeppink" >
          <li><a href="products.php" style="background-color: deeppink"><i class="fa fa-circle-o"></i> Lista de productos</a></li>
          <li><a href="category.php" style="background-color: deeppink"><i class="fa fa-circle-o"></i> Categorias</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>