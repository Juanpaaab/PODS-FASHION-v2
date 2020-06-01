<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id_user = $_POST['id_user'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$city = $_POST['city'];

		$conn = $pdo->open();
		$stmt = $conn->prepare("SELECT * FROM users WHERE id_user=:id_user");
		$stmt->execute(['id_user'=>$id_user]);
		$row = $stmt->fetch();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		try{
			$stmt = $conn->prepare("UPDATE users SET email=:email, password=:password, name=:name, lastname=:lastname, address=:address, city=:city WHERE id_user=:id_user");
			$stmt->execute(['email'=>$email, 'password'=>$password, 'name'=>$name, 'lastname'=>$lastname, 'address'=>$address, 'city'=>$city, 'id_user'=>$id_user]);
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