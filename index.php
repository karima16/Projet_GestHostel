<?php 
session_start();
require_once("Views/Pages/header.php");
require_once("Controllers/navigation.php");
if(isset($_GET["section"])){
	switch ($_GET["section"]) {
		case 'accueil': 
			require_once("Controllers/Client/HomeController.php");
			break;
		case 'forum':
			break;
		case 'faq':
			break;
		case 'contact':
			break;
		case 'login':
			require_once("Controllers/Client/LoginController.php")
			break;
		case 'inscription':
			break;
		case 'profil user':
			break;
		case 'historique':
			break;
		case 'admin':
			break;
		case 'deconnexion':
			break;
		
	}
}
else {
	require_once("Controllers/Client/HomeController.php");
}


require_once("Views/Pages/footer.php");


 ?>