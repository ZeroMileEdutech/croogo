<footer class="navbar-inverse">
	<div class="navbar-inner">

	<div class="footer-content">
	<?php
		$link = $this->Html->link(
			__d('croogo', 'TestKumbh'),
			'http://www.testkumbh.com'
		);
	?>
	<?php echo __d('croogo', 'Powered by %s', $link); ?>
	</div>

	</div>
</footer>