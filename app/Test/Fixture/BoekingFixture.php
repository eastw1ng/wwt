<?php
/* Boeking Fixture generated on: 2012-01-17 14:02:47 : 1326805367 */

/**
 * BoekingFixture
 *
 */
class BoekingFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'boeking';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'boeking_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'boek_datum' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'annulering_datum' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'aantal_reizigers' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 4, 'collate' => NULL, 'comment' => ''),
		'reis_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'klant_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'boeking_id', 'unique' => 1), 'ix_boeking_reis_id' => array('column' => 'reis_id', 'unique' => 0), 'ix_boeking_klant_id' => array('column' => 'klant_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'boeking_id' => 1,
			'boek_datum' => '2012-01-17',
			'annulering_datum' => '2012-01-17',
			'aantal_reizigers' => 1,
			'reis_id' => 1,
			'klant_id' => 1
		),
	);
}
