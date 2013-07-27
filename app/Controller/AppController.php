<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
	public $components = array(
		'Session',
		'Auth' => array(
			'loginRedirect' => '/',
			'logoutRedirect' => '/',
			'authorize' => array('Controller')
		)
	);

	public function isAuthorized($user) {
		if(isset($user['role']) && $user['role'] == 'admin') {
			return true;
		}
		return false;
	}

	public function beforeFilter() {
		$this->Auth->allow('index', 'view');
	}
}
