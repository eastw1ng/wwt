<?php
App::uses('AppModel', 'Model');
/**
 * Rei Model
 *
 * @property Reis $Reis
 * @property Bestemming $Bestemming
 * @property Transport $Transport
 */
class Rei extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'reis_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Reis' => array(
			'className' => 'Reis',
			'foreignKey' => 'reis_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Bestemming' => array(
			'className' => 'Bestemming',
			'foreignKey' => 'bestemming_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Transport' => array(
			'className' => 'Transport',
			'foreignKey' => 'transport_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}