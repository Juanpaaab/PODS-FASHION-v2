<?php
	include 'includes/session.php';

	$conn = $pdo->open();

	$output = array('error'=>false);

	$id = $_POST['id'];
	$qty = $_POST['qty'];
	$qc = $_POST['qc'];

	if(isset($_SESSION['user']) && $qty <= $qc){
		try{
				if(isset($_SESSION['user'])){
					try{
						$stmt = $conn->prepare("UPDATE cart SET quantity=:quantity WHERE id=:id");
						$stmt->execute(['quantity'=>$qty, 'id'=>$id]);
						$output['message'] = 'Actualizado';
					}
					catch(PDOException $e){
						$output['message'] = $e->getMessage();
					}
				}
				else{
					foreach($_SESSION['cart'] as $key => $row){
						if($row['productid'] == $id){
							$_SESSION['cart'][$key]['quantity'] = $qty;
							$output['message'] = 'Actualizado';
						}
					}
				}
		}
		catch(PDOException $e){
			$output['message'] = $e->getMessage();
		}
	}

	

	$pdo->close();
	echo json_encode($output);

?>