<?php
App::uses('AppModel', 'Model');
/**
 * Boeking Model
 *
 * @property Reis $Reis
 * @property Klant $Klant
 */
class Boeking extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'boeking';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'boek_datum';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Klant' => array(
			'className' => 'Klant',
			'foreignKey' => 'klant_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Rei' => array(
			'className' => 'Rei',
			'foreignKey' => 'reis_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
