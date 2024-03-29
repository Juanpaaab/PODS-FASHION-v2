<?php
	include 'includes/conn.php';
	session_start();

	if(isset($_SESSION['admin'])){
		header('location: admin/home.php');
	}

	if(isset($_SESSION['user'])){
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT * FROM users WHERE id_user=:id_user");
			$stmt->execute(['id_user'=>$_SESSION['user']]);
			$user = $stmt->fetch();
		}
		catch(PDOException $e){
			echo "Hay un problema en la conexion: " . $e->getMessage();
		}

		$pdo->close();
	}
?>