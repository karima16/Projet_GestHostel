<?php 
require_once("Connection.php");
class Hostel extends Connection{

	public function getAll(){
		$pdo = $this->dbConnection();
		$request = "SELECT * FROM hostel ORDER BY hostelId";
		$objects = $pdo->query($request);
		return $objects->fetchAll(PDO::FETCH_ASSOC);
	}
}

public function getOne($hostelId){
	$pdo = $this->dbConnection();
	$request = "SELECT * FROM hostel WHERE hostelId = :$hostelId";
	
	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'hostelId' => $hostelId
	));
	return $objects->fetchAll(PDO::FETCH_ASSOC);
}

public function addOne($hostelname,$hostelStars,$postCode,$number,$streetName,$country,$lat,$long,$phone,$email,$pool,$valet,$roomService,$touristTaxes,$isDeleted){
	$pdo = $this->dbConnection();
	$request = "INSERT INTO hostel VALUES (:hostelName,:hostelStars,:add_postCode,:add_number,:add_streetName,:add_country,:coo_lat,:coo_long,:phone,:email,:pool,:valet,:roomService,:touristTaxes,:isDeleted)";

	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'hostelName'=> $hostelname,
		'hostelStars'=>$hostelStars,
		'add_postCode'=>$postCode,
		'add_number'=>$number,
		'add_streetName'=>$streetName,
		'add_country'=>$country,
		'coo_lat'=>$lat,
		'coo_long'=>$long,
		'phone'=>$phone,
		'email'=>$email,
		'pool'=>$pool,
		'valet'=>$valet,
		'roomService'=>$roomService,
		'touristTaxes'=>$touristTaxes,
		'isDeleted'=>$isDeleted


	));

}

public function updateOne($hostelname,$hostelStars,$postCode,$number,$streetName,$country,$lat,$long,$phone,$email,$pool,$valet,$roomService,$touristTaxes,$isDeleted){
	$pdo = $this->dbConnection();
	$request = "UPDATE hostel SET hostelname = :hostelname,  hostelStars = :hostelStars, add_postCode= :add_postCode, add_number= :add_number,add_streetName =:add_streetName , add_country= :add_country, coo_lat= :coo_lat,coo_long = :coo_long, phone= :phone, email= :email, pool= :pool, valet= :valet, roomService= :roomService, touristTaxes= :touristTaxes, isDeleted = :isDeleted WHERE hostelId = :hostelId";

	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'hostelname'=> $hostelname,
		'hostelStars'=>$hostelStars,
		'add_postCode'=>$postCode,
		'add_number'=>$number,
		'add_streetName'=>$streetName,
		'add_country'=>$country,
		'coo_lat'=>$lat,
		'coo_long'=>$long,
		'phone'=>$phone,
		'email'=>$email,
		'pool'=>$pool,
		'valet'=>$valet,
		'roomService'=>$roomService,
		'touristTaxes'=>$touristTaxes,
		'isDeleted'=>$isDeleted
	));
}

public function deleteOne($isDeleted){
	$pdo = $this->dbConnection();
		//$request = "DELETE FROM hostel WHERE id = :id";
	$request = "UPDATE hostel SET isDeleted = true WHERE hostelId = :hostelId";/*cmt vas ton recuperer la variable*/
	$objects = $pdo->prepare($request);
	$objects->execute(array(
		'hostelId' => $_SESSION['hostelId']
	));
}

}

?>
