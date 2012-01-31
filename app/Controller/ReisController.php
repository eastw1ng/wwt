<?php
App::uses('AppController', 'Controller');
/**
 * Reis Controller
 *
 * @property Rei $Rei
 */
class ReisController extends AppController {

	public $helpers = array('Html');
	
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
	public function index() {
		$this->Rei->recursive = 10;
		$this->set('reizen', $this->paginate('Rei'));
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
		$this->set('ts', $this->Rei->query("select * from transport_soort"));
		
	
		if ($this->request->is('post')) {
			$this->Rei->create();
			if ($this->Rei->save($this->request->data)) {
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
		$this->Rei->id = $id;
		if (!$this->Rei->exists()) {
			throw new NotFoundException(__('Invalid rei'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rei->save($this->request->data)) {
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
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Rei->recursive = 0;
		$this->set('reis', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Rei->id = $id;
		if (!$this->Rei->exists()) {
			throw new NotFoundException(__('Invalid rei'));
		}
		$this->set('rei', $this->Rei->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Rei->create();
			if ($this->Rei->save($this->request->data)) {
				$this->Session->setFlash(__('The rei has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rei could not be saved. Please, try again.'));
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
		$this->Rei->id = $id;
		if (!$this->Rei->exists()) {
			throw new NotFoundException(__('Invalid rei'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rei->save($this->request->data)) {
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
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
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
