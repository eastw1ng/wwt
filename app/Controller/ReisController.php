<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReisController
 *
 * @author Edwin
 */
class ReisController extends AppController
{
	function index() {
		$reizen = $this->paginate();
		if (isset($this->params['requested'])) {
				return $reizen;
		} else {
				$this->set('reizen', $reizen);
		}
	}
}

?>
