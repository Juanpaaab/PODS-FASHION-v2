<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id_user = $_POST['id_user'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nombre = $_POST['Nombre'];
		$apellidos = $_POST['Apellidos'];
		$direccion = $_POST['Direccion'];
		$ciudad = $_POST['Ciudad'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM usuarios WHERE id_user=:id_user");
		$stmt->execute(['id_user'=>$id_user]);
		$row = $stmt->fetch();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		try{
			$stmt = $conn->prepare("UPDATE usuarios SET email=:email, password=:password, Nombre=:Nombre, Apellidos=:Apellidos, Direccion=:Direccion, Ciudad=:Ciudad WHERE id_user=:id_user");
			$stmt->execute(['id_user'=>$id_user, 'email'=>$email, 'password'=>$password, 'Nombre'=>$nombre, 'Apellidos'=>$apellidos, 'Direccion'=>$direccion, 'Ciudad'=>$ciudad]);
			$_SESSION['success'] = 'Usuario actualizado correctamente';

		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Llena el formulario primero';
	}

	header('location: users.php');

?>