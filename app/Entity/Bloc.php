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

        /* INSERTION GENERIQUE */
        $params = array();
        $entree = "title, date, media_image, media_video, media_audio, format";
        if(null!=($this->title)) {
            $titre= $this->title;
            array_push($params, $titre);
        }
        if(is_null($this->date)){
            $day= $this->date = date("Y-m-d");

            array_push($params, $day);

        }
        if(null!=($this->media_image)) {
            $imag= $this->media_image;

            array_push($params, $imag);

        }
        if(null==($this->media_image)){
            array_push($params,"null");
        }
        if(null!=($this->media_video)) {
            $vid= $this->media_video;
            array_push($params, $vid);

        }
        if(null==($this->media_video)){
            array_push($params,"null");
        }
        if(null!=($this->media_audio)) {
            $aud= $this->media_audio;
            echo $this->media_audio;
            array_push($params, $aud);
        }
        if(null==($this->media_audio)){
            array_push($params,"null");
        }
        if(null!=($this->format)) {
            $form= $this->format;
            array_push($params, $form);
        }

        print_r($params);
            $sq= "INSERT INTO bloc (id,";

            $valeur_entree= "NULL,?,?,?,?,?,?";
            $sql= $sq.''.$entree.') VALUES ('.$valeur_entree.')';
        echo $sql;
        print_r($params);
        $statement = $db->prepare($sql);
        $statement->execute($params);
        /*Pour afficher les errors sql*/
        print_r($statement->errorInfo());
    }
    public function select(){
        $db = DBSingleton::getInstance();
        $sq = "SELECT * FROM bloc WHERE title =";
        $string_title= $this->title;
        $sql= $sq.'\''.$string_title.'\'';
        echo $sql;
        $pdostatement = $db->prepare($sql);
        $pdostatement->execute(array($this->title));
        //FETCH_CLASS pour retouner proprement sans le jeu de résultat.
        $tableau = $pdostatement->fetchAll(\PDO::FETCH_BOTH);
        $counter=0;
        print_r($pdostatement);

        foreach($tableau as $row) {
            $bdtitle = $row['title'];
        }
        if($bdtitle = ($string_title)){
            echo 'Le post '. $this->title . 'est dejà présent';
        }
        else {
                echo 'Post présent';
        }
    }

}

?>
