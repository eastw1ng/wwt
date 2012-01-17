<?php
App::uses('AppModel', 'Model');
/**
 * Plaat Model
 *
 * @property Plaats $Plaats
 * @property Land $Land
 */
class Plaat extends AppModel {
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'plaats_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Plaats' => array(
			'className' => 'Plaats',
			'foreignKey' => 'plaats_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Land' => array(
			'className' => 'Land',
			'foreignKey' => 'land_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
