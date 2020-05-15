<?php 
	include 'includes/session.php';

	if(isset($_POST['id_user'])){
		$id_user = $_POST['id_user'];
		
		$conn = $pdo->open();

		$stmt = $conn->prepare("SELECT * FROM usuarios WHERE id_user=:id_user");
		$stmt->execute(['id_user'=>$id_user]);
		$row = $stmt->fetch();
		$pdo->close();

		echo json_encode($row);
	}
?>