<?php
App::uses('AppController', 'Controller');
/**
 * Reis Controller
 *
 * @property Rei $Rei
 */
class ReisController extends AppController {

	public $helpers = array('Html');
	
	public $accesReis = false;
	public $components = array('Acl','Auth','Session');
	
	public function beforeFilter() {
        parent::beforeFilter();
		//App::import('Controller', 'LinkController');
		$this->Auth->allow(array('index','view','topReizen','calcPrice'));
		$user = $this->Auth->user();
		if($this->Auth->loggedIn())
			$this->accesReis = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Reis');
		
    }
	
	public function checkAcces(){
//		if($this->Auth->loggedIn())
//			$this->accesReis = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Reis');
		
		return $this->accesReis;
	}
	
	var $paginate = array(
		'limit' => 3,
		'order' => array(
			'Accomodatie.Bestemming.Plaat.naam' => 'asc'
		)
	);
/**
 * inde method
 *
 * @return void
 */

	public function topReizen(){
		$topreisids = $this->Rei->query("SELECT id  FROM `boeking` group by reis_id LIMIT 0 ,3");
		
		foreach($topreisids as $id){
			$ids[] = $id['boeking']['id'];
		}
		$this->Rei->recursive = 2;
		$reizen = $this->Rei->find('all', array('conditions' => array('Rei.id'=> $ids )));

		return $reizen;
	}
	
	public function index() {
		$this->set('bestemmingen', $this->Rei->query("select alias, id from bestemming"));
		$this->Rei->recursive = 4;
		
		$vars = $this->params['url'];
		$cond1 = '';
		$cond2 = '';
		$cond3 = '';
		$cond4 = '';
		
		if(isset($vars['s1'])){
			$cond1 = array('Bestemming.id' => $vars['s1']);
		}
		if(isset($vars['s2'])){
			$cond2 = array('Rei.vertrek_datum' => $vars['s2']);
		}
		if(isset($vars['s3'])){
			$result = array();
			
			foreach($this->Rei->find('all') as $reis){
				if($reis['Transport']['prijs'] + $reis['Bestemming']['Accomodatie']['accomodatie_prijs'] < $vars['s3']){
					array_push($result, $reis['Rei']['id']);
				}
			}
			
			$cond3 = array('Rei.id' => $result);
		}
		
		$this->set('reizen', $this->paginate('Rei', array($cond1,$cond2,$cond3)));
		
		//Nieuwe link genereren als paginate werkt

		//$this->set('getv', $getv);
	}
	
	public function calcPrice($accomodatiePrijs = 0, $transportPrijs = 0 , $marge = 20 ){
		$prijsZMarge = $accomodatiePrijs + $transportPrijs;
		return round($prijsZMarge + (($prijsZMarge / 100) * 20));
	}
/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rei->recursive = 10;
		$this->Rei->id = $id;
		if (!$this->Rei->exists()) {
			throw new NotFoundException(__('Invalid rei'));
		}
		$this->set('reis', $this->Rei->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('bestemmingen', $this->Rei->query("select alias, id from bestemming"));
		$this->set('ts', $this->Rei->query("SELECT t.id, ts.naam FROM transport AS t JOIN transport_soort AS ts ON t.transport_soort_id = ts.id"));
	
		if ($this->request->is('post')) {
			$this->Rei->create();
			$data = $this->request->data;
			$data['Rei']['vertrek_datum'] = date("Y-m-d" ,strtotime($data['Rei']['vertrek_datum']));
			$data['Rei']['terugkeer_datum'] = date("Y-m-d" ,strtotime($data['Rei']['terugkeer_datum']));
			if ($this->Rei->save($data)) {
				$this->Session->setFlash(__('The rei has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rei could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('bestemmingen', $this->Rei->query("select alias, id from bestemming"));
		$this->set('ts', $this->Rei->query("SELECT t.id, ts.naam FROM transport AS t JOIN transport_soort AS ts ON t.transport_soort_id = ts.id"));
		$this->set('reis', $this->Rei->read(null, $id));
		
		$this->Rei->id = $id;
		if (!$this->Rei->exists()) {
			throw new NotFoundException(__('Invalid rei'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$data = $this->request->data;
			$data['Rei']['vertrek_datum'] = date("Y-m-d" ,strtotime($data['Rei']['vertrek_datum']));
			$data['Rei']['terugkeer_datum'] = date("Y-m-d" ,strtotime($data['Rei']['terugkeer_datum']));
			if ($this->Rei->save($data)) {
				$this->Session->setFlash(__('The rei has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rei could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rei->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Rei->id = $id;
		if (!$this->Rei->exists()) {
			throw new NotFoundException(__('Invalid rei'));
		}
		if ($this->Rei->delete()) {
			$this->Session->setFlash(__('Rei deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rei was not deleted'));
		$this->redirect(array('action' => 'index'));
	}


}
