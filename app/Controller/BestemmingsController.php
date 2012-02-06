<?php
App::uses('AppController', 'Controller');
/**
 * Bestemming Controller
 *
 * @property Bestemming $Bestemming
 */
class BestemmingsController extends AppController {

	public $accesBestemming = false;
	
	public function beforeFilter() {
        parent::beforeFilter();
		$user = $this->Auth->user();
		if($this->Auth->loggedIn())
			$this->accesBestemming = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Bestemmings');
    }
	
	public function checkAcces(){
		return $this->accesBestemming;
	}
	
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
		$this->set('landen', $this->Bestemming->query("SELECT naam, id FROM land"));
		//$this->set('bestemmings', $this->paginate('Bestemming'));
		
		$vars = $this->params['url'];
		$cond1 = '';
		$cond2 = '';
		$cond3 = '';
		$cond4 = '';
		
		if(isset($vars['s1'])){
			$cond1 = array('Bestemming.id' => $vars['s1']);
		}
		if(isset($vars['s2'])){
			$cond1 = array('Plaat.land_id' => $vars['s2']);
		}
		if(isset($vars['s3'])){
			$cond2 = array('Plaat.naam LIKE' => "%".$vars['s3']."%");
		}
		if(isset($vars['s4'])){
			$cond1 = array('Accomodatie.accomodatie_naam LIKE' => "%".$vars['s4']."%");
		}
		
		$this->set('bestemmings', $this->paginate('Bestemming', array($cond1,$cond2,$cond3,$cond4)));
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

}
