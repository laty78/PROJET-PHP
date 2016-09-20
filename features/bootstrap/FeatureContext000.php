<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
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
    }
    
    
 /**
     * @Given I am a :arg1
     */
    public function iAmA($arg1)
    {  
        $this->user = new User(); 
    }

    /**
     * @Given I click on a :arg1
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
     * @Then I get video blocks
     */
    public function iGetVideoBlocks()
    {
        throw new PendingException();
    }

}
