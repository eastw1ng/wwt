<?php
App::uses('AppController', 'Controller');
/**
 * TransportSoort Controller
 *
 * @property TransportSoort $TransportSoort
 */
class TransportSoortController extends AppController {


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
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->TransportSoort->recursive = 0;
		$this->set('transportSoorts', $this->paginate());
	}

/**
 * admin_view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->TransportSoort->id = $id;
		if (!$this->TransportSoort->exists()) {
			throw new NotFoundException(__('Invalid transport soort'));
		}
		$this->set('transportSoort', $this->TransportSoort->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
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
 * admin_edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
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
 * admin_delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
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
