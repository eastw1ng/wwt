<?php
App::uses('AppModel', 'Model');

class Transport extends AppModel {

	public $useTable = 'transport';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'id';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'vertrek_plaats';


	public $belongsTo = array(
		'TransportSoort' => array(
			'className' => 'TransportSoort',
			'foreignKey' => 'transport_soort_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Plaat' => array(
			'className' => 'Plaat',
			'foreignKey' => 'vertrek_plaats',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

 
	public $hasMany = array(
		'Rei' => array(
			'className' => 'Rei',
			'foreignKey' => 'transport_id',
			'dependent' => false,
		)
	);

}
