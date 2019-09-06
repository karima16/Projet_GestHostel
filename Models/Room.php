<?php 
require_once('Connection.php');
class Room extends Connection{
	public function getAll (){
		$pdo = $this->dbConnection();
		$request = 'SELECT * FROM ROOM';
		$object = $pdo->query($request);
		return $object->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get($roomId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM ROOM WHERE roomId=?");
        $stmt->execute([$roomId]); 
        return $room = $stmt->fetch();
    }

    public function getPicture($roomId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM PICTURE WHERE roomId=?");
        $stmt->execute([$roomId]); 
        $pic = $stmt->fetch();
        return $pic["picturePath"];
    }

    public function getType($roomTypeId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM ROOM_TYPE WHERE roomTypeId=?");
        $stmt->execute([$roomTypeId]); 
        return $type = $stmt->fetch();
    }

    public function getHostel($hostelId){
        $pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM HOSTEL WHERE hostelId=?");
        $stmt->execute([$hostelId]); 
        return $hostel = $stmt->fetch();
    }
 }
 $room = new Room();
?>