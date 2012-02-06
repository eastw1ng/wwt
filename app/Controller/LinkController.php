<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppController', 'Controller');
/**
 * Description of LinkController
 *
 * @author Tim
 */
class LinkController extends AppController{
	
	public	$loggedIn = false;
	public  $accesBoeking = false;
	public  $accesKlants = false;
	public  $accesTransport = false;
	public  $accesTransportSoort = false;
	public  $accesGroups = false;
	public  $accesUsers = false;
	public  $accesAccomodatie = false;
	public  $accesBestemmings = false;
	public  $accesLand = false;
	public  $accesReis = false;
	public  $accesPlaats = false;
	

	
  public function beforeFilter() {
		//$this->importControllers();
		//$this->loggedIn();
        //$this->accesBoeking = BoekingsController::checkAcces();
		//$this->accesKlants = KlantsController::checkAcces();
		//$this->accesTransport = TransportController::checkAcces();
		//$this->accesTransportSoort = TransportSoortController::checkAcces();
		//$this->accesGroups = GroupsController::checkAcces();
		//$this->accesUsers = UsersController::checkAcces();
		//$this->accesAccomodatie = AccomodatieController::checkAcces();
		//$this->accesBestemmings = BestemmingsController::checkAcces();
		//$this->accesLand = LandController::checkAcces();
		//$this->accesReis = ReisController::checkAcces();
		//$this->accesPlaats = PlaatsController::checkAcces();
			 
		//var_dump($this->accesReis);
		$user = null;
		if(isset($_SESSION['Auth']['User'])){
			$user = $_SESSION['Auth']['User'];
		}
		$this->manualCheckAcces($user);
    }
	
	public function importControllers(){
		$controllers = scandir('../Controller');
		foreach($controllers as $controller){
			if($controller != '.' || $controller != '..'){
				$name = explode('.',  $controller);
				if(isset($name['1']) && $name['1'] == 'php'){
					$cn = str_replace('Controller', '', $name[0]);
					App::import('Controller', $cn);
					$this->__set($cn, new $name[0]());
				}
			}
		}
	}
	
	public function loggedIn(){
		$this->loggedIn = $this->Auth->loggedIn();
	}
	
	/**
	 * because i couldn't get it dynamic
	 * 
	 */
	public function manualCheckAcces($user = null){
		if($user == null){
			$this->accesReis = true;
		} else {
			switch ($user['group_id']){
				case 1:
					$this->accesBoeking = true;
					$this->accesKlants = true;
					$this->accesUsers = true;
					$this->accesBestemmings = true;
					$this->accesReis = true;
				break;
				case 2:
					$this->accesBoeking = true;
					$this->accesReis = true;
				break;
				default:
					$this->accesReis = true;
				break;
			}
		}
	}
	
	
}

?>
