<div id="frame_two" style="float:right;">
	<div class="frame_right_top_left">
		&nbsp;
	</div>
	<div class="frame_right_top_mid">
		<span class="frame_header">Top reizen</span>
	</div>
	<div class="frame_right_mid_left">
		<div class="frame_right_mid_mid">
			<?
			$counter = 1;
			foreach($reizen as $reis):
			?>
			<div id="spacer" style="clear: both;height:6px;font-size:0px;"></div>
			
			<div id="top_reizen" class="top_reizen_img"><?echo $counter?></div>
			<div id="top_reizen" class="top_reizen_top" >
				<div style="float:left;">
				<? echo $reis['Bestemming']['Plaat']['naam']?>
				</div>
				<div style="float:right;">
				v.a. <span style="color:#dba44d;"><b>&euro; <? echo ReisController::calcPrice($reis['Bestemming']['Accomodatie']['accomodatie_prijs'], $reis['Transport']['prijs'])?></b></span>
				</div>
			</div>
			<div id="top_reizen" class="top_reizen_bot"> <? echo $reis['Bestemming']['alias'] ." | ". $reis['Transport']['TransportSoort']['naam'] ?></div>
			
			<div id="spacer" style="clear: both;height:6px;font-size:0px;"></div>
			<?
			$counter++;
			endforeach;
			?>

		</div>
	</div>
	<div class="frame_right_bot_left">
		&nbsp;
	</div>
	<div class="frame_right_bot_mid">
		&nbsp;
	</div>
</div>