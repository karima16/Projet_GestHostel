<?php 
require_once("../../Models/Hostel.php");

try
{
	$table = "<table>";
	$table .= "<tr><th></th><th>id</th><th>Nom</th><th>Autre</th><th></th></tr>";
	$hostels = $con->getAll();
	foreach ($hostels as $hostel) {
		$table .=  '<tr><td><a class="btn-update" href="index.php?section=update&hostel=' . $hostel["id"].'">&#9998;</a></td>';
		$table .= '<td>' .$hostel["hostelId"] . '</td>';
		$table .= '<td>' . $hostel['hostelName'] . '</td>';
		$table .= '<td>' . $hostel['hostelStars'] . '</td>';
		$table .= '<td><a class="btn-delete" href="index.php?section=delete&hostel=' . $hostel["hostelId"].'">&#128465;</a></td></tr>';
	}
	$table.="</table>";

	require_once("View/Admin/selectAll.php");

}
catch(PDOException $e)
{
	echo $e->getMessage();
}


 ?>