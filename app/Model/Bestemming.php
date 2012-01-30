<?php
App::uses('AppModel', 'Model');
/**
 * Bestemming Model
 *
 * @property Accomodatie $Accomodatie
 */
class Bestemming extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'bestemming';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'bestemming_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Accomodatie' => array(
			'className' => 'Accomodatie',
			'foreignKey' => 'bestemming_id',
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
        
        public $hasOne = array(
            'Plaat' => array(
			'className' => 'Plaat',
			'foreignKey' => 'plaats_id',
                )
        );
        

}
