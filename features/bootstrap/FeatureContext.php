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

     /**
     * @Given I am an :arg1
     */
     /**
     * @Given I am :arg1
     */
    public function iAm($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I click on :arg1
     */
    public function iClickOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I enter valid :arg1
     */
    public function iEnterValid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get loged in
     */
    public function iGetLogedIn()
    {
        throw new PendingException();
    }

    /**
     * @When I enter unvalid :arg1
     */
    public function iEnterUnvalid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get an error :arg1
     */
    public function iGetAnError($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I enter an unvalid :arg1
     */
    public function iEnterAnUnvalid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I enter a valid :arg1
     */
    public function iEnterAValid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I receive an email with a new password
     */
    public function iReceiveAnEmailWithANewPassword()
    {
        throw new PendingException();
    }

    /**
     * @Then I get an error
     */
    public function iGetAnError2()
    {
        throw new PendingException();
    }

    /**
     * @When I enter a unused :arg1
     */
    public function iEnterAUnused($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I enter an unused :arg1
     */
    public function iEnterAnUnused($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I create a admin
     */
    public function iCreateAAdmin()
    {
        throw new PendingException();
    }

    /**
     * @When I enter a used :arg1
     */
    public function iEnterAUsed($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I enter an unsued :arg1
     */
    public function iEnterAnUnsued($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When the admin exists
     */
    public function theAdminExists()
    {
        throw new PendingException();
    }

    /**
     * @Then I updated an admin
     */
    public function iUpdatedAnAdmin()
    {
        throw new PendingException();
    }

    /**
     * @When the admin doesn't exist
     */
    public function theAdminDoesnTExist()
    {
        throw new PendingException();
    }

    /**
     * @Then I get a question :arg1
     */
    public function iGetAQuestion($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I get a confirmation
     */
    public function iGetAConfirmation()
    {
        throw new PendingException();
    }

    /**
     * @Then the admin is deleted
     */
    public function theAdminIsDeleted()
    {
        throw new PendingException();
    }

    /**
     * @Then the admin keep on existing
     */
    public function theAdminKeepOnExisting()
    {
        throw new PendingException();
    }

    /**
     * @Given I am an :arg1
     */
    public function iAmAn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I click on the button :arg1
     */
    public function iClickOnTheButton($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When Je saisi un :arg1 valide
     */
    public function jeSaisiUnValide($arg1)
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
     * @Then Un nouveau bloc est créé dans la BDD
     */
    public function unNouveauBlocEstCreeDansLaBdd()
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
     * @Then mon nouveau bloc est présent
     */
    public function monNouveauBlocEstPresent()
    {
        throw new PendingException();
    }

    /**
     * @When Je saisi :arg1
     */
    public function jeSaisi($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When Je saisi un :arg1 non valide
     */
    public function jeSaisiUnNonValide($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Le bloc n'est pas créé dans la BDD
     */
    public function leBlocNEstPasCreeDansLaBdd()
    {
        throw new PendingException();
    }

    /**
     * @Then On reste sur la même page
     */
    public function onResteSurLaMemePage()
    {
        throw new PendingException();
    }

    /**
     * @Then Un message erreur est affiché
     */
    public function unMessageErreurEstAffiche()
    {
        throw new PendingException();
    }

    /**
     * @Given I am a :arg1
     */
    public function iAmA($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I click on a :arg1
     */
    public function iClickOnA($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then The block displays on the whole page
     */
    public function theBlockDisplaysOnTheWholePage()
    {
        throw new PendingException();
    }

    /**
     * @When I choose :arg1
     */
    public function iChoose($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get video blocks
     */
    public function iGetVideoBlocks()
    {
        throw new PendingException();
    }
    
}
