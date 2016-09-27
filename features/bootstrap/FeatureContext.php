<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Entity\User;
use Entity\Bloc;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $bloc;
    
        
    
    /**
     * @Given I am an :arg1
     */
    public function iAmAn($arg1)
    {
        $pseudo = 'chat';
        $pwd ='felix';
        $email='mail@mail.com';
        $user = new User();
        $user->setPseudo($pseudo);
        $user->setPsw($pwd);
        $user->setEmail($email);
        $user->connect();

        
        /*$this->user->setPseudo("Name");
        $this->user->setMdp("password");
        $this->user->setRole($arg1);*/
        
    }

    /**
     * @When Je saisi :value dans le champ :field
     */
    public function jeSaisiDansLeChamp($value, $field)
    {
        echo $field;
        switch($field){
            case "title":
                $this->bloc->setTitle($value);
                break;
            /*case "media":
                $this->bloc->setMedia($value);
                break;*/
            case "media_image":
                $this->bloc->setMediaImage($value);
                break;
            case "media_video":
                $this->bloc->setMediaVideo($value);
                break;
            case "media_audio":
                $this->bloc->setMediaAudio($value);
                break;
            case "format":
                $this->bloc->setFormat($value);
                break;
        }
        
       /* switch($field){
            case "title":
                $this->bloc->setTitle($value);
                break;
            case "media_video":
                $this->bloc->setMediaVideo($value);
                break;
            case "format":
                $this->bloc->setFormat($value);
                break;
        }

        switch($field){
            case "title":
                $this->bloc->setTitle($value);
                break;
            case "media_audio":
                $this->bloc->setMediaAudio($value);
                break;
            case "format":
                $this->bloc->setFormat($value);
                break;
        }

        switch($field){
            case "title":
                $this->bloc->setTitle($value);
                break;
            case "media_image && media_audio":
                $this->bloc->setMediaImage($value) && setMediaAudio($value);
                break;
            case "format":
                $this->bloc->setFormat($value);
                break;
        }*/
    }

    /**
     * @When Je clique sur :arg1
     */
    public function jeCliqueSur($arg1)
    {
        // Nothing to do. Only front.
    }

    /**
     * @Then Un nouveau post est créé dans la BDD
     */
    public function unNouveauPostEstCreeDansLaBdd()
    {
        $this->bloc->create();
    }

    /**
     * @Then Retour à l'accueil
     */
    public function retourALAccueil()
    {
       // Nothing to do, only front
    }

    /**
     * @Then Mon nouveau post est présent
     */
    public function monNouveauPostEstPresent()
    {
        $this->bloc->select();
    }
    /**
     * @Then Je me connect à mon compte
     */
    public function jeMeConnectAMonCompte()
    {
        

    }
    /**
     * @When je créé un bloc
     */
    public function jeCreeUnBloc()
    {
        $this->bloc = new Bloc();
    }

    /**
     * @When je modifie le bloc
     */
    public function jeModifieLeBloc()
    {
        $this->bloc = new Bloc();
        $this->bloc->update();
    }

    /**
     * @When je modifie le champ :arg1
     */
    public function jeModifieLeChamp($arg1)
    {
        //throw new PendingException();
    }

    /**
     * @Then le post a été modifié dans la BDD
     */
    public function lePostAEteModifieDansLaBdd()
    {
        //throw new PendingException();
    }


}
