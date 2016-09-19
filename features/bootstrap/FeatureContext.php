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
     * @When I click on :arg1
     */
    public function iClickOn($arg1)
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
     * @When I enter a :arg1
     */
    public function iEnterA($arg1)
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
     * @Then I get loged in
     */
    public function iGetLogedIn()
    {
        throw new PendingException();
    }

    /**
     * @When I enter an unvalid :arg1 or :arg2
     */
    public function iEnterAnUnvalidOr($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I enter a valid :arg1 or :arg2
     */
    public function iEnterAValidOr($arg1, $arg2)
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
     * @Given I am an unregistred visitor
     */
    public function iAmAnUnregistredVisitor()
    {
        throw new PendingException();
    }

    /**
     * @Given I enter a unvalid :arg1
     */
    public function iEnterAUnvalid($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given I am a SU
     */
    public function iAmASu()
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
     * @When the admin exist
     */
    public function theAdminExist()
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
     * @When the admin exists
     */
    public function theAdminExists()
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
     * @Given I am SU
     */
    public function iAmSu()
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
}
