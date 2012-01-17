<?php
/* GebruikerRol Fixture generated on: 2012-01-17 14:07:44 : 1326805664 */

/**
 * GebruikerRolFixture
 *
 */
class GebruikerRolFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'gebruiker_rol';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'rol_id' => array('type' => 'float', 'null' => false, 'default' => '0', 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'naam' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'wachtwoord' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'rol_id', 'unique' => 1), 'ix_gebruiker_login_gegevens' => array('column' => array('naam', 'wachtwoord'), 'unique' => 0)),
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
			'naam' => 'Lorem ipsum dolor ',
			'wachtwoord' => 'Lorem ipsum dolor '
		),
	);
}
