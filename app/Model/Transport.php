<?php
App::uses('AppModel', 'Model');

class Transport extends AppModel {

	public $useTable = 'transport';

	public $primaryKey = 'transport_id';

	public $displayField = 'vertrek_plaats';
/*
	public $hasOne = array(
		'Plaat' => array(
			'className' => 'Plaat',
			'foreignKey' => 'vertrek_plaats'
		),
		'TransportSoort' => array(
            'className' => 'TransportSoort',
            'foreignKey' => 'transport_soort_id'
        )
	);
*/
/*
	public $belongsTo = array(
		'TransportSoort' => array(
			'className' => 'TransportSoort',
			'foreignKey' => 'transport_soort_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
*/
 /*
	public $hasMany = array(
		'Rei' => array(
			'className' => 'Rei',
			'foreignKey' => 'transport_id',
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
*/

 /*
	public $hasAndBelongsToMany = array(
		'Soort' => array(
			'className' => 'Soort',
			'joinTable' => 'transport_soort',
			'foreignKey' => 'transport_id',
			'associationForeignKey' => 'soort_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
*/
}
