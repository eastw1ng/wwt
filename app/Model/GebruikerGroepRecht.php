<?php
App::uses('AppModel', 'Model');
/**
 * GebruikerGroepRecht Model
 *
 * @property Recht $Recht
 */
class GebruikerGroepRecht extends AppModel 
{

	public $useTable = 'gebruiker_groep_recht';
	public $primaryKey = 'recht_id';
	public $belongsTo = array(
		'Recht' => array(
			'className' => 'Recht',
			'foreignKey' => 'recht_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public function id()
        {
            return primaryKey;
        }
        
        public function getFilter()
        {
            return belongsTo;
        }
}
