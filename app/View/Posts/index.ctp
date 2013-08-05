<?= $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add'),  array('class' => 'button')); ?>
<div id="posts">
<? foreach($posts as $post): ?>
	<div class="post">
		<?= $this->Html->link($post['Post']['title'] . " - " . $post['User']['username'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']), array('class' => 'post_title')); ?>
		<div class="post_body"><?= nl2br($post['Post']['body']); ?></div>
	</div>
<? endforeach; ?>
<? unset($post); ?>
</div>
<p><?= $this->Paginator->numbers(); ?></p>
