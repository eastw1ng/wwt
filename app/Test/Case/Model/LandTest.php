<?php
/* Land Test cases generated on: 2012-01-17 14:09:18 : 1326805758*/
App::uses('Land', 'Model');

/**
 * Land Test Case
 *
 */
class LandTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.land', 'app.plaat');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Land = ClassRegistry::init('Land');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Land);

		parent::tearDown();
	}

}
