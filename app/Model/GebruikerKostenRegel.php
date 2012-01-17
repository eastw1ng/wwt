<?php
App::uses('AppModel', 'Model');
/**
 * GebruikerKostenRegel Model
 *
 * @property Rol $Rol
 */
class GebruikerKostenRegel extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'gebruiker_kosten_regel';
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
