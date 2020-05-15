<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nombre = $_POST['Nombre'];
		$apellidos = $_POST['Apellidos'];
		$direccion = $_POST['Direccion'];
		$ciudad = $_POST['Ciudad'];

		if(password_verify($curr_password, $user['password'])){
			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			try{
				$stmt = $conn->prepare("UPDATE usuarios SET email=:email, password=:password, Nombre=:Nombre, Apellidos=:Apellidos, Direccion=:Direccion, Ciudad=:Ciudad WHERE id_user=:id_user");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'Nombre'=>$nombre, 'Apellidos'=>$apellidos, 'Direccion'=>$direccion, 'Ciudad'=>$ciudad,'id_user'=>$user['id_user']]);

				$_SESSION['success'] = 'Account updated successfully';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
			
		}
		else{
			$_SESSION['error'] = 'Incorrect password';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	$pdo->close();

	header('location: profile.php');

?>