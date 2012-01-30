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
	public $hasOne = array(
		'Accomodatie' => array(
			'className' => 'Accomodatie',
			'foreignKey' => 'accomodatie_id'
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
			'foreignKey' => 'transport_id',
			'dependent' => true
		)
	);
}
