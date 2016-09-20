<?php
namespace Entity;

class User {
    private $pseudo;
    private $psw;
    
    public function __construct($pseudo,$psw){
        $this->pseudo=$pseudo;
        $this->psw=$psw;
    }
    public function setPseudo($pseudo){
        
    }
    
    public function setPsw($psw){
        
    }
    
    public function setRole($role){
        
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
	}
?>