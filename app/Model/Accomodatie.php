<?php
App::uses('AppModel', 'Model');
/**
 * Accomodatie Model
 *
 * @property Bestemming $Bestemming
 */
class Accomodatie extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'accomodatie';
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
	//public $displayField = 'accomodatie_soort';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $hasOne = array(
		'Bestemming' => array(
			'className' => 'Bestemming',
			'foreignKey' => 'bestemming_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
