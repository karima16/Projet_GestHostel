<?php 
require_once("Connection.php");
class Room extends Connection{

	public function getAll(){
		$pdo = $this->dbConnection();
		$request = "SELECT * FROM room ORDER BY roomId";
		$objects = $pdo->query($request);
		return $objects->fetchAll(PDO::FETCH_ASSOC);
	}
}

public function getOne($roomId){
	$pdo = $this->dbConnection();
	$request = "SELECT * FROM room WHERE roomId = :$roomId";
	
	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'roomId' => $roomId
	));
	return $objects->fetchAll(PDO::FETCH_ASSOC);
}

public function addOne($roomName,$shortDescription,$longDescription,$childrenCapacity,$adultCapacity,$bathroomQuantity,$toiletQuantity,$balcony,$isDeleted){
	$pdo = $this->dbConnection();
	$request = "INSERT INTO room VALUES (:roomName,:shortDescription,:longDescription,:childrenCapacity,:adultCapacity,:bathroomQuantity,
	:toiletQuantity,:balcony,:isDeleted)";

	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'roomName'=> $roomName,
		'shortDescription'=>$shortDescription,
		'longDescription'=>$longDescription,
		'childrenCapacity'=>$childrenCapacity,
		'adultCapacity'=>$adultCapacity,
		'bathroomQuantity'=>$bathroomQuantity,
		'toiletQuantity'=>$toiletQuantity,
		'balcony'=>$balcony,
		'isDeleted'=>$isDeleted,
		


	));

}

public function updateOne($roomName,$shortDescription,$longDescription,$childrenCapacity,$adultCapacity,$bathroomQuantity,$toiletQuantity,$balcony,$isDeleted){
	$pdo = $this->dbConnection();
	$request = "UPDATE room SET roomName = :roomName,  shortDescription = :shortDescription, childrenCapacity= :childrenCapacity, adultCapacity= :adultCapacity,bathroomQuantity =:bathroomQuantity , toiletQuantity= :toiletQuantity, balcony= :balcony, isDeleted = :isDeleted";

	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'roomName'=> $roomName,
		'shortDescription'=>$shortDescription,
		'longDescription'=>$longDescription,
		'childrenCapacity'=>$childrenCapacity,
		'adultCapacity'=>$adultCapacity,
		'bathroomQuantity'=>$bathroomQuantity,
		'toiletQuantity'=>$toiletQuantity,
		'balcony'=>$balcony,
		'isDeleted'=>$isDeleted,
	));
}

public function deleteOne($isDeleted){
	$pdo = $this->dbConnection();
		//$request = "DELETE FROM hostel WHERE id = :id";
	$request = "UPDATE room SET isDeleted = true WHERE roomId = :roomId";/*cmt vas ton recuperer la variable*/
	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'roomId' => $_SESSION['roomId']
	));
}

}

?>
