<?php 

require_once('Models/Room.php');

if(isset($_GET["roomId"])){
    $id = $_GET["roomId"];
    $roomObj = $room->get($id);
    if($roomObj){
       $roomName = $roomObj["roomName"];
       $descriptionShort = $roomObj["shortDescription"];
       $description = $roomObj["longDescription"];
       $children = $roomObj["childrenCapacity"];
       $adults = $roomObj["adultCapacity"];
       $bathrooms = $roomObj["bathroomQuantity"];
       $toilets = $roomObj["toiletQuantity"];
       $balcony = $roomObj["balcony"];
       $roomType = strtoupper($room->getType($roomObj["roomTypeId"])["roomTypeName"]);
       $picturePath = $room->getPicture($id);
       if(!$picturePath){
            $picturePath = "https://image.shutterstock.com/z/stock-vector-unavailable-red-rubber-stamp-vector-isolated-1433120663.jpg";
       }
       $hostel = $room->getHostel($roomObj["hostelId"])["hostelName"];

       require_once("Views/Room/room.php");
    }
    else{
        echo "<h2>Erreur:</h2><p>La chambre n'existe pas.</p>";
    }
}
else{
    echo "<h2>Erreur:</h2><p>La chambre n'existe pas.</p>";
}
?>