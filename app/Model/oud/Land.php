<?php
App::uses('AppModel', 'Model');
/**
 * Land Model
 *
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
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'naam';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
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
