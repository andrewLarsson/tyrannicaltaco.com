<div class="users_auth">
	<?= $this->Session->flash('Please log in.'); ?>
	<?= $this->Form->create('User'); ?>
	<fieldset>
		<legend>Login</legend>
		<?= $this->Form->input('username'); ?>
		<?= $this->Form->input('password'); ?>
	</fieldset>
	<?= $this->Form->end('Login'); ?>
</div>
