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
                        <span class="frame_header">Mijn profiel</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid">
							<div class="form_container form_img_placement">
							
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Klant code</span>
									</div>
									<div class="form_content" style="padding-left:10px;">
										<span style="margin-left:12px;"><? echo $klant['Klant']['id']?></span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Voornaam</span>
									</div>
									<div class="form_content">
										<span style="margin-left:12px;"><? echo $klant['Klant']['voornaam']  ?></span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Achternaam</span>
									</div>
									<div class="form_content">
										<span style="margin-left:12px;"><? echo $klant['Klant']['achternaam']?></span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Adres</span>
									</div>
									<div class="form_content">
										<span style="margin-left:12px;"><? echo $klant['Klant']['adres']?></span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Woonplaats</span>
									</div>
									<div class="form_content">
										<span style="margin-left:12px;"><? echo $klant['Klant']['woonplaats']?></span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Postcode</span>
									</div>
									<div class="form_content">
										<span style="margin-left:12px;"><? echo $klant['Klant']['postcode']?></span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Gebruikersnaam</span>
									</div>
									<div class="form_content">
										<span style="margin-left:12px;"><? echo $klant['User']['username']?></span>
									</div>
									<div style="clear: both;"></div>
								</div>								
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
					<?php echo $isAdmin ? $this->element('admin_panel') : "" ; ?>
					  <?php echo $this->element('top_reizen',array('reizen'=>$this->requestAction(array('controller'=>'Reis', 'action'=>'topReizen')))); ?>
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