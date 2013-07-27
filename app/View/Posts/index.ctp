<?= $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add'),  array('class' => 'button')); ?>
<div id="posts">
<? foreach($posts as $post): ?>
	<div class="post">
		<?= $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id']), array('class' => 'post_title')); ?>
		<p class="post_body"><?= $post['Post']['body']; ?></p>
	</div>
<? endforeach; ?>
<? unset($post); ?>
</div>
<p><?= $this->Paginator->numbers(); ?></p>
