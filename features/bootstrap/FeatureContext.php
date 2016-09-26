<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Entity\User;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext {
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    
    public function __construct() {
    }
    
    /**
     * @Given I am :arg1
     */
    public function iAm($arg1) {
    	$user = new User("chat", "felix");
    	$user->connect();
    }

    /**
     * @Then I create a SU
     */
    public function iCreateASu() {
    	$user = new User("chat", "felix");
			$user->suCreatesSu("white", "leaf", "white@leaf.com", 1);
    }
	
		/**
     * @When I update a SU
     */
    public function iUpdateASu() {
			$user = new User("chat", "felix");
			$user->suUpdatesSu("chien", "nawel", "heli", "nawel@heli", 2);
    }

}

?>