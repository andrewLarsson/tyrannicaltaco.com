<?php
class UsersController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('login', 'logout', 'add');
	}

	public function login() {
		if($this->request->is('post')) {
			if($this->Auth->login()) {
				$this->Session->setFlash('Welcome, ' . $this->Auth->user('username') . '!');
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash('Invalid username or password.');
			}
		}
	}

	public function logout() {
		$this->redirect($this->Auth->logout());
	}

	public function add() {
		if($this->request->is('post')) {
			$this->User->create();
			if($this->User->save($this->request->data)) {
				$this->Auth->login();
				$this->Session->setFlash('Your user has been registered.');
				$this->redirect('/');
			} else {
				$this->Session->setFlash('Your user could not be registered.');
			}
		}
	}
}
