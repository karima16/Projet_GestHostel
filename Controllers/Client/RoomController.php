<?php 

require_once("Views/Room/room.php");
require_once('Models/Room.php');

if(isset($_GET["roomId"])){
    $id = $_GET["roomId"];
    $roomObj = $room->get($id);
    if($roomObj){
       $roomName = $roomObj["roomName"];
       $description = $roomObj["longDescription"];
       $children = $roomObj["childrenCapacity"];
       $adults = $roomObj["adultCapacity"];
       $bathrooms = $roomObj["bathroomQuantity"];
       $toilets = $roomObj["toiletQuantity"];
       $balcony = $roomObj["balcony"];
       $roomType = $room->getType($roomObj["roomTypeId"])["roomTypeName"];
       $picturePath = $room->getPicture($roomObj["hostelId"]);
       $hostel = $room->getHostel($id)["hostelName"];

       var_dump($roomObj);
    }
    else{
        echo "La chambre n'existe pas.";
    }
}
else{
    echo "La chambre n'existe pas.";
}
?>