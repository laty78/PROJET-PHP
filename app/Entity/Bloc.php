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
        $this->media_image = $image;
    }
    public function setMediaVideo($video){
        $this->media_video = $video;
    }
    public function setMediaAudio($audio){
        $this->media_audio = $audio;
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
        $sql = "SELECT * FROM bloc WHERE title = 'Test'";
        $pdostatement = $db->prepare($sql);
        $pdostatement->execute(array($this->title));

        $tableau = $pdostatement->fetchAll(\PDO::FETCH_BOTH);
        $counter=0;
        foreach ($tableau as $row) {
            $bloc_title = $row["title"];
            if ($bloc_title = "Test") {
                $counter +=1;
                echo "Le post existe bien";
            } else {
                echo "Le post est créer";
            }

        }
    }

}

?>
