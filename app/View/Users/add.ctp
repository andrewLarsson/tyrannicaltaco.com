<div class="users_add">
	<?= $this->Form->create('User'); ?>
	<fieldset>
		<legend>Registration</legend>
		<?= $this->Form->input('username'); ?>
		<?= $this->Form->input('password'); ?>
		<?= $this->Form->input('role', array('type' => 'hidden', 'value' => 'author'))); ?>
		<?= $this->Form->end('Register'); ?>
	</fieldset>
</div>
