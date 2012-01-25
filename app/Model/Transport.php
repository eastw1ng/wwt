<?php
App::uses('AppModel', 'Model');
/**
 * Transport Model
 *
 * @property TransportSoort $TransportSoort
 * @property Rei $Rei
 * @property Soort $Soort
 */
class Transport extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'transport';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'transport_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'vertrek_plaats';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TransportSoort' => array(
			'className' => 'TransportSoort',
			'foreignKey' => 'transport_soort_id',
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
		'Rei' => array(
			'className' => 'Rei',
			'foreignKey' => 'transport_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Soort' => array(
			'className' => 'Soort',
			'joinTable' => 'transport_soort',
			'foreignKey' => 'transport_id',
			'associationForeignKey' => 'soort_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
