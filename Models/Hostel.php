<?php 
require_once("Connection.php");
class Hostel extends Connection{

	public function getAll(){
		$pdo = $this->dbConnection();
		$request = "SELECT ??? FROM hostels ORDER BY id";
		$objects = $pdo->query($request);
		return $objects->fetchAll(PDO::FETCH_ASSOC);
	}
}vv

public function getOne($id){
		$pdo = $this->dbConnection();
		$request = "SELECT ??? FROM hostels WHERE id = :id";
	
		$objects = $pdo->prepare($request);
		$objects->execute(array(
		'id' => $id
		));
		return $objects->fetchAll(PDO::FETCH_ASSOC);
	}

public function addOne($formPart1, $formPart2,...){
		$pdo = $this->dbConnection();
		$request = "INSERT INTO ??? VALUES (:???, :???)";
		
		$objects = $pdo->prepare($request);
		$objects->execute(array(
			'???' => $?,
			'???' => $?
		));

	}

public function updateOne($formPart1, $formPart2,...){
		$pdo = $this->dbConnection();
		$request = "UPDATE hostel SET ??? = :??, ?? = :?? WHERE id = :id";
		
		$objects = $pdo->prepare($request);
		$objects->execute(array(
			// 'id' => $id,
			// 'nom' => $nom,
			// 'prenom' => $prenom
		));
	}

public function deleteOne(){
		$pdo = $this->dbConnection();
		$request = "DELETE FROM user WHERE id = :id";
		
		$objects = $pdo->prepare($requete);
		$objects->execute(array(
			'id' => $_SESSION['id']
		));
	}



?>
