<?php
/* GebruikerGroepRolRecht Fixture generated on: 2012-01-17 14:05:58 : 1326805558 */

/**
 * GebruikerGroepRolRechtFixture
 *
 */
class GebruikerGroepRolRechtFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'gebruiker_groep_rol_recht';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'recht_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'rol_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('c_gebruiker_groep_rol_recht_uq_rol_id' => array('column' => 'rol_id', 'unique' => 1), 'c_gebruiker_rechten_fk_1_recht_id' => array('column' => 'recht_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'recht_id' => 1,
			'rol_id' => 1
		),
	);
}
