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
     * @Given I am a visitor
     */
    public function iAmAVisitor()
    {
        $this ->iAmAVisitor = $iAmAVisitor();
        
    }

    /**
     * @When I click on a block
     */
    public function iClickOnABlock()
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


}
