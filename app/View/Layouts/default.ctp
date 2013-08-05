<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset(); ?>
		<?= $this->fetch('meta'); ?>
		<?= $this->fetch('css'); ?>
		<?= $this->fetch('script'); ?>
		<?= $this->Html->css('default'); ?>
		<?= $this->Html->css($this->params['controller']); ?>
		<title>TyrannicalTaco's Server</title>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<img id="taco" src="/img/taco.png" alt="TyrannicalTaco's Server"></img>
			</div>
			<div id="content">
				<?= $this->Session->flash(); ?>
				<?= $this->fetch('content'); ?>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>
