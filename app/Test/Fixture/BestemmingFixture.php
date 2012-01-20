<?php
/* Bestemming Fixture generated on: 2012-01-17 13:59:00 : 1326805140 */

/**
 * BestemmingFixture
 *
 */
class BestemmingFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'bestemming';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'bestemming_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'plaats_id' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'bestemming_id', 'unique' => 1), 'ix_bestemming_plaats_id' => array('column' => 'plaats_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'bestemming_id' => 1,
			'plaats_id' => 1
		),
	);
}
