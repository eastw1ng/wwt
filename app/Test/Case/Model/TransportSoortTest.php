<?php
/* TransportSoort Test cases generated on: 2012-01-17 14:13:06 : 1326805986*/
App::uses('TransportSoort', 'Model');

/**
 * TransportSoort Test Case
 *
 */
class TransportSoortTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.transport_soort', 'app.transport', 'app.rei', 'app.reis', 'app.bestemming', 'app.plaats', 'app.accomodatie', 'app.soort');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->TransportSoort = ClassRegistry::init('TransportSoort');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TransportSoort);

		parent::tearDown();
	}

}
