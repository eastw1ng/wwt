<?php
App::uses('AppModel', 'Model');
/**
 * Rei Model
 *
 * @property q $
 * @property Transport $Transport
 */
class Rei extends AppModel {

	public $useTable = 'reis';
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
	public $displayField = 'vertrek_datum';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bestemming' => array(
			'className' => 'Bestemming',
			'foreignKey' => 'bestemming_id',
		),
		'Transport' => array(
			'className' => 'Transport',
			'foreignKey' => 'transport_id',
		)
	);

}
