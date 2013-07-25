<div class="post">
	<div class="post_metadata">
		<p class="post_title"><?= $post['Post']['title'] ?></p>
		<p class="post_edit"><?= $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> <?= $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')); ?></p>
	</div>
	<div class="post_data">
		<p class="post_body"><?= $post['Post']['body'] ?></p>
	</div>
</div>
