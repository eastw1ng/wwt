<?php
/* Rei Fixture generated on: 2012-01-17 14:12:06 : 1326805926 */

/**
 * ReiFixture
 *
 */
class ReiFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'reis_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'vertrek_datum' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'terugkeer_datum' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'bestemming_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'transport_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'reis_id', 'unique' => 1), 'c_reis_fk_1_bestemming_id' => array('column' => 'bestemming_id', 'unique' => 0), 'c_reis_fk_2_transport_id' => array('column' => 'transport_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'reis_id' => 1,
			'vertrek_datum' => '2012-01-17',
			'terugkeer_datum' => '2012-01-17',
			'bestemming_id' => 1,
			'transport_id' => 1
		),
	);
}
