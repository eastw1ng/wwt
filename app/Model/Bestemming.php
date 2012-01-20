<?php
App::uses('AppModel', 'Model');
/**
 * Bestemming Model
 *
 * @property Bestemming $Bestemming
 * @property Plaats $Plaats
 * @property Accomodatie $Accomodatie
 * @property Bestemming $Bestemming
 * @property Rei $Reis
 */
class Bestemming extends AppModel {
    
//        private $id; //integer
//        private $land; //BestemmingLand
//       private $plaats; //BestemmingLandPlaats
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'bestemming';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'bestemming_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Bestemming' => array(
			'className' => 'Bestemming',
			'foreignKey' => 'bestemming_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Plaats' => array(
			'className' => 'Plaats',
			'foreignKey' => 'plaats_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Accomodatie' => array(
			'className' => 'Accomodatie',
			'foreignKey' => 'bestemming_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Bestemming' => array(
			'className' => 'Bestemming',
			'foreignKey' => 'bestemming_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Reis' => array(
			'className' => 'Reis',
			'foreignKey' => 'bestemming_id',
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
        
/*        
        public function getID()
        {
            return id;
        }
        
        public function getLand()
        {
            return land;
        }
        
        public function getPlaats()
        {
            return plaats;
        }
*/
        public function getAccomodatie(){
           return $this->Accomodatie->find('all');
        }
}
