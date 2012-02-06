<?php
App::uses('AppController', 'Controller');
/**
 * Boeking Controller
 *
 * @property Boeking $Boeking
 */
class BoekingsController extends AppController {

	public $helpers = array('Html');
	public $accesBoeking = false;
	
	public function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->allow('calcPrice');
		$user = $this->Auth->user();
		//var_dump($this->accesBoeking = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Boekings/book'));
		//exit;
		
		if($this->Auth->loggedIn())
			$this->accesBoeking = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Boekings');
    }
	
	public function checkAcces(){
		return $this->accesBoeking;
	}
	
	var $paginate = array(
		'limit' => 3,
		'order' => array(
			'Boeking.boek_datum' => 'asc'
		)
	);
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->Acl->check();
		
		$user = $this->Auth->user();
		$this->Boeking->recursive = 2;
		/* TODO if admin then all boekingen 
		 * kan eventueel nog niet afgesproken
		 */
		$klant = $this->Boeking->Klant->User->findById($user['id']);
		$klantCond = null;
		if($user['group_id'] != 1){
			$klantCond = array('Boeking.klant_id'=>$klant['Klant']['id']);
		}
		$this->Boeking->recursive = 3;

		$vars = $this->params['url'];
		$cond1 = '';
		$cond2 = '';
		$cond3 = '';
		$cond4 = '';
		
		if(isset($vars['s2'])){
			$cond1 = array('Boeking.reis_id' => $vars['s2']);
		}
		if(isset($vars['s3'])){
			$cond2 = array('Boeking.id' => $vars['s3']);
		}
		
		$this->set('boekings', $this->paginate('Boeking', array($klantCond,$cond2,$cond3)));
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
		
		$this->Boeking->recursive = 4;
		$this->Boeking->id = $id;
		$boeking = $this->Boeking->read(null, $id);
		$user = $this->Auth->user();
		
		if($boeking['Klant']['User']['id'] != $user['id'] && $user['group_id'] != 1 ){
			$Message = 'NIET JOU BOEKING VRIEND';
			$this->set(array('Error'=> true,'Message'=>$Message));
			$this->render('view');
		}
		if (!$this->Boeking->exists()) {
			throw new NotFoundException(__('Invalid boeking'));
		}
		$this->set('boeking', $boeking);
		$this->set('Error', false);
	}
	
	public function factuur($id = null) {
		$this->Boeking->recursive = 4;
		$this->Boeking->id = $id;
		if (!$this->Boeking->exists()) {
			throw new NotFoundException(__('Invalid boeking'));
		}
		$this->set('boeking', $this->Boeking->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('reizen', $this->Boeking->query("SELECT r.id, b.alias FROM reis AS r JOIN bestemming AS b ON r.bestemming_id = b.id"));
		$this->set('klanten', $this->Boeking->query("SELECT voornaam,achternaam,id FROM klant"));
	
		if ($this->request->is('post')) {
			$this->Boeking->create();
			$data = $this->request->data;
			$data['Boeking']['boek_datum'] = date("Y-m-d" ,strtotime($data['Boeking']['boek_datum']));
			$data['Boeking']['annulering_datum'] = date("Y-m-d" ,strtotime($data['Boeking']['annulering_datum']));
			if ($this->Boeking->save($data)) {
				$this->Session->setFlash(__('The boeking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boeking could not be saved. Please, try again.'));
			}
		}
		//$reis = $this->Boeking->Rei->find('list');
		//$klants = $this->Boeking->Klant->find('list');
		//$this->set(compact('reis', 'klants'));
	}

	public function book($id = null) {
		$this->Boeking->recursive = 4;
		$reis = $this->Boeking->Rei->findById($id);
		$accomodatie = $this->Boeking->Rei->Bestemming->Accomodatie->findById($reis['Rei']['bestemming_id']);
		
		$klant = $this->requestAction(array('controller'=>'Klants', 'action'=>'getKlantInfo'));
		
		$this->set('reis', $reis);
		$this->set('accomodatie', $accomodatie);
		$this->set('klant', $klant);
		
		if ($this->request->is('post')) {
			$this->Boeking->create();
			$data = $this->request->data;
			$data['Boeking']['boek_datum'] = date("Y-m-d" ,strtotime($data['Boeking']['boek_datum']));
			$data['Boeking']['annulering_datum'] = date("Y-m-d" ,strtotime($data['Boeking']['annulering_datum']));
			if ($this->Boeking->save($data)) {
				$this->Session->setFlash(__('The boeking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boeking could not be saved. Please, try again.'));
			}
		}
		//$reis = $this->Boeking->Rei->find('list');
		//$klants = $this->Boeking->Klant->find('list');
		//$this->set(compact('reis', 'klants'));
	}

	
/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->set('boeking', $this->Boeking->read(null, $id));
		$this->set('reizen', $this->Boeking->query("SELECT r.id, b.alias FROM reis AS r JOIN bestemming AS b ON r.bestemming_id = b.id"));
		$this->set('klanten', $this->Boeking->query("SELECT voornaam,achternaam,id FROM klant"));
		
		$this->Boeking->id = $id;
		if (!$this->Boeking->exists()) {
			throw new NotFoundException(__('Invalid boeking'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$data = $this->request->data;
			$data['Boeking']['boek_datum'] = date("Y-m-d" ,strtotime($data['Boeking']['boek_datum']));
			$data['Boeking']['annulering_datum'] = date("Y-m-d" ,strtotime($data['Boeking']['annulering_datum']));
			if ($this->Boeking->save($data)) {
				$this->Session->setFlash(__('The boeking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boeking could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Boeking->read(null, $id);
		}
		//$reis = $this->Boeking->Rei->find('list');
		//$klants = $this->Boeking->Klant->find('list');
		//$this->set(compact('reis', 'klants'));
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
		$this->Boeking->id = $id;
		if (!$this->Boeking->exists()) {
			throw new NotFoundException(__('Invalid boeking'));
		}
		if ($this->Boeking->delete()) {
			$this->Session->setFlash(__('Boeking deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Boeking was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
