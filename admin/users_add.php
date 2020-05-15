<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nombre = $_POST['Nombre'];
		$apellidos = $_POST['Apellidos'];
		$direccion = $_POST['Direccion'];
		$ciudad = $_POST['Ciudad'];
		$rol = $_POST['Rol'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM usuarios WHERE email=:email");
		$stmt->execute(['email'=>$email]);
		$row = $stmt->fetch();

		if($row['numrows'] > 0){
			$_SESSION['error'] = 'Correo no disponible';
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
			$filename = $_FILES['photo']['name'];
			$now = date('Y-m-d');
			if(!empty($filename)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
			}
			try{
				$stmt = $conn->prepare("INSERT INTO usuarios (email, password, Nombre, Apellidos, Direccion, Ciudad, Rol) VALUES (:email, :password, :Nombre, :Apellidos, :Direccion, :Ciudad, :Rol)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'Nombre'=>$nombre, 'Apellidos'=>$apellidos, 'Direccion'=>$direccion, 'Ciudad'=>$ciudad, 'Rol'=>$rol]);
				$_SESSION['success'] = 'Usuario añadido correctamente';

			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Fill up user form first';
	}

	header('location: users.php');

?>