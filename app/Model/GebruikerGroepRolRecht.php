<?php
App::uses('AppModel', 'Model');
/**
 * GebruikerGroepRolRecht Model
 *
 * @property Recht $Recht
 * @property Rol $Rol
 */
class GebruikerGroepRolRecht extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gebruiker_groep_rol_recht';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'rol_id';

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
		),
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
