<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$direccion = $_POST['direccion'];
		$ciudad = $_POST['ciudad'];

		$_SESSION['nombre'] = $nombre;
		$_SESSION['apellidos'] = $apellidos;
		$_SESSION['email'] = $email;

		$conn = $pdo->open();
		$password = password_hash($password, PASSWORD_DEFAULT);
		try{
			$stmt = $conn->prepare("INSERT INTO usuarios (email, password, Nombre, Apellidos, Direccion, Ciudad) VALUES (:email, :password, :nombre, :apellidos, :direccion, :ciudad)");
			$stmt->execute(['email'=>$email, 'password'=>$password, 'nombre'=>$nombre, 'apellidos'=>$apellidos, 'direccion'=>$direccion, 'ciudad'=>$ciudad]);
			$userid = $conn->lastInsertId();
			$pdo->close();
			header('location: login.php');
		} catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}else{
		$_SESSION['error'] = 'Fill up signup form first';
		header('location: signup.php');
	}


?>