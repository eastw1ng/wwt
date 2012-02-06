<div id="body_top">
	<div id="body_top_left">&nbsp;</div>
	<div id="body_top_mid">
		<div id="menu">
			<ul>
				
				<?
					//include_once('../controller/LinkController.php');
					App::import('Controller', 'Link');
					$LinkController = new LinkController();
					$LinkController->beforeFilter();
					//var_dump($LinkController->test());
					//exit;
				?>
				<li><?php echo $this->Html->link('Home', array('controller' => 'home'));?></li>
				<?php
				if($LinkController->accesReis)
					echo "<li>". $this->Html->link('Reizen', array('controller' => 'reis','action' => 'index')) ."</li>";
				if($LinkController->accesBoeking)
					echo "<li>". $this->Html->link('Boekingen', array('controller' => 'boekings','action' => 'index'))."</li>";
				if($LinkController->accesKlants)
					echo "<li>". $this->Html->link('Klanten', array('controller' => 'klants','action' => 'index'))."</li>";
				if($LinkController->accesBestemmings)
					echo "<li>". $this->Html->link('Bestemmingen', array('controller' => 'bestemmings','action' => 'index'))."</li>";
				if($LinkController->accesUsers)
					echo "<li>". $this->Html->link('Gebruikers', array('controller' => 'users','action' => 'index'))."</li>";
				?>
			</ul>
		</div>
	</div>
	<div id="body_top_right">&nbsp;</div>
</div>