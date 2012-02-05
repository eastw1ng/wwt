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
                $rows = $this->Rei->find('all');
                
                $UberJSString = "['Bestemming', 'prijs', 'transport', 'vertrek datum', 'terugkom datum'],";                                      
                foreach($rows as $row){
                    $UberJSString .= sprintf("['%s','%s','%s','%s','%s'],",$row['Bestemming']['Plaat']['naam'],
                                        $this->calcPrice($row['Bestemming']['Accomodatie']['accomodatie_prijs'],$row['Transport']['prijs']),
                                        $row['Transport']['TransportSoort']['naam'],
                                        $row['Rei']['vertrek_datum'],
                                        $row['Rei']['terugkeer_datum']);
                }
				
				$this->set( array ( 
					'reizen'=> $this->paginate('Rei'),
					'googleString' => $UberJSString
				));
 * @return void
 */
	public function index() {
		$this->set('bestemmingen', $this->Rei->query("select alias, id from bestemming"));
		$this->Rei->recursive = 4;
		
		$vars = $this->params['url'];
		$cond1 = '';
		$cond2 = '';
		$cond3 = '';
		$cond4 = '';
		
		if(isset($vars['s1'])){
			$cond1 = array('Bestemming.id' => $vars['s1']);
		}
		if(isset($vars['s2'])){
			$cond2 = array('Rei.vertrek_datum' => $vars['s2']);
		}
		if(isset($vars['s3'])){
			$result = array();
			
			foreach($this->Rei->find('all') as $reis){
				if($reis['Transport']['prijs'] + $reis['Bestemming']['Accomodatie']['accomodatie_prijs'] < $vars['s3']){
					array_push($result, $reis['Rei']['id']);
				}
			}
			
			$cond3 = array('Rei.id' => $result);
		}
		
		$this->set('reizen', $this->paginate('Rei', array($cond1,$cond2,$cond3)));
		
		//Nieuwe link genereren als paginate werkt

		//$this->set('getv', $getv);
	}
	
	public function calcPrice($accomodatiePrijs = 0, $transportPrijs = 0 , $marge = 20 ){
		$prijsZMarge = $accomodatiePrijs + $transportPrijs;
		return round($prijsZMarge + (($prijsZMarge / 100) * 20));
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
		$this->set('ts', $this->Rei->query("SELECT t.id, ts.naam FROM transport AS t JOIN transport_soort AS ts ON t.transport_soort_id = ts.id"));
	
		if ($this->request->is('post')) {
			$this->Rei->create();
			$data = $this->request->data;
			$data['Rei']['vertrek_datum'] = date("Y-m-d" ,strtotime($data['Rei']['vertrek_datum']));
			$data['Rei']['terugkeer_datum'] = date("Y-m-d" ,strtotime($data['Rei']['terugkeer_datum']));
			if ($this->Rei->save($data)) {
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
		$this->set('bestemmingen', $this->Rei->query("select alias, id from bestemming"));
		$this->set('ts', $this->Rei->query("SELECT t.id, ts.naam FROM transport AS t JOIN transport_soort AS ts ON t.transport_soort_id = ts.id"));
		$this->set('reis', $this->Rei->read(null, $id));
		
		$this->Rei->id = $id;
		if (!$this->Rei->exists()) {
			throw new NotFoundException(__('Invalid rei'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$data = $this->request->data;
			$data['Rei']['vertrek_datum'] = date("Y-m-d" ,strtotime($data['Rei']['vertrek_datum']));
			$data['Rei']['terugkeer_datum'] = date("Y-m-d" ,strtotime($data['Rei']['terugkeer_datum']));
			if ($this->Rei->save($data)) {
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
