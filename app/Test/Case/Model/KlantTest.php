<?php
/* Klant Test cases generated on: 2012-01-17 14:08:57 : 1326805737*/
App::uses('Klant', 'Model');

/**
 * Klant Test Case
 *
 */
class KlantTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.klant', 'app.rol', 'app.boeking', 'app.reis');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Klant = ClassRegistry::init('Klant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Klant);

		parent::tearDown();
	}

}
