<?php
	include 'includes/session.php';

	if(isset($_GET['return'])){
		$return = $_GET['return'];
		
	}
	else{
		$return = 'home.php';
	}

	if(isset($_POST['save'])){
		$curr_password = $_POST['curr_password'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$nombre = $_POST['Nombre'];
		$apellidos = $_POST['Apellidos'];
		if(password_verify($curr_password, $admin['password'])){
			if(!empty($photo)){
				move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$photo);
				$filename = $photo;	
			}
			else{
				$filename = $admin['photo'];
			}

			if($password == $admin['password']){
				$password = $admin['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			$conn = $pdo->open();

			try{
				$stmt = $conn->prepare("UPDATE usuarios SET email=:email, password=:password, Nombre=:Nombre, Apellidos=:Apellidos WHERE id_user=:id_user");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'Nombre'=>$nombre, 'Apellidos'=>$apellidos, 'id_user'=>$admin['id_user']]);

				$_SESSION['success'] = 'Cuenta actualizada correctamente';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}

			$pdo->close();
			
		}
		else{
			$_SESSION['error'] = 'Contraseña incorrecta';
		}
	}
	else{
		$_SESSION['error'] = 'Llena el formulario primero';
	}

	header('location:'.$return);

?>