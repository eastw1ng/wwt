<?php
/* Plaat Fixture generated on: 2012-01-17 14:11:36 : 1326805896 */

/**
 * PlaatFixture
 *
 */
class PlaatFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'plaats_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'naam' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'land_id' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'plaats_id', 'unique' => 1), 'c_plaats_uq_naam' => array('column' => 'naam', 'unique' => 1), 'ix_plaats_naam' => array('column' => 'naam', 'unique' => 0), 'ix_plaats_land_id' => array('column' => 'land_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'plaats_id' => 1,
			'naam' => 'Lorem ipsum dolor sit amet',
			'land_id' => 1
		),
	);
}
