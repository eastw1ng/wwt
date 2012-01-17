<?php
/* GebruikerGroepRecht Test cases generated on: 2012-01-17 14:05:05 : 1326805505*/
App::uses('GebruikerGroepRecht', 'Model');

/**
 * GebruikerGroepRecht Test Case
 *
 */
class GebruikerGroepRechtTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gebruiker_groep_recht', 'app.recht');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GebruikerGroepRecht = ClassRegistry::init('GebruikerGroepRecht');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GebruikerGroepRecht);

		parent::tearDown();
	}

}
