<?php
/* Plaat Test cases generated on: 2012-01-17 14:11:36 : 1326805896*/
App::uses('Plaat', 'Model');

/**
 * Plaat Test Case
 *
 */
class PlaatTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.plaat', 'app.plaats', 'app.land');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Plaat = ClassRegistry::init('Plaat');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Plaat);

		parent::tearDown();
	}

}
