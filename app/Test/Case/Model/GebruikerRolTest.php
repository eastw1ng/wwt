<?php
/* GebruikerRol Test cases generated on: 2012-01-20 13:48:48 : 1327063728*/
App::uses('GebruikerRol', 'Model');

/**
 * GebruikerRol Test Case
 *
 */
class GebruikerRolTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gebruiker_rol', 'app.rol');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GebruikerRol = ClassRegistry::init('GebruikerRol');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GebruikerRol);

		parent::tearDown();
	}

}
