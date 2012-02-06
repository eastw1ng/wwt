<div id="frame_two" style="float:right;margin-top:5px;">
	<div class="frame_right_top_left">
		&nbsp;
	</div>
	<div class="frame_right_top_mid">
		<span class="frame_header">Top reizen</span>
	</div>
	<div class="frame_right_mid_left">
		<div class="frame_right_mid_mid">
			<?
			foreach($reizen as $reis):
			?>
			<div id="top_reizen" class="top_reizen_img">1</div>
			<div id="top_reizen" class="top_reizen_top" >
				<div style="float:left;">
				<? echo $reis['Bestemming']['Accomodatie']['accomodatie_naam']?>
				</div>
				<div style="float:right;">
				v.a. <span style="color:#dba44d;"><b>&euro; <? echo ReisController::calcPrice($reis['Bestemming']['Accomodatie']['accomodatie_prijs'], $reis['Transport']['prijs'])?></b></span>
				</div>
			</div>
			<div id="top_reizen" class="top_reizen_bot"> <? echo $reis['Bestemming']['Plaat']['naam'] ." | ". $reis['Transport']['TransportSoort']['naam'] ?></div>
			
			<div id="spacer" style="clear: both;height:8px;"></div>
			<?
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