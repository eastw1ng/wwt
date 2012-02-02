<?print_r($klanten)?>
<!--
USERS FORMULIER
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
										<span style="margin-left:1px;">Gebruikersnaam</span>
									</div>
									<div class="form_content">
										<input name="data[User][username]" id="UserUsername" class="global_input" style="width:200px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Wachtwoord</span>
									</div>
									<div class="form_content">
										<input name="data[User][password]" id="UserPassword" class="global_input" style="width:200px;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Recht</span>
									</div>
									<div class="form_content">
										<select name="data[User][recht]" id="UserRecht" class="global_select" style="width:170px;">
											<option value="0">Administrator</option>
											<option value="1" selected>Lid</option>
										</select>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Gekoppeld aan klant</span>
									</div>
									<div class="form_content">
										<select name="data[User][klant_id]" id="UsersKlantId" class="global_select" style="width:170px;">
											<option value="">Geen koppeling</option>
											<? foreach($klanten as $klant):?>
											<option value="<?echo $klant['klant']['id']?>"><?echo $klant['klant']['voornaam']." ".$klant['klant']['achternaam']?></option>
											<? endforeach;?>
										</select>
										<span class="form_notes"> *</span>
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