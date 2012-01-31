<?php
App::uses('AppModel', 'Model');

class TransportSoort extends AppModel {

	public $useTable = 'transport_soort';

	public $primaryKey = 'transport_soort_id';

	public $displayField = 'naam';

	/*
	public $hasMany = array(
		'Transport' => array(
			'className' => 'Transport',
			'foreignKey' => 'transport_soort_id',
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
	);*/

}
