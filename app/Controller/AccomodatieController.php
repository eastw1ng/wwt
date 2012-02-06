<?php
App::uses('AppController', 'Controller');
/**
 * Accomodatie Controller
 *
 * @property Accomodatie $Accomodatie
 */
class AccomodatieController extends AppController {
    
    //public $uses = array('Accomodatie', 'bestemming', 'plaat', 'land');
    
	public $accesAccomodatie = false;
	
	public function beforeFilter() {
        parent::beforeFilter();
		$user = $this->Auth->user();
		if($this->Auth->loggedIn())
			$this->accesAccomodatie = $this->Acl->check(array('User' => array('id' => $user['id'])), 'Accomodatie');
    }
	
	public function checkAcces(){
		return $this->accesAccomodatie;
	}
	
    /**
     * index method
     *
     * @return void
     */
    public function index() {
        
        
            //$this->Accomodatie->recursive = 0;
            //$this->set('accomodaties', $this->paginate());

        //var_dump($this->Auth->user('role'));
        
        $data = $this->Accomodatie->find('all', array('recursive' => 3));
        $this->set('accomodaties',$data);
        
    }

    /**
     * view method
     *
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Accomodatie->id = $id;
        if (!$this->Accomodatie->exists()) {
                throw new NotFoundException(__('Invalid accomodatie'));
        }
        $this->set('accomodatie', $this->Accomodatie->read(null, $id));
    }

    /**
    * add method
    *
    * @return void
    */
    public function add() {
        if ($this->request->is('post')) {
            $this->Accomodatie->create();
            if ($this->Accomodatie->save($this->request->data)) {
                    $this->Session->setFlash(__('The accomodatie has been saved'));
                    $this->redirect(array('action' => 'index'));
            } else {
                    $this->Session->setFlash(__('The accomodatie could not be saved. Please, try again.'));
            }
        }
        $bestemmings = $this->Accomodatie->Bestemming->find('list');
        $this->set(compact('bestemmings'));
    }
    
    /**
    * edit method
    *
    * @param string $id
    * @return void
    */
    public function edit($id = null) {
        $this->Accomodatie->id = $id;
        if (!$this->Accomodatie->exists()) {
                throw new NotFoundException(__('Invalid accomodatie'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
                if ($this->Accomodatie->save($this->request->data)) {
                        $this->Session->setFlash(__('The accomodatie has been saved'));
                        $this->redirect(array('action' => 'index'));
                } else {
                        $this->Session->setFlash(__('The accomodatie could not be saved. Please, try again.'));
                }
        } else {
                $this->request->data = $this->Accomodatie->read(null, $id);
        }
        $bestemmings = $this->Accomodatie->Bestemming->find('list');
        $this->set(compact('bestemmings'));
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
        $this->Accomodatie->id = $id;
        if (!$this->Accomodatie->exists()) {
                throw new NotFoundException(__('Invalid accomodatie'));
        }
        if ($this->Accomodatie->delete()) {
                $this->Session->setFlash(__('Accomodatie deleted'));
                $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Accomodatie was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
  
}
