<?php
/* Transport Test cases generated on: 2012-01-17 14:12:44 : 1326805964*/
App::uses('Transport', 'Model');

/**
 * Transport Test Case
 *
 */
class TransportTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.transport', 'app.transport_soort', 'app.rei', 'app.reis', 'app.bestemming', 'app.plaats', 'app.accomodatie', 'app.soort');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Transport = ClassRegistry::init('Transport');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Transport);

		parent::tearDown();
	}

}
