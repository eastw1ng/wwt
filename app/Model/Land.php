<?php
App::uses('AppModel', 'Model');
/**
 * Land Model
 *
 * @property Land $Land
 * @property Land $Land
 * @property Plaat $Plaat
 */
class Land extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'land';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'land_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Land' => array(
			'className' => 'Land',
			'foreignKey' => 'land_id',
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
		'Land' => array(
			'className' => 'Land',
			'foreignKey' => 'land_id',
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
		'Plaat' => array(
			'className' => 'Plaat',
			'foreignKey' => 'land_id',
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
