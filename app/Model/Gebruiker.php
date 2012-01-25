<?php
// app/Model/User.php
App::uses('AuthComponent', 'Controller/Component');
class Gebruiker extends AppModel {
	public function beforeSave() {
		if (isset($this->data[$this->alias]['password'])) {
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
		}
		return true;
	}
}