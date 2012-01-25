<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GebruikerController
 *
 * @author Edwin
 */
class GebruikerController extends AppController
{
    function index()
    {
        $gebruikers= $this->paginate();
		if (isset($this->params['requested'])) {
				return $gebruikers;
		} else {
				$this->set('gebruikers', $gebruikers);
		}
    }
}

?>
