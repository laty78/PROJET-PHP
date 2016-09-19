<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Entity\User;

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
        $this->user = new User();
        $this->user->setPseudo("Name");
        $this->user->setMdp("password");
        $this->user->setRole($arg1);
    }

    /**
     * @When Je saisi :arg1 dans le champ :arg2
     */
    public function jeSaisiDansLeChamp($arg1, $arg2)
    {
        throw new PendingException();
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


}
