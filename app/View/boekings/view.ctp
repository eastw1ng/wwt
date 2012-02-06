<!--
BOEKINGEN VIEW
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php //echo $this->element('main_menu',array("Auth" => $Auth, "Acl"=>$Acl)); ?>
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Boeking: <? echo $boeking['Boeking']['id']?></span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">
                            <?php
								if($Error === true ){
									echo $Message; 
								} else {
							?>						
							<div style="width:100%;float:left;margin-top:6px;">
								<div class="reizen_list_img" style="vertical-align:bottom;">
								</div>
								<div class="reizen_list_title">
									<span style="float:left;"><? echo $boeking['Rei']['Bestemming']['Plaat']['naam']?></span>
									<span style="float:right;">&euro; <? echo $boeking['Boeking']['prijs']?>.- p.p.</span>
								</div>
								<div class="reizen_list_body" style="margin-top:8px;">
									Reiscode: <? echo $boeking['Rei']['id']?>
									<br>
									Vertrekdatum: <? echo $boeking['Rei']['vertrek_datum']?>
									<br>
									Terugkeerdatum: <? echo $boeking['Rei']['terugkeer_datum']?>
									<br>
									Geboekte plaatsen: <? echo $boeking['Boeking']['aantal_reizigers']?>
								</div>
							</div>
							
							<div style="clear:both;"></div>
							<div class="reizen_separator_10"></div>
							
							<div class="reizen_list_content">
								Boekingsdatum: <? echo $boeking['Boeking']['boek_datum']?>
								<br>
								Soort transport: <? echo $boeking['Rei']['Transport']['TransportSoort']['naam']?>
								<br>
								Land van bestemming: <? echo $boeking['Rei']['Bestemming']['Plaat']['Land']['naam']?>
								<br>
								Plaats van bestemming: <? echo $boeking['Rei']['Bestemming']['Plaat']['naam']?>
								<br>
								Accomodatie soort: <? echo $boeking['Rei']['Bestemming']['Accomodatie']['accomodatie_soort']?>
								<br>
								Accomodatie naam: <? echo $boeking['Rei']['Bestemming']['Accomodatie']['accomodatie_naam']?>
								<br>
								<span style="line-height:32px;">Omschrijving:</span>
							</div>
							<div class="reizen_list_buttons" style="marign-right:8px;">
								<?php echo $this->Form->postLink( 
									'<button style="width:140px;">Factuur weergeven</button>',
									array('action' => 'factuur', $boeking['Boeking']['id']),
									array('escape' => false));
								?>
								<?php echo $this->Form->postLink( 
									'<button style="width:140px;margin-top:4px;">Reis annuleren</button>',
									array('action' => 'delete', $boeking['Boeking']['id']),
									array('escape' => false,'confirm' => 'Are you sure?'));
								?>
							
								
							</div>
							<div class="reizen_list_description">
								<? echo $boeking['Rei']['omschrijving']?>
							</div>
							<? } ?>
                        </div>
                    </div>
                    <div class="frame_left_bot_mid">
						&nbsp;
                    </div>
                    <div class="frame_left_bot_right">
                        &nbsp;
                    </div>
                </div>
                <div class="frame_right">
					<?php echo $isAdmin ? ""  : $this->element('admin_panel'); ?>
					  <?php echo $this->element('top_reizen',array('reizen'=>$this->requestAction(array('controller'=>'Reis', 'action'=>'topReizen')))); ?>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
		<span style="font-size:1px;"><?//print_r($boeking)?></span>
    </div>
    <div id="body_bot">
        <div id="body_bot_left">&nbsp;</div>
        <div id="body_bot_mid">
            &nbsp;
        </div>
        <div id="body_bot_right">&nbsp;</div>
    </div>
	<?php echo $this->element('main_footer'); ?>
</div>