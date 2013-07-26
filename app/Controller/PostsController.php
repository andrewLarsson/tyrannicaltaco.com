<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Paginator', 'Session');
	public $components = array('Paginator', 'Session');
	public $paginate = array(
		'limit' => 25,
		'order' => array(
			'Post.id' => 'desc'
		)
	);

	function beforeFilter() {
		parent::beforeFilter();
		$this->set('is_admin', (
			($this->Auth->user('role') == 'admin')
				? true
				: false
			)
		);
	}

	public function isAuthorized($user) {
		if($this->action == 'add') {
			if($this->Auth->user('role') == 'author') {
				return true;
			}
		}
		if(in_array($this->action, array('edit', 'delete'))) {
			if($this->Post->isOwnedBy($this->request->params['pass'][0], $user['id'])) {
				return true;
			}
		}
		return parent::isAuthorized($user);
	}

	public function index() {
		$this->set('posts', $this->paginate());
	}

	public function view($id = null) {
		if(!$id) {
			throw new NotFoundException('Invalid post.');
		}
		$post = $this->Post->findById($id);
		if(!$post) {
			throw new NotFoundException('Invalid post.');
		}
		$this->set('is_owner', (
			($this->Post->isOwnedBy($id, $this->Auth->user('id')))
				? true
				: false
			)
		);
		$this->set('post', $post);
	}

	public function add() {
		if($this->request->is('post')) {
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
			$this->Post->create();
			if($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been created.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Your post could not be created.');
			}
		}
	}

	public function edit($id = null) {
		if(!$id) {
			throw new NotFoundException('Invalid post.');
		}
		$post = $this->Post->findById($id);
		if(!$post) {
			throw new NotFoundException('Invalid post.');
		}
		if($this->request->is('post') || $this->request->is('put')) {
			$this->Post->id = $id;
			if($this->Post->save($this->request->data)) {
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Your post could not be updated.');
			}
		}
		if(!$this->request->data) {
			$this->request->data = $post;
		}
	}

	public function delete($id) {
		if($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if($this->Post->delete($id)) {
			$this->Session->setFlash('Your post has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
}
?>
