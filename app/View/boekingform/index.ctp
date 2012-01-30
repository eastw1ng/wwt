<!--
KLANT FORMULIER
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
                            
							
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Boeking code</span>
									</div>
									<div class="form_content">
										1345534672
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Reis code</span>
									</div>
									<div class="form_content">
										2346236587
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Klantnummer</span>
									</div>
									<div class="form_content">
										3265478365236325
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Boekingsdatum</span>
									</div>
									<div class="form_content">
										01-01-1988
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Annuleringsdatum</span>
									</div>
									<div class="form_content">
										01-01-1988
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Aantal personen</span>
									</div>
									<div class="form_content">
										<select class="global_select" style="width:auto;">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										</select>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Totale prijs</span>
									</div>
									<div class="form_content">
										&euro; 240.50
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_content form_notes">
									* Verplicht in te vullen veld
								</div>
							</div>
							<div style="width:100%;text-align:right;">
								<button>Toevoegen</button>
								<button>Annuleren</button>
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