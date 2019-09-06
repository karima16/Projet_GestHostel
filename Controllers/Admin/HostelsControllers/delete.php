<?php 
require_once("../../../Models/Hostel.php");
$_SESSION["hostelId"] = $_GET["hostel"];

if(isset($_POST["choice"])){
	if($_POST["choice"] === "yes"){
		try
		{
			
			$con->deleteOne();		
			
			header("Location:index.php?section=HostelsSelectAll");
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	else {

		header("Location:index.php?section=HostelsSelectAll");
	}
}
$p = "";
$hostels = $con->getOne($_SESSION["hostelId"]);
foreach ($hostels as $hostel) {
	$p = $hostel["hostelName"];	
}
require_once("Views/Admin/HostelsViews/delete.php");
 ?>