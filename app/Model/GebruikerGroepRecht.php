<?php
App::uses('AppModel', 'Model');
/**
 * GebruikerGroepRecht Model
 *
 * @property Recht $Recht
 */
class GebruikerGroepRecht extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gebruiker_groep_recht';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'recht_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Recht' => array(
			'className' => 'Recht',
			'foreignKey' => 'recht_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
