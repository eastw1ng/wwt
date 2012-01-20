<?php
/* GebruikerGroepRolRecht Test cases generated on: 2012-01-17 14:05:58 : 1326805558*/
App::uses('GebruikerGroepRolRecht', 'Model');

/**
 * GebruikerGroepRolRecht Test Case
 *
 */
class GebruikerGroepRolRechtTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gebruiker_groep_rol_recht', 'app.recht', 'app.rol');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GebruikerGroepRolRecht = ClassRegistry::init('GebruikerGroepRolRecht');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GebruikerGroepRolRecht);

		parent::tearDown();
	}

}
