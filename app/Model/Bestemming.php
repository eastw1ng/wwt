<?php
App::uses('AppModel', 'Model');

class Bestemming extends AppModel {

	public $useTable = 'bestemming';

	public $primaryKey = 'bestemming_id';

	public $hasOne = array(
		'Plaat' => array(
			'className' => 'Plaat',
			'foreignKey' => 'plaats_id',
		)
	);
	
	/*
	public $belongsTo = array(
        'Accomodatie' => array(
            'className'    => 'Accomodatie',
            'foreignKey'   => 'accomodatie_id'
        )
    );*/
}
