<!--
REIZEN FORMULIER
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Formulier reizen</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid form_img_placement">
                            
							<?php echo $this->Form->create('Klant', array('action' => 'edit')); ?>
							<?php echo $this->Form->input('id', array('type' => 'hidden'));?>
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Klant code</span>
									</div>
									<div class="form_content">
										<? echo $klant['Klant']['id']?>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Voornaam</span>
									</div>
									<div class="form_content">
										<input name="data[Klant][voornaam]" id="KlantVoornaam" value="<? echo $klant['Klant']['voornaam']?>" class="global_input" style="width:200px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Achternaam</span>
									</div>
									<div class="form_content">
										<input name="data[Klant][achternaam]" id="KlantAchternaam" value="<? echo $klant['Klant']['achternaam']?>" class="global_input" style="width:300px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Adres</span>
									</div>
									<div class="form_content">
										<input name="data[Klant][adres]" id="KlantAdres" value="<? echo $klant['Klant']['adres']?>" class="global_input" style="width:300px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Postcode</span>
									</div>
									<div class="form_content">
										<input name="data[Klant][postcode]" id="KlantPostcode" value="<? echo $klant['Klant']['postcode']?>" class="global_input" style="width:75px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Plaats</span>
									</div>
									<div class="form_content">
										<input name="data[Klant][woonplaats]" id="KlantWoonplaats" value="<? echo $klant['Klant']['woonplaats']?>" class="global_input" style="width:300px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_content form_notes">
									* Verplicht in te vullen veld
								</div>
							</div>
							<div style="width:100%;text-align:right;">
								<input type="submit" value="Wijzigen"/>
								<button>Annuleren</button>
							</div>
							<?echo $this->Form->end();?>
							
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