<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author Edwin
 */
class LoginController extends AppController
{

    function index() 
    {
        
    }
    
    public function view($id)
    {
        $this->set('id', $id);
    }

}
?>
