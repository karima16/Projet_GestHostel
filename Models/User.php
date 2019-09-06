<?php 
require_once('Connection.php');
class User extends Connection{
	public function getAll (){
		$pdo = $this->dbConnection();
		$request = 'SELECT * FROM USER';
		$object = $pdo->query($request);
		return $object->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get ($email,$password){
        //encrypt le password
        $password = md5($password);
		$pdo = $this->dbConnection();
		$stmt = $pdo->prepare("SELECT * FROM USER WHERE email=? AND password=?");
        $stmt->execute([$email,$password]); 
        return $user = $stmt->fetch();
    }
    
    public function insert ($firstName,$lastName,$email,$country,$phone,$password){
        //encrypt le password
        $password = md5($password);
        $pdo = $this->dbConnection();
        $sql = "INSERT INTO USER (firstName, lastName, email, country, phone, password) VALUES (?,?,?,?,?,?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute([$firstName, $lastName, $email, $country, $phone, $password]);
        return $stmt->rowCount();
    }

    public function update ($userId,$firstName,$lastName,$email,$country,$phone,$password){
        //encrypt le password
        $password = md5($password);
        $sql = "UPDATE USER SET firstName=?, lastName=?, email=?, country=?, phone=?, password=? WHERE userId=?";
        $stmt= $dpo->prepare($sql);
        $stmt->execute([$name, $surname, $sex, $id]);
        return $stmt->rowCount();
    }

    public function delete($userId){
        $pdo = $this->dbConnection();
        $sql = 'DELETE FROM USER WHERE userId = :userId';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':userId' => $userId]);
        return $stmt->rowCount();
    }
 }
 $user = new User();
?>