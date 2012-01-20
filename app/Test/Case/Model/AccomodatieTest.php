<?php
/* Accomodatie Test cases generated on: 2012-01-17 14:03:21 : 1326805401*/
App::uses('Accomodatie', 'Model');

/**
 * Accomodatie Test Case
 *
 */
class AccomodatieTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.accomodatie', 'app.bestemming', 'app.test');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Accomodatie = ClassRegistry::init('Accomodatie');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accomodatie);

		parent::tearDown();
	}

}
