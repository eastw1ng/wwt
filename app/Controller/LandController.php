<?php
App::uses('AppController', 'Controller');
/**
 * Land Controller
 *
 * @property Land $Land
 */
class LandController extends AppController {


	public $accesLand = false;
	
	public function beforeFilter() {
        parent::beforeFilter();
		$user = $this->Auth->user();
		if($this->Auth->loggedIn())
			$this->accesLand = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Land');
    }
	
	public function checkAcces(){
		return $this->accesLand;
	}
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Land->recursive = 0;
		$this->set('lands', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Land->id = $id;
		if (!$this->Land->exists()) {
			throw new NotFoundException(__('Invalid land'));
		}
		$this->set('land', $this->Land->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Land->create();
			if ($this->Land->save($this->request->data)) {
				$this->Session->setFlash(__('The land has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The land could not be saved. Please, try again.'));
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
		$this->Land->id = $id;
		if (!$this->Land->exists()) {
			throw new NotFoundException(__('Invalid land'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Land->save($this->request->data)) {
				$this->Session->setFlash(__('The land has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The land could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Land->read(null, $id);
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
		$this->Land->id = $id;
		if (!$this->Land->exists()) {
			throw new NotFoundException(__('Invalid land'));
		}
		if ($this->Land->delete()) {
			$this->Session->setFlash(__('Land deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Land was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
