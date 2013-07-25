<?php
class UsersController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add', 'login', 'logout');
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
				$this->redirect(array('/'));
			} else {
				$this->Session->setFlash('Your user could not be registered.');
			}
		}
	}

	/*
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user.');
		}
		$this->set('user', $this->User->read(null, $id));
	}

	public function edit($id = null) {
		$this->User->id = $id;
		if(!$this->User->exists()) {
			throw new NotFoundException('Invalid user.');
		}
		if($this->request->is('post') || $this->request->is('put')) {
			if($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved.');
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
			unset($this->request->data['User']['password']);
		}
	}

	public function delete($id = null) {
		if(!$this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if(!$this->User->exists()) {
			throw new NotFoundException('Invalid user.');
		}
		if($this->User->delete()) {
			$this->Session->setFlash('The user has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash('The user could not be deleted.');
		$this->redirect(array('action' => 'index'));
	}
	*/
}
?>
