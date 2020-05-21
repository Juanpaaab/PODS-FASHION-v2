<?php

	include 'includes/session.php';

	if(isset($_POST['signup'])){
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		$city = $_POST['city'];

		$_SESSION['name'] = $name;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['email'] = $email;

		$conn = $pdo->open();
		$password = password_hash($password, PASSWORD_DEFAULT);
		try{
			$stmt = $conn->prepare("INSERT INTO users (email, password, name, lastname, address, city) VALUES (:email, :password, :name, :lastname, :address, :city)");
			$stmt->execute(['email'=>$email, 'password'=>$password, 'name'=>$name, 'lastname'=>$lastname, 'address'=>$address, 'city'=>$city]);
			$userid = $conn->lastInsertId();
			$pdo->close();
			header('location: login.php');
		} catch (Exception $e) {
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}else{
		$_SESSION['error'] = 'Llena el formulario primero';
		header('location: signup.php');
	}


?>