<?php
App::uses('AppModel', 'Model');

class GebruikerRol extends AppModel 
{

	public $useTable = 'gebruiker_rol';
	public $primaryKey = 'rol_id';
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
