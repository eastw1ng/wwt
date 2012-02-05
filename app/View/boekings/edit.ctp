<!--
BOEKINGEN FORMULIER
-->
<?php echo $this->element('main_header'); ?>
<div id="body">
    <?php echo $this->element('main_menu'); ?>
    <div id="body_mid_left">
        <div id="body_mid_right">
            <div id="body_mid_mid">
                <div class="frame_left">
                    <div class="frame_left_top_mid">
                        <span class="frame_header">Formulier boekingen</span>
                    </div>
                    <div class="frame_left_top_right">
                        &nbsp;
                    </div>
                    <div class="frame_left_mid_right">
                        <div class="frame_left_mid_mid form_img_placement">
                            
							<?php echo $this->Form->create('Boeking', array('action' => 'edit')); ?>
							<?php echo $this->Form->input('id', array('type' => 'hidden'));?>
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Reis code</span>
									</div>
									<div class="form_content">
										<select name="data[Boeking][reis_id]" id="BoekingReisId" class="global_select" style="width:auto;">
											<? foreach($reizen as $r):?>
											<option value="<?echo $r['r']['id']?>" <?if($boeking['Boeking']['reis_id'] == $r['r']['id']){echo 'selected';};?>>
												<?echo $r['r']['id']." - ".$r['b']['alias']?>
											</option>
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
											<option value="<?echo $klant['klant']['id']?>" <?if($boeking['Boeking']['klant_id'] == $klant['klant']['id']){echo 'selected';};?>>
												<?echo $klant['klant']['id']." - ".$klant['klant']['voornaam']." ".$klant['klant']['achternaam']?>
											</option>
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
										<input name="data[Boeking][boek_datum]" id="BoekingBoekDatum" value="<? echo $boeking['Boeking']['boek_datum']?>" class="global_input" style="width:100px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Annuleringsdatum</span>
									</div>
									<div class="form_content">
										<input name="data[Boeking][annulering_datum]" id="BoekingAnnuleringDatum" value="<? echo $boeking['Boeking']['annulering_datum']?>" class="global_input" style="width:100px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Prijs per persoon</span>
									</div>
									<div class="form_content">
										<input name="data[Boeking][prijs]" id="BoekingPrijs" value="<? echo $boeking['Boeking']['prijs']?>" class="global_input" style="width:100px;" type="text"/>
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
											<option value="1" <?if($boeking['Boeking']['aantal_reizigers'] == 1){echo 'selected';}?>>1</option>
											<option value="2" <?if($boeking['Boeking']['aantal_reizigers'] == 2){echo 'selected';}?>>2</option>
											<option value="3" <?if($boeking['Boeking']['aantal_reizigers'] == 3){echo 'selected';}?>>3</option>
											<option value="4" <?if($boeking['Boeking']['aantal_reizigers'] == 4){echo 'selected';}?>>4</option>
											<option value="5" <?if($boeking['Boeking']['aantal_reizigers'] == 5){echo 'selected';}?>>5</option>
											<option value="6" <?if($boeking['Boeking']['aantal_reizigers'] == 6){echo 'selected';}?>>6</option>
											<option value="7" <?if($boeking['Boeking']['aantal_reizigers'] == 7){echo 'selected';}?>>7</option>
											<option value="8" <?if($boeking['Boeking']['aantal_reizigers'] == 8){echo 'selected';}?>>8</option>
											<option value="9" <?if($boeking['Boeking']['aantal_reizigers'] == 9){echo 'selected';}?>>9</option>
											<option value="10" <?if($boeking['Boeking']['aantal_reizigers'] == 10){echo 'selected';}?>>10</option>
											<option value="11" <?if($boeking['Boeking']['aantal_reizigers'] == 11){echo 'selected';}?>>11</option>
											<option value="12" <?if($boeking['Boeking']['aantal_reizigers'] == 12){echo 'selected';}?>>12</option>
											<option value="13" <?if($boeking['Boeking']['aantal_reizigers'] == 13){echo 'selected';}?>>13</option>
											<option value="14" <?if($boeking['Boeking']['aantal_reizigers'] == 14){echo 'selected';}?>>14</option>
											<option value="15" <?if($boeking['Boeking']['aantal_reizigers'] == 15){echo 'selected';}?>>15</option>
											<option value="16" <?if($boeking['Boeking']['aantal_reizigers'] == 16){echo 'selected';}?>>16</option>
											<option value="17" <?if($boeking['Boeking']['aantal_reizigers'] == 17){echo 'selected';}?>>17</option>
											<option value="18" <?if($boeking['Boeking']['aantal_reizigers'] == 18){echo 'selected';}?>>18</option>
											<option value="19" <?if($boeking['Boeking']['aantal_reizigers'] == 19){echo 'selected';}?>>19</option>
											<option value="20" <?if($boeking['Boeking']['aantal_reizigers'] == 20){echo 'selected';}?>>20</option>
										</select>
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
		<span style="font-size:1px;"><?print_r($boeking)?></span>
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