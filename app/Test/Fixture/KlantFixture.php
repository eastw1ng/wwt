<?php
/* Klant Fixture generated on: 2012-01-17 14:08:57 : 1326805737 */

/**
 * KlantFixture
 *
 */
class KlantFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'klant';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'klant_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'voornaam' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'achternaam' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'adres' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'woonplaats' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'postcode' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'rol_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'klant_id', 'unique' => 1), 'ix_klant_rol_id' => array('column' => 'rol_id', 'unique' => 0), 'ix_klant_naw' => array('column' => array('voornaam', 'achternaam', 'adres', 'woonplaats'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'klant_id' => 1,
			'voornaam' => 'Lorem ipsum dolor sit a',
			'achternaam' => 'Lorem ipsum dolor sit a',
			'adres' => 'Lorem ipsum dolor sit amet',
			'woonplaats' => 'Lorem ipsum dolor sit a',
			'postcode' => 'Lore',
			'rol_id' => 1
		),
	);
}
