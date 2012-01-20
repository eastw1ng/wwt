<?php
App::uses('AppModel', 'Model');
/**
 * Boeking Model
 *
 * @property Boeking $Boeking
 * @property Reis $Reis
 * @property Klant $Klant
 * @property Boeking $Boeking
 */
class Boeking extends AppModel {
    
//        private $id; //integer
//        private $datum;
//        private $annuleringDatum; 
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'boeking';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'boeking_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Boeking' => array(
			'className' => 'Boeking',
			'foreignKey' => 'boeking_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Reis' => array(
			'className' => 'Reis',
			'foreignKey' => 'reis_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Klant' => array(
			'className' => 'Klant',
			'foreignKey' => 'klant_id',
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
		'Boeking' => array(
			'className' => 'Boeking',
			'foreignKey' => 'boeking_id',
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
