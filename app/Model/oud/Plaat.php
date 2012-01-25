<?php
App::uses('AppModel', 'Model');
/**
 * Plaat Model
 *
 * @property Land $Land
 */
class Plaat extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'plaats_id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'naam';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Land' => array(
			'className' => 'Land',
			'foreignKey' => 'land_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
