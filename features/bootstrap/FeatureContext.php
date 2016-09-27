<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Behat\Tester\Exception\PendingException;
use Entity\User;
use Entity\Block;

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
		$user->createUser("chien", "rufus", "chien@rufus.com", 1);
	}
	
	/**
	* @When I update a SU
	*/
	public function iUpdateASu() {
		$user = new User("chat", "felix");
		$user->updateUser("chien", "nawel", "heli", "nawel@heli", 2);
	}
	
	/**
	* @When I delete a SU
	*/
	public function iDeleteASu()
	{
		$user = new User("chat", "felix");
		$user->deleteUser("nawel");
	}
	
	/**
	* @When I create a block
	*/
	public function iCreateABlock()
	{
		$block = new Block();
		$block->createBlock("un_titre", 1, 3, "un_chemin");
	}

	/**
	* @When I update a block
	*/
	public function iUpdateABlock()
	{
		$block = new Block();
		$block->updateBlock(3, "lololo", 2, 2, "lalala");
	}

	/**
	* @When I delete a block
	*/
	public function iDeleteABlock()
	{
		$block = new Block();
		$block->deleteBlock(3);
	}

}

?>