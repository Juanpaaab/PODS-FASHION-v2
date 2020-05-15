<?php
	include 'includes/session.php';

	if(isset($_POST['delete'])){
		$id_user = $_POST['id_user'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("DELETE FROM usuarios WHERE id_user=:id_user");
			$stmt->execute(['id_user'=>$id_user]);

			$_SESSION['success'] = 'Usuario eliminado correctamente';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Selecciona un usuario primero';
	}

	header('location: users.php');
	
?>