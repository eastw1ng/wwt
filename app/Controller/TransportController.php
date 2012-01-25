<?php
App::uses('AppController', 'Controller');
/**
 * Transport Controller
 *
 * @property Transport $Transport
 */
class TransportController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Transport->recursive = 0;
		$this->set('transports', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		$this->set('transport', $this->Transport->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Transport->create();
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		}
		$transportSoorts = $this->Transport->TransportSoort->find('list');
		$soorts = $this->Transport->Soort->find('list');
		$this->set(compact('transportSoorts', 'soorts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Transport->read(null, $id);
		}
		$transportSoorts = $this->Transport->TransportSoort->find('list');
		$soorts = $this->Transport->Soort->find('list');
		$this->set(compact('transportSoorts', 'soorts'));
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
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		if ($this->Transport->delete()) {
			$this->Session->setFlash(__('Transport deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Transport was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Transport->recursive = 0;
		$this->set('transports', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		$this->set('transport', $this->Transport->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Transport->create();
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		}
		$transportSoorts = $this->Transport->TransportSoort->find('list');
		$soorts = $this->Transport->Soort->find('list');
		$this->set(compact('transportSoorts', 'soorts'));
	}

/**
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Transport->save($this->request->data)) {
				$this->Session->setFlash(__('The transport has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The transport could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Transport->read(null, $id);
		}
		$transportSoorts = $this->Transport->TransportSoort->find('list');
		$soorts = $this->Transport->Soort->find('list');
		$this->set(compact('transportSoorts', 'soorts'));
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
		$this->Transport->id = $id;
		if (!$this->Transport->exists()) {
			throw new NotFoundException(__('Invalid transport'));
		}
		if ($this->Transport->delete()) {
			$this->Session->setFlash(__('Transport deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Transport was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
