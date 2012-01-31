<!--
REIZEN VIEW
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Reis: <? echo $reis['Rei']['id']?></span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">
                            						
							<div style="width:100%;float:left;margin-top:6px;">
								<div class="reizen_list_img" style="vertical-align:bottom;">
									<div class="reizen_list_admin">
										<img style="cursor:pointer;" src="img/admin_edit.png"/>
										<img style="cursor:pointer;" src="img/admin_delete.png"/>
									</div>
								</div>
								<div class="reizen_list_title">
									<span style="float:left;"><? echo $reis['Bestemming']['Plaat']['naam']?></span>
									<span style="float:right;">&euro; 180.- p.p.</span>
								</div>
								<div class="reizen_list_subtitle">
									<? echo $reis['Rei']['omschrijving']?>
								</div>
								<div class="reizen_list_body">
									Reiscode: <? echo $reis['Rei']['id']?>
									<br>
									Vertrekdatum: <? echo $reis['Rei']['vertrek_datum']?>
									<br>
									Terugkeerdatum: <? echo $reis['Rei']['terugkeer_datum']?>
								</div>
							</div>
							
							<div style="clear:both;"></div>
							<div class="reizen_separator_10"></div>
							
							<div class="reizen_list_content">
								Aantal beschikbare plaatsen: <? echo $reis['Transport']['aantal_plaats']?>
								<br>
								Soort transport: <? echo $reis['Transport']['transport_soort_id']?>
								<br>
								Land van bestemming: <? echo $reis['Bestemming']['Plaat']['Land']['naam']?>
								<br>
								Plaats van bestemming: <? echo $reis['Bestemming']['Plaat']['naam']?>
								<br>
								Accomodatie soort: <? echo $reis['Bestemming']['Accomodatie']['accomodatie_soort']?>
								<br>
								Accomodatie naam: <? echo $reis['Bestemming']['Accomodatie']['accomodatie_naam']?>
								<br>
								<span style="line-height:32px;">Omschrijving:</span>
							</div>
							<div class="reizen_list_buttons">
								<button>Reis boeken</button>
							</div>
							<div class="reizen_list_description">
								<? echo $reis['Rei']['beschrijving']?>
							</div>
							
							
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
					<?php echo $this->element('admin_panel'); ?>
					<?php echo $this->element('top_reizen'); ?>
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
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