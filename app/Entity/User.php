<?php
namespace Entity;

class User {
    private $pseudo;
    private $psw;
    
    public function __construct(){
       
        
    }
    public function setPseudo($pseudo){
        if(preg_match("#[@]{1}#",$pseudo)){
            echo 'pas correct';    
        }
        else{
            echo 'correct';
             $this->pseudo=$pseudo;
        }
    }
    
    public function setPsw($pwd){
        if(preg_match("#[a-zA-Z]{3,30}#",$pwd)){
            echo 'mot de passe trop court!';    
        }
        else{
            $this->psw=$psw;
            echo 'correct!';
        }
    }
    
    public function setEmail($email){
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo 'votre adresse mail est correcte!';    
        }
        else{
            echo 'votre mail est incorrect!';
        }
    }
    public function setRole($role){
        $b = new Bloc();
        
    }
    
    public function connect(){
        $temp = DBSingleton::getInstance();
        $sql = "SELECT * FROM user WHERE pseudo = ?";
        $pdostatement = $temp->prepare($sql);
        $pdostatement->execute(array($this->pseudo));
        $tableau = $pdostatement->fetchAll(\PDO::FETCH_BOTH);
        /*print_r($tableau);*/
        foreach($tableau as $row) {
            $bd_pseudo = $row['pseudo'];
            $bd_pwd = $row['pwd'];
        }
        if($bd_pseudo === $this->pseudo){
            if($bd_pwd === $this->psw){
                echo ':)';
                return true;        
            } else {
                echo ':(';
                return false;
            }
        } else {
            echo 'Aucun pseudo...';
        }
    }
}

?>