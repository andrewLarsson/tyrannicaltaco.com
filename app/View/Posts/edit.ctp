<div id="posts_edit">
	<?= $this->Form->create('Post'); ?>
	<fieldset>
		<legend>Edit</legend>
		<?= $this->Form->input('title'); ?>
		<?= $this->Form->input('body', array('rows' => '3')); ?>
		<?= $this->Form->input('id', array('type' => 'hidden')); ?>
		<?= $this->Form->end('Save Post'); ?>
	</fieldset>
</div>
