<?php
App::uses('AppModel', 'Model');

class Plaat extends AppModel {

	public $primaryKey = 'plaats_id';

	public $displayField = 'naam';

	public $hasOne = array(
		'Land' => array(
			'className' => 'Land',
			'foreignKey' => 'land_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	/*
	public $belongsTo = array(
        'Bestemming' => array(
            'className'    => 'Bestemming',
            'foreignKey'   => 'bestemming_id'
        )
    );*/
}
