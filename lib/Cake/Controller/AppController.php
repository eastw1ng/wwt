<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * This is a placeholder class.
 * Create the same file in app/Controller/AppController.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller {
    
	const AdminGroup = 1;
	
     public $components = array(
        'Acl',
        'Auth' => array(
            'authorize' => array(
                'Actions' => array('actionPath' => 'controllers')
            )
        ),
        'Session'
    );
    public $helpers = array('Html', 'Form', 'Session');

    public function beforeFilter() {
		
        //Configure AuthComponent
		//LinkController::test($this->Auth,$this->Acl);
         $this->Auth->deny('controllers');
         $this->Auth->allow('controllers/Home');
        // $this->Auth->allow('controllers/users','login');
        //var_dump($this->Auth->loggedIn());
         
         //dit zou zowiets moeten worden dat moet gast gezet worden
        $this->Auth->loginAction = array('controller' => 'home', 'action' => 'index');
        $this->Auth->logoutRedirect = array('controller' => 'home', 'action' => 'index');
        $this->Auth->loginRedirect = array('controller' => 'home', 'action' => 'index');
		
		$Group_id = $this->Auth->user('group_id');
		
		$admin = false;
		if($Group_id == self::AdminGroup){
			$admin = true;
		}

		$this->set('isLoggedIn', $this->Auth->loggedIn());
		$this->set("isAdmin" , $admin);
    }
    
    
}
