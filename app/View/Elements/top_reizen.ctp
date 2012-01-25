<!-
To change this template, choose Tools | Templates
and open tTophe template in the editor.
-->
<?php $reizen = $this->requestAction('reis/index/sort:created/direction:asc/limit:5'); ?>

<?php foreach ($reizen as $reis): ?>
<div id="top_reizen" class="top_reizen_img">1</div>
<div id="top_reizen" class="top_reizen_top" >
	<div style="float:left;">
	<?php echo $reis['Rei']['vertrek_datum']; ?>
	</div>
	<div style="float:right;">
	v.a. <span style="color:#dba44d;"><b>&euro; 800</b></span>
	</div>
</div>
<div id="top_reizen" class="top_reizen_bot">Franse Alpen | St. Jean d'Arves</div>
<div id="spacer" style="clear: both;height:8px;"></div>
<?php endforeach; ?>

<div id="top_reizen" class="top_reizen_img">2</div>
<div id="top_reizen" class="top_reizen_top" >
	<div style="float:left;">
	Henkie Penkie
	</div>
	<div style="float:right;">
	v.a. <span style="color:#dba44d;"><b>&euro; 800</b></span>
	</div>
</div>
<div id="top_reizen" class="top_reizen_bot">Franse Alpen | St. Jean d'Arves</div>

<span style="font-size:7pt;"><?var_dump($reizen);?></span>