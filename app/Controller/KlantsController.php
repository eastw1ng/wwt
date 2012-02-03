<?php
App::uses('AppController', 'Controller');
/**
 * Klant Controller
 *
 * @property Klant $Klant
 */
class KlantsController extends AppController {

	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'Klant.achternaam' => 'asc'
		)
	);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Klant->recursive = 1;
		$this->set('klants', $this->paginate('Klant'));
	}
	
	
	public function myProfile(){
		
		//$user = $this->Auth->user();
		//$this->Klant->recursive = 1;
		//$myProfile = $this->Usetr->findById($user['id']);
		
		$this->set(array('myProfile' => $myProfile));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Klant->id = $id;
		if (!$this->Klant->exists()) {
			throw new NotFoundException(__('Invalid klant'));
		}
		$this->set('klant', $this->Klant->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {		
		if ($this->request->is('post')) {
			$this->Klant->create();
			if ($this->Klant->save($this->request->data)) {
				$this->Session->setFlash(__('The klant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The klant could not be saved. Please, try again.'));
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
		$this->Klant->id = $id;
		$this->set('klant', $this->Klant->read(null, $id));
		
		if (!$this->Klant->exists()) {
			throw new NotFoundException(__('Invalid klant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Klant->save($this->request->data)) {
				$this->Session->setFlash(__('The klant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The klant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Klant->read(null, $id);
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
		$this->Klant->id = $id;
		if (!$this->Klant->exists()) {
			throw new NotFoundException(__('Invalid klant'));
		}
		if ($this->Klant->delete()) {
			$this->Session->setFlash(__('Klant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Klant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Klant->recursive = 0;
		$this->set('klants', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Klant->id = $id;
		if (!$this->Klant->exists()) {
			throw new NotFoundException(__('Invalid klant'));
		}
		$this->set('klant', $this->Klant->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Klant->create();
			if ($this->Klant->save($this->request->data)) {
				$this->Session->setFlash(__('The klant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The klant could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Klant->id = $id;
		if (!$this->Klant->exists()) {
			throw new NotFoundException(__('Invalid klant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Klant->save($this->request->data)) {
				$this->Session->setFlash(__('The klant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The klant could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Klant->read(null, $id);
		}
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
		$this->Klant->id = $id;
		if (!$this->Klant->exists()) {
			throw new NotFoundException(__('Invalid klant'));
		}
		if ($this->Klant->delete()) {
			$this->Session->setFlash(__('Klant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Klant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
