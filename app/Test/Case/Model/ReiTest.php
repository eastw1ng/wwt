<?php
/* Rei Test cases generated on: 2012-01-17 14:12:06 : 1326805926*/
App::uses('Rei', 'Model');

/**
 * Rei Test Case
 *
 */
class ReiTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.rei', 'app.reis', 'app.bestemming', 'app.plaats', 'app.accomodatie', 'app.transport');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Rei = ClassRegistry::init('Rei');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Rei);

		parent::tearDown();
	}

}
