<?php
/* Bestemming Test cases generated on: 2012-01-17 13:59:00 : 1326805140*/
App::uses('Bestemming', 'Model');

/**
 * Bestemming Test Case
 *
 */
class BestemmingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.bestemming');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Bestemming = ClassRegistry::init('Bestemming');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bestemming);

		parent::tearDown();
	}

/**
 * testGetLand method
 *
 * @return void
 */
	public function testGetLand() {

	}

/**
 * testGetPlaat method
 *
 * @return void
 */
	public function testGetPlaat() {

	}

}
