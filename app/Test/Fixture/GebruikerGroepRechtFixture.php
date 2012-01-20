<?php
/* GebruikerGroepRecht Fixture generated on: 2012-01-17 14:05:05 : 1326805505 */

/**
 * GebruikerGroepRechtFixture
 *
 */
class GebruikerGroepRechtFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'gebruiker_groep_recht';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'recht_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'filter' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'recht_id', 'unique' => 1), 'ix_gebruiker_groep_recht_id' => array('column' => 'recht_id', 'unique' => 0)),
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
			'filter' => 'Lorem ipsum dolor sit amet'
		),
	);
}
