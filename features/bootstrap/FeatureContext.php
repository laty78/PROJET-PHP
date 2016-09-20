<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Entity\User;
use Entity\Champ;
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    
    
        
    
    /**
     * @Given I am an :arg1
     */
    public function iAmAn($arg1)
    {
        $user = new User('chien','felix');
        $user->connect();
        
    }

    /**
     * @When Je saisi :arg1 dans le champ :arg2
     */
    public function jeSaisiDansLeChamp($arg1, $arg2)
    {
        $this->champ = new Champ();
        $this->champ->setLabel($arg1);
        $this->champ->setContent($arg2);
        
    }

    /**
     * @When Je clique sur :arg1
     */
    public function jeCliqueSur($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Un nouveau post est créé dans la BDD
     */
    public function unNouveauPostEstCreeDansLaBdd()
    {
        throw new PendingException();
    }

    /**
     * @Then Retour à l'accueil
     */
    public function retourALAccueil()
    {
        throw new PendingException();
    }

    /**
     * @Then Mon nouveau post est présent
     */
    public function monNouveauPostEstPresent()
    {
        throw new PendingException();
    }
    /**
     * @Then Je me connect à mon compte
     */
    public function jeMeConnectAMonCompte()
    {
        throw new PendingException();
    }


}
