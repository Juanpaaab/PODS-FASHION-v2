<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	if(isset($_POST['edit'])){
		$curr_password = $_POST['curr_password'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$city = $_POST['city'];

		if(password_verify($curr_password, $user['password'])){
			if($password == $user['password']){
				$password = $user['password'];
			}
			else{
				$password = password_hash($password, PASSWORD_DEFAULT);
			}

			try{
				$stmt = $conn->prepare("UPDATE users SET email=:email, password=:password, name=:name, lastname=:lastname, address=:address, city=:city WHERE id_user=:id_user");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'name'=>$name, 'lastname'=>$lastname, 'address'=>$address, 'city'=>$city,'id_user'=>$user['id_user']]);

				$_SESSION['success'] = 'Cuenta actualizada';
			}
			catch(PDOException $e){
				$_SESSION['error'] = $e->getMessage();
			}
			
		}
		else{
			$_SESSION['error'] = 'Contraseña incorrecta';
		}
	}
	else{
		$_SESSION['error'] = 'Llena el formulario primero';
	}

	$pdo->close();

	header('location: profile.php');

?>