<p><?= $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?></p>
<div id="posts">
<? foreach($posts as $post): ?>
	<div class="post">
		<p class="post_title"><?= $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></p>
	</div>
<? endforeach; ?>
<? unset($post); ?>
</div>
<p><?= $this->Paginator->numbers(); ?></p>
