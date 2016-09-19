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
     * @When I type a :arg1 valid
     */
    public function iTypeAValid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then A new block is created in the BDD
     */
    public function aNewBlockIsCreatedInTheBdd()
    {
        throw new PendingException();
    }

    /**
     * @Then Back to Home
     */
    public function backToHome()
    {
        throw new PendingException();
    }

    /**
     * @Then my new block is present
     */
    public function myNewBlockIsPresent()
    {
        throw new PendingException();
    }

    /**
     * @When I type :arg1
     */
    public function iType($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I type a :arg1 invalid
     */
    public function iTypeAInvalid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When Je click on :arg1
     */
    public function jeClickOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then The block is not created in the BDD
     */
    public function theBlockIsNotCreatedInTheBdd()
    {
        throw new PendingException();
    }

    /**
     * @Then We stay on the same page
     */
    public function weStayOnTheSamePage()
    {
        throw new PendingException();
    }

    /**
     * @Then An error message is displayed
     */
    public function anErrorMessageIsDisplayed()
    {
        throw new PendingException();
    }

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
     * @Then I get an error message
     */
    public function iGetAnErrorMessage()
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
     * @When I click on the button :arg1
     */
    public function iClickOnTheButton($arg1)
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
