<div class="users_auth">
	<?= $this->Session->flash('Please log in.'); ?>
	<?= $this->Form->create('User'); ?>
	<fieldset>
		<legend>Login</legend>
		<?= $this->Form->input('username'); ?>
		<?= $this->Form->input('password'); ?>
		<?= $this->Form->end('Login'); ?>
	</fieldset>
	<p>Need an account? <?= $this->Html->link('Register here.', array('controller' => 'users', 'action' => 'add')); ?></p>
</div>
