<div id="body_top">
	<div id="body_top_left">&nbsp;</div>
	<div id="body_top_mid">
		<div id="menu">
			<ul>
				<li><?php
				echo $this->Html->link('View image', array(
					'controller' => 'images',
					'action' => 'view',
					1,
					'?' => array('height' => 400, 'width' => 500))
				);
				<a href="<?php echo $this->Html->css('style')?>">Home</a></li>
				<li><a href="reis">Reizen</a></li>
				<li><a href="boeking">Boekingen</a></li>
				<li><a href="#">Klanten</a></li>
				<li><a href="#">Bestemmingen</a></li>
				<li><a href="#">Gebruikers</a></li>
			</ul>
		</div>
	</div>
	<div id="body_top_right">&nbsp;</div>
</div>