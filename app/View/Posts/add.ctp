<div id="posts_add">
	<?= $this->Form->create('Post'); ?>
	<fieldset>
		<legend>Post</legend>
		<?= $this->Form->input('title'); ?>
		<?= $this->Form->input('body', array('rows' => '3')); ?>
		<?= $this->Form->end('Create Post'); ?>
	</fieldset>
</div>
