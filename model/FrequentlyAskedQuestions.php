<?php 
require_once('Connection.php');
class FrequentlyAskedQuestions extends Connection{
	public function getAll (){
		$pdo = $this->dbConnection();
		$request = 'SELECT * FROM FAQ';
		$object = $pdo->query($request);
		return $object->fetchAll(PDO::FETCH_ASSOC);
		// return $test = ['hello World'];
	}
 }
 $faq = new FrequentlyAskedQuestions();
?>