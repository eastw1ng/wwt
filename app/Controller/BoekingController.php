<?php
App::uses('AppController', 'Controller');
/**
 * Boeking Controller
 *
 * @property Boeking $Boeking
 */
class BoekingController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Boeking->recursive = 0;
		$this->set('boekings', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
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
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
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
