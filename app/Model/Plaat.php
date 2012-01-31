<?php
App::uses('AppModel', 'Model');

class Plaat extends AppModel {
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
	public $displayField = 'naam';

	public $belongsTo = array(
		'Land' => array(
			'className' => 'Land',
			'foreignKey' => 'land_id'
		)
	);
	/*
	public $hasMany = array(
        'Bestemming' => array(
            'className'    => 'Bestemming',
            'foreignKey'   => 'plaat_id'
        )
    );
	 * 
	 */
}
