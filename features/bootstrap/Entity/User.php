<?php
namespace Entity;

class User {
	private $pseudo;
	private $psw;
    
	public function __construct($pseudo,$psw){
			$this->pseudo=$pseudo;
			$this->psw=$psw;
	}

	public function pseudo_exist($pseudo) {
		$temp = DBSingleton::getInstance();
		$sql = "SELECT * FROM user WHERE pseudo = ?";
		$pdostatement = $temp->prepare($sql);
		$pdostatement->execute(array($pseudo));
		$tableau = $pdostatement->fetchAll(\PDO::FETCH_ASSOC);
		if (empty($tableau)) { return false; }
		else { return true; }
	}
  
	public function connect() {
  	$temp = DBSingleton::getInstance();
  	$sql = "SELECT * FROM user WHERE pseudo = ?";
  	$pdostatement = $temp->prepare($sql);
  	$pdostatement->execute(array($this->pseudo));
  	$tableau = $pdostatement->fetchAll(\PDO::FETCH_BOTH);
    if (empty($tableau)) {
    	echo 'Ce pseudo n’existe pas...';
		}
		else {
    	foreach ($tableau as $row) {
      	$bd_pseudo = $row['pseudo'];
      	$bd_pwd = $row['pwd'];
      }
    	if ($bd_pwd === $this->psw) {
    		echo 'Vous êtes connecté';
    		return true;        
    	} 
			else {
    		echo 'Le mot de passe est incorrect';
    		return false;
    	}
  	}
	}
		
	public function createUser($new_pseudo, $new_psw, $new_email, $new_id_role) {
		$temp = DBSingleton::getInstance();
		$sql = "SELECT * FROM user WHERE pseudo = ? OR email = ?";
		$pdostatement = $temp->prepare($sql);
		$pdostatement->execute(array($new_pseudo, $new_email));
		$tableau = $pdostatement->fetchAll(\PDO::FETCH_ASSOC);
		if (empty($tableau)) {
			echo "Yeah";
			$sql = "INSERT INTO user (pseudo, pwd, email, id_role) VALUES (?, ?, ?, ?)";
			$pdostatement = $temp->prepare($sql);
			$pdostatement->execute(array($new_pseudo, $new_psw, $new_email, $new_id_role));
		}
		else {
			echo "Pseudo ou email non disponible";
		}
	}
	
	public function updateUser($pseudo, $new_pseudo, $new_psw, $new_email, $new_id_role) {
		if ($this->pseudo_exist($pseudo) && !$this->pseudo_exist($new_pseudo)) {
			$temp = DBSingleton::getInstance();
			$sql = "UPDATE user SET pseudo = ?, pwd = ?, email = ?, id_role = ? WHERE pseudo = ?";
			$pdostatement = $temp->prepare($sql);
			$pdostatement->execute(array($new_pseudo, $new_psw, $new_email, $new_id_role, $pseudo));
		}
		else { echo "Cet utilisateur n'existe pas.";}
	}
	
	public function deleteUser($pseudo) {
		if ($this->pseudo_exist($pseudo)) {
			$temp = DBSingleton::getInstance();
			$sql = "DELETE FROM user WHERE pseudo = ?";
			$pdostatement = $temp->prepare($sql);
			$pdostatement->execute(array($pseudo));
		}
		else { echo "Cet utilisateur n'existe pas."; }
	}

}
?>