<div class="users_add">
	<?= $this->Form->create('User'); ?>
	<fieldset>
		<legend>Registration</legend>
		<?= $this->Form->input('username'); ?>
		<?= $this->Form->input('password'); ?>
		<?= $this->Form->input('role', array('options' => array('author' => 'Author'))); ?>
	</fieldset>
	<?= $this->Form->end('Create User'); ?>
</div>
