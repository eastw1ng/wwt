<?php
/* GebruikerKostenRegel Fixture generated on: 2012-01-17 14:07:06 : 1326805626 */

/**
 * GebruikerKostenRegelFixture
 *
 */
class GebruikerKostenRegelFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'gebruiker_kosten_regel';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'rol_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'korting_percentage' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 2, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'rol_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'rol_id' => 1,
			'korting_percentage' => 1
		),
	);
}
