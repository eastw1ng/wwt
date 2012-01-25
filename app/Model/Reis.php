<?php
App::uses('AppModel', 'Model');
/**
 * Reis Model
 *
 * @property Reis $Reis
 * @property Bestemming $Bestemming
 * @property Transport $Transport
 */
class Reis extends AppModel {
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
	
	public function findBookedReis(){
		
		$var = $this->find('all');
		var_dump($var);
		return $var;
	
	}
}
