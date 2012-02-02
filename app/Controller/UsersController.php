<?php
/**
 * Description of UsersController
 *
 * @author Tim
 */
class UsersController extends AppController {
    
    //var $name = 'Users';
    //var $components = array('Auth'); // Not necessary if declared in your app controller
    
	var $paginate = array(
		'limit' => 10,
		'order' => array(
			'User.achternaam' => 'asc'
		)
	);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 1;
		$this->set('users', $this->paginate('User'));
	}
	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('klanten', $this->User->query("SELECT voornaam, achternaam, id FROM klant"));
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		$this->User->id = $id;
		$this->set('user', $this->User->read(null, $id));
		$this->set('klanten', $this->User->query("SELECT voornaam, achternaam, id FROM klant"));
		
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
/**
* The AuthComponent provides the needed functionality
* for login, so you can leave this function blank.
*/
    //function login() {
    //}
    
    //function logout() {
    //$this->redirect($this->Auth->logout());
    //}
   
}
?>
