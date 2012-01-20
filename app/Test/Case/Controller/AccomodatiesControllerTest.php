<?php
/* Accomodaties Test cases generated on: 2012-01-17 13:51:41 : 1326804701*/
App::uses('AccomodatiesController', 'Controller');

/**
 * TestAccomodatiesController *
 */
class TestAccomodatiesController extends AccomodatiesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * AccomodatiesController Test Case
 *
 */
class AccomodatiesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.accomodaty');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Accomodaties = new TestAccomodatiesController();
		$this->Accomodaties->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accomodaties);

		parent::tearDown();
	}

}
