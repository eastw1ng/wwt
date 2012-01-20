<?php
/* Transport Fixture generated on: 2012-01-17 14:12:44 : 1326805964 */

/**
 * TransportFixture
 *
 */
class TransportFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'transport';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'transport_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'vertrek_plaats' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'aantal_plaats' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 4, 'collate' => NULL, 'comment' => ''),
		'prijs' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2', 'collate' => NULL, 'comment' => ''),
		'transport_soort_id' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'transport_id', 'unique' => 1), 'ix_transport_soort_id' => array('column' => 'transport_soort_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'transport_id' => 1,
			'vertrek_plaats' => 'Lorem ipsum dolor sit amet',
			'aantal_plaats' => 1,
			'prijs' => 1,
			'transport_soort_id' => 1
		),
	);
}
