<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Usuarios
      </h1>
    </section>

    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> !Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> !Exito!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm btn-flat" style="background-color: deeppink; border-color: white">
              <i class="fa fa-plus" ></i> Añadir</a>
            </div>
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <th>Foto</th>
                  <th>Email</th>
                  <th>Nombre</th>
                  <th>Administrar</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();
                    try{
                      $stmt = $conn->prepare("SELECT * FROM users WHERE rol=:rol");
                      $stmt->execute(['rol'=> 0]);
                      foreach($stmt as $row){
                        $image = (!empty($row['photo'])) ? '../images/'.$row['photo'] : '../images/profile.png';
                        echo "
                          <tr>
                            <td>
                              <img src='".$image."' height='30px' width='30px'>
                            </td>
                            <td>".$row['email']."</td>
                            <td>".$row['name'].' '.$row['lastname']."</td>
                            <td>
                              <a href='cart.php?user=".$row['id_user']."' class='btn btn-info btn-sm btn-flat'><i class='fa fa-search'></i> Carrito</a>
                              <button class='btn btn-success btn-sm edit btn-flat' data-id_user='".$row['id_user']."'><i class='fa fa-edit'></i> Editar</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id_user='".$row['id_user']."'><i class='fa fa-trash'></i> Eliminar</button>
                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }
                    $pdo->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/users_modal.php'; ?>

</div>

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id_user = $(this).data('id_user');
    getRow(id_user);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id_user = $(this).data('id_user');
    getRow(id_user);
  });
});

function getRow(id_user){
  $.ajax({
    type: 'POST',
    url: 'users_row.php',
    data: {id_user:id_user},
    dataType: 'json',
    success: function(response){
      $('.id_user').val(response.id_user);
      $('#edit_email').val(response.email);
      $('#edit_password').val(response.password);
      $('#edit_name').val(response.name);
      $('#edit_lastname').val(response.lastname);
      $('#edit_address').val(response.address);
      $('#edit_city').val(response.city);
      $('.fullname').html(response.name+' '+response.lastname);
    }
  });
}
</script>
</body>
</html>
