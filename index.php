<?php 
session_start();
require_once("Views/Pages/header.php");
// require_once("view/menu/menu.php");
if(isset($_GET["section"])){
	// switch ($_GET["section"]) {
		
	// }
}
else {
	require_once("Controllers/Client/HomeController.php");
}


require_once("Views/Pages/footer.php");


 ?>