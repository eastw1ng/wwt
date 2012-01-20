<?php
/* Accomodatie Fixture generated on: 2012-01-17 14:03:06 : 1326805386 */

/**
 * AccomodatieFixture
 *
 */
class AccomodatieFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'accomodatie';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'accomodatie_soort' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'accomodatie_naam' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'accomodatie_prijs' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '5,2', 'collate' => NULL, 'comment' => ''),
		'bestemming_id' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('ix_accomodatie_soort' => array('column' => 'accomodatie_soort', 'unique' => 0), 'ix_accomodatie_bestemming_id' => array('column' => 'bestemming_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'accomodatie_soort' => 'Lorem ipsum dolor sit a',
			'accomodatie_naam' => 'Lorem ipsum dolor sit amet',
			'accomodatie_prijs' => 1,
			'bestemming_id' => 1
		),
	);
}
