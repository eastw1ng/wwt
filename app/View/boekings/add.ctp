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
                            
							<?php echo $this->Form->create(); ?>
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Reis code</span>
									</div>
									<div class="form_content">
										<select name="data[Boeking][reis_id]" id="BoekingReisId" class="global_select" style="width:auto;">
											<? foreach($reizen as $r):?>
											<option value="<?echo $r['r']['id']?>"><?echo $r['r']['id']." - ".$r['b']['alias']?></option>
											<? endforeach;?>
										</select>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Klant code</span>
									</div>
									<div class="form_content">
										<select name="data[Boeking][klant_id]" id="BoekingKlantId" class="global_select" style="width:auto;">
											<? foreach($klanten as $klant):?>
											<option value="<?echo $klant['klant']['id']?>"><?echo $klant['klant']['id']." - ".$klant['klant']['voornaam']." ".$klant['klant']['achternaam']?></option>
											<? endforeach;?>
										</select>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Boekingsdatum</span>
									</div>
									<div class="form_content">
										<input name="data[Boeking][boek_datum]" id="BoekingBoekDatum" class="global_input" style="width:100px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Annuleringsdatum</span>
									</div>
									<div class="form_content">
										<input name="data[Boeking][annulering_datum]" id="BoekingAnnuleringDatum" class="global_input" style="width:100px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Prijs per persoon</span>
									</div>
									<div class="form_content">
										<input name="data[Boeking][prijs]" id="BoekingPrijs" class="global_input" style="width:100px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Aantal personen</span>
									</div>
									<div class="form_content">
										<select name="data[Boeking][aantal_reizigers]" id="BoekingAantalReizigers" class="global_select" style="width:auto;">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
										</select>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_content form_notes">
									* Verplicht in te vullen veld
								</div>
							</div>
							<div style="width:100%;text-align:right;">
								<input type="submit" value="Toevoegen"/>
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
		<span style="display:none;"><?print_r($reizen)?></span>
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