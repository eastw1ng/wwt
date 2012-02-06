<?php
App::uses('AppController', 'Controller');
/**
 * Klant Controller
 *
 * @property Klant $Klant
 */
class KlantsController extends AppController {

	
	public $accesKlants = false;
	
	public function beforeFilter() {
        parent::beforeFilter();
		$this->Auth->allow('login','logout');
		$user = $this->Auth->user();
		if($this->Auth->loggedIn())
			$this->accesKlants = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Klants');
    }
	
	public function checkAcces(){
		return $this->accesKlants;
	}
	
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
		//$this->set('klants', $this->paginate('Klant'));

		$vars = $this->params['url'];
		$cond1 = '';
		$cond2 = '';
		$cond3 = '';
		$cond4 = '';
		
		if(isset($vars['s1'])){
			$cond1 = array('Klant.id' => $vars['s1']);
		}
		if(isset($vars['s2'])){
			$cond1 = array('Klant.voornaam LIKE' => "%".$vars['s2']."%");
		}
		if(isset($vars['s3'])){
			$cond2 = array('Klant.achternaam LIKE' => "%".$vars['s3']."%");
		}
		if(isset($vars['s4'])){
			$cond1 = array('Klant.adres LIKE' => "%".$vars['s4']."%");
		}
		
		$this->set('klants', $this->paginate('Klant', array($cond1,$cond2,$cond3,$cond4)));
	}
	
	
	public function myProfile(){
		$user = $this->Auth->user();
		$this->Klant->recursive = 1;
		$myProfile = $this->Klant->User->findById($user['id']);
		
		$this->set(array('klant' => $myProfile));
	}
	
	public function getKlantInfo($id = null){
		if($id == null){
			$id = $this->Auth->user('klant_id');
		}
		return $this->Klant->findById($id);
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
			$data = $this->request->data;
			if ($this->Klant->save($data)) {
				$data['User']['created'] = date("Y-m-d H:i:s");
				$data['User']['modified'] = date("Y-m-d H:i:s");
				$data['User']['group_id'] = 2;
				$data['User']['klant_id'] = $this->Klant->getLastInsertID();
				if($this->Klant->User->save($data)){
					$this->Session->setFlash(__('The klant has been saved and a user has been created'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The klant has been saved BUT A USER HAS NOT BEEN CREATED'));
					$this->redirect(array('action' => 'index'));
				}
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

}
