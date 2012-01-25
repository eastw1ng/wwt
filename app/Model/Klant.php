<?php
App::uses('AppModel', 'Model');
/**
 * Klant Model
 *
 * @property Klant $Klant
 * @property Rol $Rol
 * @property Boeking $Boeking
 * @property Klant $Klant
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
	public $primaryKey = 'klant_id';

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
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

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
		),
		'Klant' => array(
			'className' => 'Klant',
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

}
