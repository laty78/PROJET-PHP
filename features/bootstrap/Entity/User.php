<?php
namespace Entity;

class User {
    private $pseudo;
    private $psw;
    
    public function __construct($pseudo,$psw){
        $this->pseudo=$pseudo;
        $this->psw=$psw;
    }
    
    public function connect() {
    	$temp = DBSingleton::getInstance();
      $sql = "SELECT * FROM user WHERE pseudo = ?";
      $pdostatement = $temp->prepare($sql);
      $pdostatement->execute(array($this->pseudo));
      $tableau = $pdostatement->fetchAll(\PDO::FETCH_BOTH);
      if (empty($tableau)) {
      	echo 'Ce pseudo n\'existe pas...';
			}
			else {
      	foreach ($tableau as $row) {
       		$bd_pseudo = $row['pseudo'];
      		$bd_pwd = $row['pwd'];
        }
        if ($bd_pwd === $this->psw) {
        	echo 'On est bien connecté ! :)';
          return true;        
        } 
				else {
        	echo 'Mauvais mot de passe... :(';
          return false;
        }
      }
    }
		
		public function suCreatesSu($new_pseudo, $new_psw, $new_email, $new_id_role) {
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
	
	public function suUpdatesSu($pseudo, $new_pseudo, $new_psw, $new_email, $new_id_role) {
		$temp = DBSingleton::getInstance();
		$sql = "SELECT * FROM user WHERE pseudo = ?";
		$pdostatement = $temp->prepare($sql);
		$pdostatement->execute(array($pseudo));
		$tableau = $pdostatement->fetchAll(\PDO::FETCH_ASSOC);
		print_r($tableau);
		if (empty($tableau)) {
			echo "Cet utilisateur n'existe pas.";
		}
		else {
			echo "Do something";
			$sql = "UPDATE user SET pseudo = ?, pwd = ?, email = ?, id_role = ? WHERE pseudo = ?";
			$pdostatement = $temp->prepare($sql);
			$pdostatement->execute(array($new_pseudo, $new_psw, $new_email, $new_id_role, $pseudo));
			//Besoin de vérifier que le nouveau pseudo et email n'est pas déjà utilisé --> fonction ??
			$sql = "SELECT * FROM user";
			$pdostatement = $temp->prepare($sql);
			$pdostatement->execute();
			$tableau = $pdostatement->fetchAll(\PDO::FETCH_ASSOC);
			print_r($tableau);
		}
	}
	
	public function suDeleteSu() {
		
	}
}
?>