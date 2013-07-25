<!DOCTYPE html>
<html>
	<head>
		<?= $this->Html->charset(); ?>
		<title>TyrannicalTaco's Server</title>
			<?= $this->fetch('meta'); ?>
			<?= $this->fetch('css'); ?>
			<?= $this->fetch('script'); ?>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<img id="taco" src="/img/taco.png" alt="TyrannicalTaco's Server"></img>
			</div>
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>
