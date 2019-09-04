<?php 
session_start();
require_once("view/pages/header.php");
// require_once("view/menu/menu.php");
if(isset($_GET["section"])){
	// switch ($_GET["section"]) {
		
	// }
}
else {
	require_once("controller/pages/home.php");
}


require_once("view/pages/footer.php");


 ?>