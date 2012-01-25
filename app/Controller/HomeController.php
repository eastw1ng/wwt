<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexController
 *
 * @author Edwin
 */
class HomeController extends AppController
{
    function index()
    {
		$this->loadModel('Reis');
		$reis = $this->Reis->findBookedReis;
		$this->set(array('reis'=>$reis));
		$this->render('index');
	}
}
?>
