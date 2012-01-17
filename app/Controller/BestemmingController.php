<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BestemmingController
 *
 * @author Edwin
 */
class BestemmingController extends AppController
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
