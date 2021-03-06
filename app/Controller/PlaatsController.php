<?php
App::uses('AppController', 'Controller');
/**
 * Plaats Controller
 *
 * @property Plaat $Plaat
 */
class PlaatsController extends AppController {


	public $accesPlaats = false;
	
	public function beforeFilter() {
        parent::beforeFilter();
		$user = $this->Auth->user();
		if($this->Auth->loggedIn())
			$this->accesPlaats = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Plaats');
    }
	
	public function checkAcces(){
		return $this->accesPlaats;
	}
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Plaat->recursive = 0;
		$this->set('plaats', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Plaat->id = $id;
		if (!$this->Plaat->exists()) {
			throw new NotFoundException(__('Invalid plaat'));
		}
		$this->set('plaat', $this->Plaat->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plaat->create();
			if ($this->Plaat->save($this->request->data)) {
				$this->Session->setFlash(__('The plaat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plaat could not be saved. Please, try again.'));
			}
		}
		$lands = $this->Plaat->Land->find('list');
		$this->set(compact('lands'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Plaat->id = $id;
		if (!$this->Plaat->exists()) {
			throw new NotFoundException(__('Invalid plaat'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Plaat->save($this->request->data)) {
				$this->Session->setFlash(__('The plaat has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plaat could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Plaat->read(null, $id);
		}
		$lands = $this->Plaat->Land->find('list');
		$this->set(compact('lands'));
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
		$this->Plaat->id = $id;
		if (!$this->Plaat->exists()) {
			throw new NotFoundException(__('Invalid plaat'));
		}
		if ($this->Plaat->delete()) {
			$this->Session->setFlash(__('Plaat deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Plaat was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
