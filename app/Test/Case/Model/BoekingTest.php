<?php
/* Boeking Test cases generated on: 2012-01-17 14:02:47 : 1326805367*/
App::uses('Boeking', 'Model');

/**
 * Boeking Test Case
 *
 */
class BoekingTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.boeking', 'app.reis', 'app.klant');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Boeking = ClassRegistry::init('Boeking');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Boeking);

		parent::tearDown();
	}

}
