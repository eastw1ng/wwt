<?php
App::uses('AppModel', 'Model');
/**
 * Rei Model
 *
 * @property q $
 * @property Transport $Transport
 */
class Rei extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'reis_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'vertrek_datum';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'' => array(
			'className' => 'q',
			'foreignKey' => 'transport_id',
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
 /*
	public $hasMany = array(
		'Transport' => array(
			'className' => 'Transport',
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
*/
}
