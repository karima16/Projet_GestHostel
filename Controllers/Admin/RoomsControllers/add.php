<?php 
require_once("../../Models/Room.php");
$error = "";

if(isset($_POST["roomName"], 
	$_POST["shortDescription"], 
	$_POST["longDescription"],
	$_POST["childrenCapacity"],
	$_POST["adultCapacity"],
	$_POST["bathroomQuantity"],
	$_POST["toiletQuantity"],
	$_POST["balcony"],
	$_POST["isDeleted"])){
	if(trim($_POST["roomName"]) != "" &&
		trim($_POST["shortDescription"]) != "" && 
		trim($_POST["longDescription"]) != "" &&
		is_numeric($_POST["childrenCapacity"]) &&
		is_numeric($_POST["adultCapacity"]) &&
		is_numeric($_POST["bathroomQuantity"]) &&
		is_numeric($_POST["toiletQuantity"] &&
	)




// (trim($_POST["nom"]) != "" && trim($_POST["prenom"])){		
		try
		{
			$rooms = $con->addOne($_POST["roomName"], 
				$_POST["shortDescription"],
				$_POST["longDescription"],
				$_POST["childrenCapacity"],
				$_POST["adultCapacity"],
				$_POST["bathroomQuantity"],
				$_POST["toiletQuantity"],
				$_POST["balcony"],
				$_POST["isDeleted"]
			)



			/*$users = $con->addUser($_POST["nom"], $_POST["prenom"]);*/		
			header("Location:index.php?section=RoomsSelectAll");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	else {
		$error = "<p style=color:red;>Veuillez remplir correctement les champs</p>";
	}
}

require_once("Views/Admin/RoomsViews/add.php");

?>