<?php
App::uses('AppModel', 'Model');

class Land extends AppModel {

	public $useTable = 'land';

	public $primaryKey = 'land_id';

	public $displayField = 'naam';

/*
	public $hasMany = array(
		'Plaat' => array(
			'className' => 'Plaat',
			'foreignKey' => 'land_id',
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
	public $belongsTo = array(
        'Plaat' => array(
            'className'    => 'Plaat',
            'foreignKey'   => 'plaats_id'
        )
    );
*/

}
