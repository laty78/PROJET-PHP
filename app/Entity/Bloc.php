<?php
namespace Entity;

class Bloc {
    private $title;
    private $id;
    private $date;
    private $media;
 /*   private $media_image;
    private $media_video;
    private $media_audio;*/
    private $format;
    
    
    public function setTitle($title){
        $this->title = $title;
    }

    public function setMedia($media){
        $this->media = $media;
    }

   /* public function setMediaImage($image){
        $this->media_image = $image;
    }
    public function setMediaVideo($video){
        $this->media_video = $video;
    }
    public function setMediaAudio($audio){
        $this->media_audio = $audio;
    }*/
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

        /* INSERTION GENERIQUE */
        $params = array();
        if(null!=($this->title)) {
            $titre= $this->title;
            /*array_push($entree, "title");*/
            array_push($params, $titre);
        }
        if(is_null($this->date)){
            $day= $this->date = date("Y-m-d");
            /*array_push($entree, "date");*/
            array_push($params, $day);
        }
        if(null!=($this->media)) {
            $this->media;
            /*array_push($entree, "media");*/
            array_push($params, $this->media);
        }
        /*if(null!=($this->media_video)) {
            $vid= $this->media_video;
            array_push($entree, "media_video");
            array_push($params, $vid);
        }
        if(null!=($this->media_audio)) {
            $aud= $this->media_audio;
            echo $this->media_audio;
            array_push($entree, "media_audio");
            array_push($params, $aud);
        }*/
        if(null!=($this->format)) {
            $form= $this->format;
/*            array_push($entree, "format");*/
            array_push($params, $form);
        }

        /*CONVERTIR UN TABLEAU EN STRING
        print_r($params);
        $t = implode(",", $entree);
        echo $t;*/
            $sq= "INSERT INTO bloc (id,";
            $entree= "title, date, media, format";
            $valeur_entree= "NULL,?,?,?,?";

            /*$tab= array($this->title, $this->date, $this->media_image, $this->media_video, $this->media_audio, $this->format);*/
            $sql= $sq.''.$entree.') VALUES ('.$valeur_entree.')';
            /* case"media_image":*/
            /*    $sql = "INSERT INTO bloc (id, title, date, media_image, format) VALUES (NULL, ?, ?, ?, ?);";*/
                /*break;
            case"media_image && media_audio":
                $sql = "INSERT INTO bloc (id, title, date, media_image, media_audio, format) VALUES (NULL, ?, ?, ?, ?, ?);";
                break;
            case"media_video":
                $sql = "INSERT INTO bloc (id, title, date, media_video, format) VALUES (NULL, ?, ?, ?, ?);";
                break;
            case"media_audio":
                $sql = "INSERT INTO bloc (id, title, date, media_audio, format) VALUES (NULL, ?, ?, ?, ?);";
                break;*/
        echo $sql;
        print_r($params);
        $statement = $db->prepare($sql);
        $statement->execute($params);
        /*Pour afficher les errors sql*/
        print_r($statement->errorInfo());
    }
    public function select(){
        $db = DBSingleton::getInstance();
        $sql = "SELECT * FROM bloc WHERE title = 'Test'";
        $pdostatement = $db->prepare($sql);
        $pdostatement->execute(array($this->title));
        //FETCH_CLASS pour retouner proprement sans le jeu de résultat.
        $tableau = $pdostatement->fetchAll(\PDO::FETCH_CLASS);
        $counter=0;
        print_r($tableau);
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
