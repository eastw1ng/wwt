<?php
/* TransportSoort Fixture generated on: 2012-01-17 14:13:06 : 1326805986 */

/**
 * TransportSoortFixture
 *
 */
class TransportSoortFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'transport_soort';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'transport_soort_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'naam' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'transport_soort_id', 'unique' => 1), 'c_transport_soort_uq_naam' => array('column' => 'naam', 'unique' => 1), 'ix_transport_soort_naam' => array('column' => 'naam', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'transport_soort_id' => 1,
			'naam' => 'Lorem ipsum dolor sit a'
		),
	);
}
