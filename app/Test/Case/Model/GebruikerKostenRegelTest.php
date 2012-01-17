<?php
/* GebruikerKostenRegel Test cases generated on: 2012-01-17 14:07:06 : 1326805626*/
App::uses('GebruikerKostenRegel', 'Model');

/**
 * GebruikerKostenRegel Test Case
 *
 */
class GebruikerKostenRegelTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.gebruiker_kosten_regel', 'app.rol');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->GebruikerKostenRegel = ClassRegistry::init('GebruikerKostenRegel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->GebruikerKostenRegel);

		parent::tearDown();
	}

}
