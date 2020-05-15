<?php
	include '../includes/conn.php';
	session_start();

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../index.php');
		exit();
	}

	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT * FROM usuarios WHERE id_user=:id_user");
	$stmt->execute(['id_user'=>$_SESSION['admin']]);
	$admin = $stmt->fetch();

	$pdo->close();

?>