<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of authentiecatie
 *
 * @author Edwin
 */
class authentiecatie extends AuthComponent 
{
    public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
        }
    }
}
}

?>
