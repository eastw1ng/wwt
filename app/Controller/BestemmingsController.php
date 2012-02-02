<?php
App::uses('AppController', 'Controller');
/**
 * Bestemming Controller
 *
 * @property Bestemming $Bestemming
 */
class BestemmingsController extends AppController {

	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'Bestemming.boek_datum' => 'asc'
		)
	);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bestemming->recursive = 2;
		$this->set('bestemmings', $this->paginate('Bestemming'));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Bestemming->id = $id;
		if (!$this->Bestemming->exists()) {
			throw new NotFoundException(__('Invalid bestemming'));
		}
		$this->set('bestemming', $this->Bestemming->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('plaatsen', $this->Bestemming->query("SELECT id, naam FROM plaats"));
		
		if ($this->request->is('post')) {
			$this->Bestemming->create();
			if ($this->Bestemming->save($this->request->data)) {
				$this->Session->setFlash(__('The bestemming has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bestemming could not be saved. Please, try again.'));
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
		$this->Bestemming->id = $id;
		$this->set('plaatsen', $this->Bestemming->query("SELECT id, naam FROM plaats"));
		$this->set('bestemming', $this->Bestemming->read(null, $id));
		if (!$this->Bestemming->exists()) {
			throw new NotFoundException(__('Invalid bestemming'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bestemming->save($this->request->data)) {
				$this->Session->setFlash(__('The bestemming has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bestemming could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bestemming->read(null, $id);
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
		$this->Bestemming->id = $id;
		if (!$this->Bestemming->exists()) {
			throw new NotFoundException(__('Invalid bestemming'));
		}
		if ($this->Bestemming->delete()) {
			$this->Session->setFlash(__('Bestemming deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bestemming was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Bestemming->recursive = 0;
		$this->set('bestemmings', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Bestemming->id = $id;
		if (!$this->Bestemming->exists()) {
			throw new NotFoundException(__('Invalid bestemming'));
		}
		$this->set('bestemming', $this->Bestemming->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Bestemming->create();
			if ($this->Bestemming->save($this->request->data)) {
				$this->Session->setFlash(__('The bestemming has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bestemming could not be saved. Please, try again.'));
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
		$this->Bestemming->id = $id;
		if (!$this->Bestemming->exists()) {
			throw new NotFoundException(__('Invalid bestemming'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Bestemming->save($this->request->data)) {
				$this->Session->setFlash(__('The bestemming has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bestemming could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Bestemming->read(null, $id);
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
		$this->Bestemming->id = $id;
		if (!$this->Bestemming->exists()) {
			throw new NotFoundException(__('Invalid bestemming'));
		}
		if ($this->Bestemming->delete()) {
			$this->Session->setFlash(__('Bestemming deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Bestemming was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
