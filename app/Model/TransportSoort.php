<?php
App::uses('AppModel', 'Model');
/**
 * TransportSoort Model
 *
 * @property TransportSoort $TransportSoort
 * @property Transport $Transport
 * @property TransportSoort $TransportSoort
 */
class TransportSoort extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'transport_soort';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'transport_soort_id';

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
		'Transport' => array(
			'className' => 'Transport',
			'foreignKey' => 'transport_soort_id',
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
		'TransportSoort' => array(
			'className' => 'TransportSoort',
			'foreignKey' => 'transport_soort_id',
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
