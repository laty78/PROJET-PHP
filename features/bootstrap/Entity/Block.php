<?php
namespace Entity;

class Block {
	
	public function __construct() {
		
	}
	
	public function id_exist($id) {
		$temp = DBSingleton::getInstance();
		$sql = "SELECT * FROM block WHERE id = ?";
		$pdostatement = $temp->prepare($sql);
		$pdostatement->execute(array($id));
		$tableau = $pdostatement->fetchAll(\PDO::FETCH_ASSOC);
		if (empty($tableau)) { return false; }
		else { return true; }
	}
	
	public function createBlock($title, $type, $format, $content) {
		$temp = DBSingleton::getInstance();
		$sql = "INSERT INTO block (title, type, format, content) VALUES (?, ?, ?, ?)";
		$pdostatement = $temp->prepare($sql);
		$pdostatement->execute(array($title, $type, $format, $content));
	}
	
	public function updateBlock($id_block, $new_title, $new_type, $new_format, $new_content) {
		if ($this->id_exist($id_block)) {
			$temp = DBSingleton::getInstance();
			$sql = "UPDATE block SET title = ?, type = ?, format = ?, content = ? WHERE id = ?";
			$pdostatement = $temp->prepare($sql);
			$pdostatement->execute(array($new_title, $new_type, $new_format, $new_content, $id_block));
		}
		else { echo "Ce block n'existe pas."; }
	}
	
	public function deleteBlock($id_block) {
		if ($this->id_exist($id_block)) {
			$temp = DBSingleton::getInstance();
			$sql = "DELETE FROM block WHERE id = ?";
			$pdostatement = $temp->prepare($sql);
			$pdostatement->execute(array($id_block));
		}
		else { echo "Ce block n'existe pas."; }
	}
}