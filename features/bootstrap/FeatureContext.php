<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->user = new User();
        $this->user->setPseudo("Toto");
        
    }
    
    /**
     * @Given I am an :arg1
     */
    public function iAmAn($arg1)
    {
        $this->user->setRole($arg1);
        
        //throw new PendingException();
    }

    /**
     * @When I click on the button :arg1
     */
    public function iClickOnTheButton($arg1)
    {
        if(true){
            throw new PendingException("Error unknown name");
        }
            
            
    }

    /**
     * @When Je saisi un :arg1 valide
     */
    public function jeSaisiUnValide($arg1)
    {
        //throw new PendingException();
    }

    /**
     * @When Je clique sur :arg1
     */
    public function jeCliqueSur($arg1)
    {
        //throw new PendingException();
    }

    /**
     * @Then Un nouveau bloc est créé dans la BDD
     */
    public function unNouveauBlocEstCreeDansLaBdd()
    {
        //throw new PendingException();
    }

    /**
     * @Then Retour à l'accueil
     */
    public function retourALAccueil()
    {
        //throw new PendingException();
    }

    /**
     * @Then mon nouveau bloc est présent
     */
    public function monNouveauBlocEstPresent()
    {
        //throw new PendingException();
    }

    /**
     * @When Je saisi :arg1
     */
    public function jeSaisi($arg1)
    {
        //throw new PendingException();
    }

    /**
     * @When Je saisi un :arg1 non valide
     */
    public function jeSaisiUnNonValide($arg1)
    {
       // throw new PendingException();
    }

    /**
     * @Then Le bloc n'est pas créé dans la BDD
     */
    public function leBlocNEstPasCreeDansLaBdd()
    {
       // throw new PendingException();
    }

    /**
     * @Then On reste sur la même page
     */
    public function onResteSurLaMemePage()
    {
       // throw new PendingException();
    }

    /**
     * @Then Un message erreur est affiché
     */
    public function unMessageErreurEstAffiche()
    {
       // throw new PendingException();
    }

}
