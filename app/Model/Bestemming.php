<?php
App::uses('AppModel', 'Model');

class Bestemming extends AppModel {

	public $useTable = 'bestemming';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasOne = array(
		'Accomodatie' => array(
			'className' => 'Accomodatie',
			'foreignKey' => 'bestemming_id',
			'dependent' => false
		)
	);
        
	public $belongsTo = array(
		'Plaat' => array(
		'className' => 'Plaat',
		'foreignKey' => 'plaats_id',
		)
	);
        

}
