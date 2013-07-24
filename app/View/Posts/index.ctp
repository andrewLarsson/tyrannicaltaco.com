<p><?= $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?></p>
<div id="posts">
<? foreach($posts as $post): ?>
	<div class="post">
		<div class="post_metadata">
			<p class="post_title"><?= $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?></p>
			<p class="post_modified"><?= $post['Post']['modified']; ?></p>
		</div>
	</div>
<? endforeach; ?>
<? unset($post); ?>
</div>
