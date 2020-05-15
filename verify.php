<?php
	include 'includes/session.php';
	$conn = $pdo->open();

	if(isset($_POST['login'])){
		
		$email = $_POST['email'];
		$password = $_POST['password'];

		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM usuarios WHERE email = :email");
			$stmt->execute(['email'=>$email]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
					if(password_verify($password, $row['password'])){
						if($row['Rol']){
							$_SESSION['admin'] = $row['id_user'];
						}
						else{	
							$_SESSION['user'] = $row['id_user'];
						}
					}
					else{
						$_SESSION['error'] = 'Contraseña incorrecta';
					}
			}
			else{
				$_SESSION['error'] = 'Email no encontrado';
			}
		}
		catch(PDOException $e){
			echo "Problema de conexión: " . $e->getMessage();
		}

	}
	else{
		$_SESSION['error'] = 'Ingresa datos primero';
	}

	$pdo->close();

	header('location: login.php');

?>