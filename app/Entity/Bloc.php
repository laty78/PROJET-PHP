<?php
namespace Entity;

class Bloc {
    private $title;
    private $id;
    private $date;
    private $media_image;
    private $media_video;
    private $media_audio;
    private $format;
    
    
    public function setTitle($title){
        $this->title = $title;
    }

    public function setMediaImage($image){
        $this->media_image=$image;
    }
    public function setDate($date){
        $this->date = $date;
    }
    public function setFormat($format){
        if(!is_numeric($format)){
            $format=intval($format);
        }
        $this->format = $format;
    }
    public function create(){
        $db = DBSingleton::getInstance();
        if(is_null($this->date)){
            $this->date = date("Y-m-d H:i:s");
        }
        $sql = "INSERT INTO bloc (id, title, date, media_image, format) VALUES (NULL, ?, ?, ?, ?);";
        
        $params = array($this->title, $this->date, $this->media_image, $this->format);
        
        
        $statement = $db->prepare($sql);
        $statement->execute($params);
    }
    public function select(){
        $db = DBSingleton::getInstance();
        $sql =  * FROM `bloc` WHERE `title` = 'Nom de l\'image';
        $pdostatement = $db->prepare($sql);
        $pdostatement->execute(array($this->title));
        $tableau = $pdostatement->fetchAll(\PDO::FETCH_BOTH);
        print_r($tableau);
        foreach($tableau as $row) {
            $bd_title = $row['title'];
            if($bd_title ===  $this->title ){
                echo'Poste est déjà présent';
            }
            else{
                echo'Votre poste est crée';
            }
        }
    }

}

?>