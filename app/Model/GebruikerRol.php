<?php
App::uses('AppModel', 'Model');
/**
 * GebruikerRol Model
 *
 * @property Rol $Rol
 */
class GebruikerRol extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gebruiker_rol';
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
		'Rol' => array(
			'className' => 'Rol',
			'foreignKey' => 'rol_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
