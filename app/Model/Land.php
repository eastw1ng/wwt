<?php
App::uses('AppModel', 'Model');

class Land extends AppModel {

	public $useTable = 'land';
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

	public $hasMany = array(
		'Plaat' => array(
			'className' => 'Plaat',
			'foreignKey' => 'land_id',
			'dependent' => false
		)
	);


/*
	public $belongsTo = array(
        'Plaat' => array(
            'className'    => 'Plaat',
            'foreignKey'   => 'plaats_id'
        )
    );
*/

}
