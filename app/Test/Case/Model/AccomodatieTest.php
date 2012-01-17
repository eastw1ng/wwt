<?php
/* Accomodatie Test cases generated on: 2012-01-17 13:50:39 : 1326804639*/
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
	public $fixtures = array('app.accomodatie', 'app.bestemming');

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
