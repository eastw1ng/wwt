<?php
App::uses('AppController', 'Controller');
/**
 * Boeking Controller
 *
 * @property Boeking $Boeking
 */
class BoekingsController extends AppController {

	public $helpers = array('Html');
	
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
		$this->Boeking->recursive = 3;
		$this->set('boekings', $this->paginate('Boeking'));
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
		
		$this->set('reis', $reis);
		$this->set('accomodatie', $accomodatie);
		
		
		//$sqlstr = "SELECT accomodatie_prijs FROM accomodatie WHERE bestemming_id = "+$reis['Rei']['bestemming_id'];
		//$this->set('accomodatie', $this->Boeking->query($sqlstr));
		//$this->set('klant', $this->Boeking->query("SELECT voornaam,achternaam,id FROM klant"));
		//$this->set('reizen', $this->Boeking->query("SELECT r.id, b.alias FROM reis AS r JOIN bestemming AS b ON r.bestemming_id = b.id WHERE r.id = ".$id));
		//$this->set('klanten', $this->Boeking->query("SELECT voornaam,achternaam,id FROM klant"));

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
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Boeking->recursive = 0;
		$this->set('boekings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Boeking->id = $id;
		if (!$this->Boeking->exists()) {
			throw new NotFoundException(__('Invalid boeking'));
		}
		$this->set('boeking', $this->Boeking->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Boeking->create();
			if ($this->Boeking->save($this->request->data)) {
				$this->Session->setFlash(__('The boeking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boeking could not be saved. Please, try again.'));
			}
		}
		$reis = $this->Boeking->Rei->find('list');
		$klants = $this->Boeking->Klant->find('list');
		$this->set(compact('reis', 'klants'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Boeking->id = $id;
		if (!$this->Boeking->exists()) {
			throw new NotFoundException(__('Invalid boeking'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Boeking->save($this->request->data)) {
				$this->Session->setFlash(__('The boeking has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The boeking could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Boeking->read(null, $id);
		}
		$reis = $this->Boeking->Rei->find('list');
		$klants = $this->Boeking->Klant->find('list');
		$this->set(compact('reis', 'klants'));
	}

/**
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
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
