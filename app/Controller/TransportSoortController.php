<?php
App::uses('AppController', 'Controller');
/**
 * TransportSoort Controller
 *
 * @property TransportSoort $TransportSoort
 */
class TransportSoortController extends AppController {

	public $accesTransportSoort = false;
	
	public function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->allow('login','logout');
		$user = $this->Auth->user();
		if($this->Auth->loggedIn())
			$this->accesTransportSoort = $this->Acl->check(array('User' => array('id' => $user['id'])), 'TransportSoort');
    }
	
	public function checkAcces(){
		return $this->accesTransportSoort;
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->TransportSoort->recursive = 0;
		$this->set('transportSoorts', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->TransportSoort->id = $id;
		if (!$this->TransportSoort->exists()) {
			throw new NotFoundException(__('Invalid transport soort'));
		}
		$this->set('transportSoort', $this->TransportSoort->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TransportSoort->create();
			if ($this->TransportSoort->save($this->request->data)) {
				$this->Session->setFlash(__('The transport soort has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport soort could not be saved. Please, try again.'));
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
		$this->TransportSoort->id = $id;
		if (!$this->TransportSoort->exists()) {
			throw new NotFoundException(__('Invalid transport soort'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TransportSoort->save($this->request->data)) {
				$this->Session->setFlash(__('The transport soort has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport soort could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->TransportSoort->read(null, $id);
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
		$this->TransportSoort->id = $id;
		if (!$this->TransportSoort->exists()) {
			throw new NotFoundException(__('Invalid transport soort'));
		}
		if ($this->TransportSoort->delete()) {
			$this->Session->setFlash(__('Transport soort deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Transport soort was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
