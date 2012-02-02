<?php
App::uses('AppModel', 'Model');
/**
 * Klant Model
 *
 * @property Boeking $Boeking
 */
class Klant extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'klant';
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
	public $displayField = 'voornaam';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Boeking' => array(
			'className' => 'Boeking',
			'foreignKey' => 'klant_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	public $belongsTo = array (
		'Users' => array (
			'className' => 'Users',
			'foreignKey' => 'id'
		)
	);

}
