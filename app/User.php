<?php
namespace Entity;

class User {
    private $pseudo;
    private $psw;
    
    public function __construct($pseudo,$psw){
        $this->pseudo=$pseudo;
        $this->psw=$psw;
    }
    public function setPseudo(){
            echo 'pas correct';
    }
    public function setPsw($psw){
        
    }
    
    public function setRole($role){
        
    }
    
    public function connect(){
        $temp = DBSingleton::getInstance();
        $sql = "SELECT * FROM user WHERE pseudo = ?";
        $pdostatement = $temp->prepare($sql);
        $pdostatement->execute(array($this->pseudo));
        $tableau = $pdostatement->fetchAll(\PDO::FETCH_BOTH);
        print_r($tableau);
        foreach($tableau as $row) {
            $bd_pseudo = $row['pseudo'];
            $bd_pwd = $row['pwd'];
        }
        //if($bd_pseudo === $this->pseudo){
            if($bd_pwd === $this->psw){
                //echo ':)';
                return true;        
            } else {
                //echo ':(';
                return false;
            }
        //} 
        //else {
            //echo 'Aucun pseudo...';
        //}
    }
}

?>