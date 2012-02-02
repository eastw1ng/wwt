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
                            
							<?php echo $this->Form->create('Bestemming', array('action' => 'edit')); ?>
							<?php echo $this->Form->input('id', array('type' => 'hidden'));?>
							<div class="form_container">
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Bestemmingscode</span>
									</div>
									<div class="form_content">
										<? echo $bestemming['Bestemming']['id']?>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Plaats</span>
									</div>
									<div class="form_content">
										<select name="data[Bestemming][plaats_id]" id="ReiPlaatsId" class="global_select" style="width:170px;">
											<? foreach($plaatsen as $plaats):?>
											<option value="<?echo $plaats['plaats']['id']?>" <?if($bestemming['Bestemming']['plaats_id'] == $plaats['plaats']['id']){echo 'selected';};?>><?echo $plaats['plaats']['naam']?></option>
											<? endforeach;?>
										</select>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Alias</span>
									</div>
									<div class="form_content">
										<input name="data[Bestemming][alias]" id="BestemmingAlias" value="<? echo $bestemming['Bestemming']['alias']?>" class="global_input" style="width:95%;" type="text"/>
										<span class="form_notes"> *</span>
									</div>
									<div style="clear: both;"></div>
								</div>
								<div class="form_sub_container">
									<div class="form_head">
										<span style="margin-left:1px;">Foto link</span>
									</div>
									<div class="form_content">
										Database item moet worden aangemaakt....
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