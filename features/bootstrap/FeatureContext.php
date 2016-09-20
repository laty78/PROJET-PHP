<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;

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
    }
    
    /**
     * @Given I am :arg1
     */
    public function iAm($arg1)
    {
        $user = new User('pseudo', 'pwd');
        $user->connect();
    }

    /**
     * @When I enter a valid :arg1
     */
    public function iEnterAValid($arg1)
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
     * @When I enter an unvalid :arg1
     */
    public function iEnterAnUnvalid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get an error
     */
    public function iGetAnError()
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
     * @When I click on :arg1
     */
    public function iClickOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I create a block
     */
    public function iCreateABlock()
    {
        throw new PendingException();
    }

    /**
     * @When I enter a unvalid :arg1
     */
    public function iEnterAUnvalid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I get an error :arg1
     */
    public function iGetAnError2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I am  :arg1
     */
    public function iAm2($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When the block exists
     */
    public function theBlockExists()
    {
        throw new PendingException();
    }

    /**
     * @Then I update a block
     */
    public function iUpdateABlock()
    {
        throw new PendingException();
    }

    /**
     * @When the block doesn't exist
     */
    public function theBlockDoesnTExist()
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
     * @Then I deleted the block
     */
    public function iDeletedTheBlock()
    {
        throw new PendingException();
    }

    /**
     * @When I enter :arg1
     */
    public function iEnter($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I change the theme in black
     */
    public function iChangeTheThemeInBlack()
    {
        throw new PendingException();
    }

    /**
     * @Then I change the theme in white
     */
    public function iChangeTheThemeInWhite()
    {
        throw new PendingException();
    }

    /**
     * @Then I change the theme with this image
     */
    public function iChangeTheThemeWithThisImage()
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
     * @Then I create a SU
     */
    public function iCreateASu()
    {
        throw new PendingException();
    }

    /**
     * @When I enter an used :arg1
     */
    public function iEnterAnUsed($arg1)
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
     * @When the modo exists
     */
    public function theModoExists()
    {
        throw new PendingException();
    }

    /**
     * @Then I updated an SU
     */
    public function iUpdatedAnSu()
    {
        throw new PendingException();
    }

    /**
     * @When the modo doesn't exist
     */
    public function theModoDoesnTExist()
    {
        throw new PendingException();
    }

    /**
     * @When the SU exists
     */
    public function theSuExists()
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
     * @Then the SU is deleted
     */
    public function theSuIsDeleted()
    {
        throw new PendingException();
    }

    /**
     * @Then the SU keep on existing
     */
    public function theSuKeepOnExisting()
    {
        throw new PendingException();
    }

    /**
     * @When the SU doesn't exist
     */
    public function theSuDoesnTExist()
    {
        throw new PendingException();
    }

    /**
     * @Then I create a modo
     */
    public function iCreateAModo()
    {
        throw new PendingException();
    }

    /**
     * @Then I updated an modo
     */
    public function iUpdatedAnModo()
    {
        throw new PendingException();
    }

    /**
     * @Then the modo is deleted
     */
    public function theModoIsDeleted()
    {
        throw new PendingException();
    }

    /**
     * @Then the modo keep on existing
     */
    public function theModoKeepOnExisting()
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
     * @When Je saisi :arg1 dans le champ :arg2
     */
    public function jeSaisiDansLeChamp($arg1, $arg2)
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

    /**
     * @Then Retour à l'accueil
     */
    public function retourALAccueil()
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
     * @Then Mon nouveau post est présent
     */
    public function monNouveauPostEstPresent()
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
     * @When I select a :arg1
     */
    public function iSelectA($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then The block displays
     */
    public function theBlockDisplays()
    {
        throw new PendingException();
    }

    /**
     * @When I filter via video
     */
    public function iFilterViaVideo()
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
