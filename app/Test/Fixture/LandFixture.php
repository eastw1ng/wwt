<?php
/* Land Fixture generated on: 2012-01-17 14:09:18 : 1326805758 */

/**
 * LandFixture
 *
 */
class LandFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'land';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'land_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'naam' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'land_id', 'unique' => 1), 'c_landen_uq_naam' => array('column' => 'naam', 'unique' => 1), 'ix_landen_naam' => array('column' => 'naam', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'land_id' => 1,
			'naam' => 'Lorem ipsum dolor sit amet'
		),
	);
}
