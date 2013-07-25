<?php
class Post extends AppModel {
	public $belongsTo = 'User';
	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty'
		),
		'body' => array(
			'rule' => 'notEmpty'
		)
	);

	public function isOwnedBy($post_id, $user_id) {
		return $this->field('id', array('id' => $post_id, 'user_id' => $user_id)) === $post_id;
	}
}
?>
