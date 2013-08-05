<div class="post">
	<div class="post_metadata">
		<p class="post_title"><?= $post['Post']['title']; ?></p>
		<p class="post_author"><?= $post['User']['username']; ?></p>
		<p class="post_date"><?= $post['Post']['modified']; ?></p>
	<? if($is_owner || $is_admin): ?>
		<div class="post_edit"><?= $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?> <?= $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']), array('confirm' => 'Are you sure?')); ?></div>
	<? endif; ?>
	</div>
	<div class="post_data">
		<div class="post_body"><?= nl2br($post['Post']['body']); ?></div>
	</div>
</div>
