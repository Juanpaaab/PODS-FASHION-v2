<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$rol = $_POST['rol'];

		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE email=:email");
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
				$stmt = $conn->prepare("INSERT INTO users (email, password, name, lastname, address, city, rol) VALUES (:email, :password, :name, :lastname, :address, :city, :rol)");
				$stmt->execute(['email'=>$email, 'password'=>$password, 'name'=>$name, 'lastname'=>$lastname, 'address'=>$address, 'city'=>$city, 'rol'=>$rol]);
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